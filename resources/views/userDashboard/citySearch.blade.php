
@extends('userDashboard.master_company')
@section('title')
   Companies | Li Data
@endsection

@section('body')

<section class="section-user-dashboard">
        <!-- START SIDEBAR -->
        <section class="section-user-dashboard--sidebar">
          <div class="heading--sub py-3 ps-4 u-border-bottom">Filters</div>

          <div class="search-bar py-3 ps-4 u-border-bottom">
          <form id="search" action="{{ route('companySearch') }}">
            <input
              type="text"
              id='searchPeopleFromPhoneList'
                name="name"
              class="bg-transparent"
              onkeypress="handle"
              placeholder="Search Companies..."
            />
            </form>
          </div>

          

          <!-- INPUT COMPANY NAME -->
          <div class="input-company u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-building pe-2"></i>
              Company
            </div>
            <form id="search" action="{{ route('companySearch') }}">
            <input
              type="text"
              id='searchPeopleFromPhoneList'
              name="name"
              onkeypress="handle"
              placeholder="Enter companies..."
            />
            </form>
          </div>



          <!-- INPUT CITY -->
          <div class="input-city u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-pin-map-fill"></i>
              City
            </div>
            <form id="searchLocation" action="{{ route('citySearch') }}">
            <input
            type="text"
            name="gender"
            id="gender"
            onkeypress="handleGender"
            placeholder="Enter city"
            />
            </form>
          </div>
          
         
          <!-- INPUT STATE -->
          <div class="input-state u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-map-fill"></i>
              State
            </div>
            <form id="searchHometown" action="{{ route('stateSearch') }}">
            <input
              type="text"
              name="hometown"
              id="hometown"
              placeholder="Enter state"
              onkeypress="handlehometown"
            />
            </form>
          </div>
         <!-- INPUT COUNTRY -->
         <div class="input-country u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-globe2"></i>
              Country
            </div>
            <form id="searchCountry" action="{{ route('country_companySearch') }}">
            <input
            type="text"
            name="country"
            id="country"
            placeholder="Enter country"

            onkeypress="handlecountry"
            />
            </form>
          </div>

          

          

          <!-- INPUT INDUSTRY NAME -->
          <div class="input-industry py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-tools pe-2"></i>
              Industry
            </div>
            <form id="searchCountry" action="{{ route('industry_companySearch') }}">
            <input
            type="text"
            name="industry"
            id="industry"
            placeholder="Search industries..."
            onkeypress="handleindustry"
            />
          </div>
        </section>
        <!-- END SIDEBAR -->

        <!-- START MAIN DASHBOARD -->
        <section class="section-user-dashboard--main">
          <div class="container">
            <div class="row">
            <div class="col-md-5 d-flex align-items-end ps-5">
                    {{--<a  class="selectAll" onclick='selects()'> Select All </a>--}}
                    <input id="checkAll" type="button" class="selectAll" value="Select All"/>
                    </div>
              <div class="col-md-3 offset-7 d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-download border-3">
                  <i class="bi bi-download"></i>
                  &nbsp; Download Data CSV
                </button>
              </div>
            </div>
          </div>
          <!-- START TABLE -->
          <div
            class="section-table table-scrollable mx-5 mt-4 mb-5"
            style="width: 75vw; overflow: auto; max-height: 72vh"
          >
            <table
              class="table table-hover table-bordered table-responsive"
              id="peopleTable"
            >
              <thead>
                <tr>
                
                  <th>Company</th>
                  <th>Quick Actions</th>
                  <th>Employees</th>
                  <th>Industry</th>
                  <th>Company Location</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($allData as $data)
                <tr>
                <td>
                 <input type="checkbox" name="chk[]" id="chk" class="form-check-input" value="{{$data->id}}" >
               
                        <a href="{{ route('user', ['id' => $data->id ]) }}" class="company-name">
                            <!-- {{ $data->organization_name }} -->
                            @if(!empty($data->organization_name))
                        {{ $data->organization_name}}
                        @else
                        -
                        @endif
                        </a>
                    </td>
                 
                  <td>
                    <a
                      class="btn btn-access btn-access--email"
                      href="settings/upgrade.html"
                    >
                      <i class="bi bi-envelope me-2"></i>
                      <i class="bi bi-caret-down-fill"></i>
                    </a>
                    <a
                      class="btn btn-access btn-access--phone"
                      href="settings/upgrade.html"
                    >
                      <i class="bi bi-phone me-2"></i>
                      <i class="bi bi-caret-down-fill"></i>
                    </a>
                  </td>
                  <!-- <td>{{ $data->organization_num_current_employees}}</td> -->
                  <td>
                        @if(!empty($data->organization_num_current_employees))
                        {{ $data->organization_num_current_employees}}
                        @else
                        -
                        @endif
                    </td>
                  <!-- <td>{{ $data->organization_industries}}</td> -->
                  <td>
                        @if(!empty($data->organization_industries))
                        {{ $data->organization_industries}}
                        @else
                        -
                        @endif
                    </td>
                    <td>
                        @if(!empty($data->organization_hq_location_city))
                        {{ $data->organization_hq_location_city .', '.$data->organization_hq_location_state.','.$data->organization_hq_location_country}}
                        @else
                        -
                        @endif
                    </td>
                    
                  <!-- <td>{{ $data->organization_hq_location_state}},{{ $data->organization_hq_location_state}},{{ $data->organization_hq_location_country}}  </td> -->
                </tr>
                @endforeach
               
              </tbody>
            </table>
          </div>
          <!-- END TABLE -->

                <!-- START PAGINATION -->
                <div class="row pb-2 pt-5 mt-2">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <div class="d-sm-inline-flex justify-content-center">
                                    {!! $allData->links() !!}
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- END PAGINATION -->
            </section>
            <!-- END MAIN DASHBOARD -->
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {

            $(document).on('click', '#checkAll', function() {

                if ($(this).val() == 'Select All') {
                    //$('.button input').prop('checked', true);
                    var ele=document.getElementsByName('chk[]');
                    for(var i=0; i<ele.length; i++){
                        if(ele[i].type=='checkbox')
                            ele[i].checked=true;
                    }
                    $(this).val('Deselect All');
                } else {
                    //$('.button input').prop('checked', false);
                    var ele=document.getElementsByName('chk[]');
                    for(var i=0; i<ele.length; i++){
                        if(ele[i].type=='checkbox')
                            ele[i].checked=false;

                    }
                    $(this).val('Select All');
                }
            });

        });
    </script>

    <script>
        function handle(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handleGender(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handlerelationship(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handlelocation(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handlehometown(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handlecountry(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handleindustry(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }


        /*$(function(){
            $('#customCSV').click(function(){
                var val = [];
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });
                //alert(val);
                var selected_values = val;
                $.ajax({
                    type: "GET",
                    url: "{{--{{ route('exportOption.Userscsv') }}--}}",
                    cache: false,
                    data: {id: selected_values},
                    success: function() {
                        let _url = $("#export_records").data('href');
                        //var selected_values = val;
                        //window.location.href = _url + '?user_id=' + selected_values;

                    }
                });
            });

        });*/






    </script>





    <!-- TODO Remove if unused -->
    <!-- JOB TITLE FILTER -->
    <!-- <script>
    $(document).ready(function () {
      $('#job').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('#jobList li').filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
      });
    });
    </script> -->



        @endsection

   
     
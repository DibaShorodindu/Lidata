
@extends('userDashboard.master_user')


@section('title')
   People | Li Data
@endsection

@section('body')
<section class="section-user-dashboard">
            <!-- START SIDEBAR -->
            <section class="section-user-dashboard--sidebar">
                <div class="heading--sub py-3 ps-4 u-border-bottom">Filters</div>
                <!-- INPUT NAME -->
                <div class="search-bar py-3 ps-4 u-border-bottom">
                    <!-- <input
                    type="search"
                    name="search"
                    id="txtSearch"
                    class="bg-transparent"
                    placeholder="Search People..."
                    /> -->
                    <form id="search" action="{{ route('peopleSearch') }}">
                        <input
                            type="text"
                            id='searchPeopleFromPhoneList'
                            name="name"
                            onkeypress="handle"
                            placeholder="Search People..."
                        />
                    </form>
                 </div>
                 <!-- INPUT NAME -->
                <div class="input-name u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                    <i class="bi bi-person-badge pe-2"></i>
                    Name
                    </div>
                    <form id="search" action="{{ route('peopleSearch') }}">
                    <input
                    type="text"
                    id='searchPeopleFromPhoneList'
                    name="name"
                    placeholder="Enter name..."
                    onkeypress="handle"
                    />
                    </form>
                </div>

                

               <!-- INPUT JOB TITLE -->
          <div class="input-job u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-briefcase pe-2"></i>
              Job Title
            </div>
            <form id="searchGender" action="{{ route('genderSearch') }}">
            <input
              type="text"
              name="gender"
              id="gender"
              placeholder="Search for a job title"

             
            
            
            onkeypress="handleGender"
            />
           
            <ul id="gender" class="jobList hide">
              <li>software engineer</li>
              <li>project manager</li>
              <li>teacher</li>
              <li>owner</li>
              <li>student</li>
            </ul>
            </form>
          </div>

                 <!-- INPUT COMPANY NAME -->
                <div class="input-company u-border-bottom py-4 px-4">
                <div class="input-title pb-2">
                    <i class="bi bi-building pe-2"></i>
                    Company
                </div>
                <form id="searchrelationship" action="{{ route('relationshipSearch') }}">
                <input
                    type="text"
                    name="relationship"
                    id="relationship"
                    placeholder="Enter companies..."
                    onkeypress="handlerelationship"
                />
                </form>
          </div>

               <!-- INPUT CITY -->
                <div class="input-city u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                    <i class="bi bi-pin-map-fill"></i>
                    City
                    </div>
                    <form id="searchLocation" action="{{ route('locationSearch') }}">
                    <input
                    type="text"
                    name="location"
                    id="location"
                    placeholder="Enter city"
                    onkeypress="handlelocation"
                    />
                    </form>
                </div>

                <!-- INPUT CURRENT ADDRESS
                <div class="input-currentAdd u-border-bottom py-4 px-4">
                    <div class="input-currentAdd--title pb-2">
                        <i class="bi bi-pin-map-fill"></i>
                        Current Address
                    </div>
                    <form id="searchLocation" action="{{ route('locationSearch') }}">
                        <input
                            type="text"
                            name="location"
                            id="location"
                            placeholder="Enter current address..."
                            onkeypress="handlelocation"
                        />
                    </form>
                </div> -->

                <!-- INPUT HOMETOWN -->

                 <!-- INPUT STATE -->
                <div class="input-state u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                    <i class="bi bi-map-fill"></i>
                    State
                    </div>
                    <form id="searchHometown" action="{{ route('hometownSearch') }}">
                    <input
                    type="text"
                    name="town"
                    id="town"
                    placeholder="Enter state"
                    onkeypress="handletown"
                    />
                    </form>
                </div>

                <!-- INPUT COUNTRY -->
                <div class="input-country u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                    <i class="bi bi-globe2"></i>
                    Country
                    </div>
                    <form id="searchCountry" action="{{ route('countrySearch') }}">
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
                    <form id="searchCountry" action="{{ route('industrySearch') }}">
                    <input
                    type="text"
                    name="industry"
                    id="industry"
                    placeholder="Search industries..."
                    onkeypress="handleindustry"
                    />
                    </form>
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

                        <form action="{{ route('customExport') }}" enctype="multipart/form-data" method="get">
                             @csrf
                            <div class="col-md-3 offset-7 d-flex justify-content-end mt-4">
                                <button type="submit" id="customCSV" class="btn btn-download border-3">
                                    <i class="bi bi-download"></i>
                                    &nbsp; Download Data CSV
                                </button>
                            </div>


                    </div>
                </div>
              
        

        <!-- START MAIN DASHBOARD -->
       <!-- START TABLE -->
 <div class="section-table table-scrollable mx-5 mt-4 mb-5"    style="width: 75vw; overflow: auto; max-height: 72vh"  >
            <table  class="table table-hover table-bordered table-responsive"  id="peopleTable"    >
              <thead>
                <tr>

            
                  <th>Name</th>
                  <th>Title</th>
                  <th>Company</th>
                  <th>Quick Actions</th>
                  <th>Contact Location</th>
                  <th>Employees</th>
                  <th>Industry</th>

                </tr>
              </thead>
              <tbody>
              @foreach ($allData as $data)
              <tr class="table-row">
                <td>
                    <input type="checkbox" name="chk[]" id="chk" class="form-check-input" value="{{$data->id}}" >
                        <a href="{{ route('user', ['id' => $data->id ]) }}" class="person-name">
                            <!-- {{ $data->person_name }} -->
                            @if(!empty($data->person_name))
                        {{ $data->person_name}}
                        @else
                        -
                        @endif
                        </a>
                    </td>
                  
                   <!-- <td>
                    <a href="" class="person-name">
                        {{ $data->person_title }}
                    </a>
                    </td> -->
                    <td>
                        @if(!empty($data->person_title))
                        {{ $data->person_title}}
                        @else
                        -
                        @endif
                    </td>
                    <!-- <td>
                    {{ $data->organization_name  }}
                       
                    </td> -->
                    <td>
                        @if(!empty($data->organization_name ))
                        {{ $data->organization_name }}
                        @else
                        -
                        @endif
                    </td>
                    <td>
                    <button
                      type="button"
                      class="btn btn-access btn-access--phone"
                      id="accessBtn"
                    >
                      Access Email
                    </button>

                    <!-- <div class="message-box hide-text">
                      Verified email costs one credit.
                    </div> -->
                    <!-- <a
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
                    </a> -->
                  </td>

                  <!-- <td>
                        @if(!empty($data->person_location_city ))
                        {{ $data->person_location_city}}
                        @else
                        -
                        @endif

                        @if(!empty($data->person_location_state ))
                        {{ $data->person_location_state}}
                        @else
                        -
                        @endif
                    </td> -->
                    <td>
                        @if(!empty( $data->person_location_city  ))
                        {{ $data->person_location_city .', '.$data->person_location_state.','.$data->person_location_country }}
                        @else
                        -
                        @endif
                    </td>
             
                  <!-- <td>{{ $data-> person_location_city}},{{ $data-> person_location_state }}, {{ $data-> person_location_country }} </td> -->
                  <!-- <td> {{ $data-> organization_num_current_employees}}</td> -->
                  <td>
                    @if(!empty($data->organization_num_current_employees ))
                    {{ $data-> organization_num_current_employees}}
                    @else
                    -
                    @endif
                    </td>
                  <!-- <td>{{ $data-> organization_industries}}</td> -->
                  <td>
                    @if(!empty($data->organization_industries ))
                    {{ $data-> organization_industries}}
                    @else
                    -
                    @endif
                    </td>
                </tr>
               
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- END TABLE -->


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
        function handletown(e){
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




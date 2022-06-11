
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">

  <!-- BOOTSTRAP ICONS     -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />


  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Dashboard</title>
</head>

<body>

  <section class="section-dashboard">
    <!-- START SIDEBAR -->
    <section class="section-dashboard--sidebar">
      <!-- START MENU -->
      <nav class="menubar">
        <ul class="menu d-flex flex-column">
          <li class="">
            <a href="" class="navbar-brand">
              <img src="assets/images/logo--company-name.png" alt="logo" />
            </a>
          </li>
          <li class="menu-item ">
            <a href="{{ url('/admin-dashboard') }}">
              <i class="bi bi-collection menu-item--icon "></i>
              <span class="menu-item--text ">
                Dashboard
              </span>
            </a>
          </li>
          <li class="menu-item active">
            <a href="{{ url('/lidata') }}">
              <i class="bi bi-people menu-item--icon "></i>
              <span class="menu-item--text ">
                View All People Data
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('/lidata_company') }}">
              <i class="bi bi-briefcase menu-item--icon "></i>
              <span class="menu-item--text ">
                View All Company Data
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="">
              <i class="bi bi-person-badge menu-item--icon "></i>
              <span class="menu-item--text ">
                User Details
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="">
              <i class="bi bi-box-arrow-in-down menu-item--icon "></i>
              <span class="menu-item--text ">
                User Data Import
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="">
              <i class="bi bi-bar-chart menu-item--icon"></i>
              <span class="menu-item--text">
                Order History
              </span>
            </a>
          </li>
          </a>
          <li class="menu-item">
            <a href="">
              <i class="bi bi-currency-bitcoin menu-item--icon"></i>
              <span class="menu-item--text">
                Credit History
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="">
              <i class="bi bi-arrow-left-right menu-item--icon"></i>
              <span class="menu-item--text">
                Credit Transfer
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="">
              <i class="bi bi-wallet2 menu-item--icon"></i>
              <span class="menu-item--text">
                Payment Settings
              </span>
            </a>
          </li>
          <li class="menu-item menu-item-footer">
            <a href="home.html">
              <i class="bi bi-power menu-item--icon"></i>
              <span class="menu-item--text">
                Logout
              </span>
            </a>
          </li>
          </a>
        </ul>
      </nav>
      <!-- END MENU -->
    </section>
    <!-- END SIDEBAR -->

    <!-- START MAIN BODY -->
    <section class="section-dashboard--main section-viewalldata">
      <div class="container">

        <div class="row mb-4">
          <div class="col-md-2 m-auto">
            <h3 class="fw-light">Total Entries: <span>101</span> </h3>
          </div>

          <!-- START PEOPLE SEARCHBAR -->
          <div class="offset-md-7 col-md-3 d-flex justify-content-end">
            <input type="text" name="search" id="searchPeople" class="searchBar w-100" onkeyup="searchPeople()"
              placeholder="Search People..." />
          </div>
          <!-- END PEOPLE SEARCHBAR -->
        </div>

        <!-- START TABLE -->
        <div class="row pt-2 pb-4">

          <!-- TODO Add table-scrollable to col-md-12 -->
          <div class="col-md-12 table-scrollable">
          @if(Session::has('post_deleted'))
          <div class="alert alert-success" role="alert">
          {{Session::get('post_deleted')}}
                        
          </div>
          @endif
            <table class="table table-hover table-bordered table-responsive" id="table">
              <thead>
                <tr>
                <th>Id</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Company</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @foreach ($employees as $data)
                <tr class="table-row">
                <td>{{$data->id}}</td>
                  <td scope="row" class="name">
                    <a href="user01.html"> {{$data->person_name}}</a>
                  </td>
                  <td>{{$data->person_title}}</td>
                  <td>{{$data->organization_name}}</td>
                  <td>
                  {{$data->person_email}}
                  </td>
                  <td>{{$data->person_sanitized_phone}}</td>
                  <td>
                    <button type="button" class="btn btn-edit bg-primary" data-bs-toggle="modal"
                      data-bs-target="#editModal">Edit</button>
                  </td>
                  <td>
                    <a type="button" class="btn btn-delete bg-danger" href="/delete_post/{{$data->id}}">Delete</a>
                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <!-- START MODAL FOR EDIT  -->
          <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <form>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title">
                    </div>

                    <div class="mb-3">
                      <label for="company" class="form-label">Company</label>
                      <input type="text" class="form-control" id="company">
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                      <label for="number" class="form-label">Phone number</label>
                      <input type="tel" class="form-control" id="number">
                    </div>

                    <div class="mb-3">
                      <label for="per_func" class="form-label">Person functions</label>
                      <input type="text" class="form-control" id="per_func">
                    </div>

                    <div class="mb-3">
                      <label for="person_detailed_function" class="form-label">Person detailed function</label>
                      <input type="text" class="form-control" id="person_detailed_function">
                    </div>

                    <div class="mb-3">
                      <label for="person_seniority" class="form-label">Person seniority</label>
                      <input type="text" class="form-control" id="person_seniority">
                    </div>

                    <div class="mb-3">
                      <label for="person_location_city" class="form-label">City</label>
                      <input type="text" class="form-control" id="person_location_city">
                    </div>

                    <div class="mb-3">
                      <label for="person_location_state" class="form-label">State</label>
                      <input type="text" class="form-control" id="person_location_state">
                    </div>

                    <div class="mb-3">
                      <label for="person_location_country" class="form-label">Country</label>
                      <input type="text" class="form-control" id="person_location_country">
                    </div>

                    <div class="mb-3">
                      <label for="person_location_postal_code" class="form-label">Postal Code</label>
                      <input type="text" class="form-control" id="person_location_postal_code">
                    </div>

                    <div class="mb-3">
                      <label for="person_linkedin_url" class="form-label">LinkedIn URL</label>
                      <input type="url" class="form-control" id="person_linkedin_url">
                    </div>

                  </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!-- END MODAL FOR EDIT  -->
        </div>
        <!-- END TABLE -->

        <div  class="row py-5">
        {{-- Pagination --}}
      <div class="d-flex justify-content-end">
        {!! $employees->links() !!}
      </div>
      </div>
      
    </section>
    <!-- END MAIN BODY -->
  </section>


  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- Chart JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/dashboard.js"></script>

</body>

</html>









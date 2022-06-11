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
            <a href="{{ url('admin-dashboard') }}" class="navbar-brand">
              <img src="assets/images/logo--company-name.png" alt="logo" />
            </a>
          </li>
          <li class="menu-item active">
            <a href="">
              <i class="bi bi-collection menu-item--icon "></i>
              <span class="menu-item--text ">
                Dashboard
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('lidata') }}">
              <i class="bi bi-people menu-item--icon "></i>
              <span class="menu-item--text ">
                View All People Data
              </span>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ url('lidata_company') }}">
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
    <section class="section-dashboard--main">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card rounded-3">
              <div class="card-body">
                <div class="display-6">
                  Hi,
                  <span>Shamonti Haque</span>. Welcome to your dashboard!
                </div>
                <p class="mt-2 text-end mb-0 pe-3 text-info fw-bold" id="file-upload-filename">
                  &nbsp;
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex align-items-center justify-content-start">
          <form action="{{route('employee.import')}}" class="d-flex"  method="POST" enctype="multipart/form-data">

          <!-- START UPLOAD BTN -->
          <div class="col-md-6 px-2 custom-file text-left">
              <input id='fileid' type='file' name="file" hidden class="custom-file-input" />
              <input id='buttonid' type='button' class="btn btn-upload" value='Upload' />
          </div>
          <div class="col-md-6 px-2">
              @csrf
              <input id='buttonid' type='submit' class="btn btn-upload" value='Import' />
          </div>
              <!-- END IMPORT  BTN -->  
            </form>
          </div>
        </div>

        <div class="container px-2">
          <div class="row">
            <div class="col-md-12 card rounded-3">
              <h2 class="heading--main pt-4 pb-0 px-3 mt-2">
                Sales Report
              </h2>
              <canvas id="salesChart" height="300rem"></canvas>
            </div>
          </div>
        </div>

        <div class="container px-2">
          <div class="row">
            <div class="col-md-12 card rounded-3">
              <h2 class="heading--main pt-4 pb-0 px-3 mt-2">
                Recent Credit History
              </h2>
              <canvas id="creditChart" height="300rem"></canvas>
            </div>
          </div>
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
  <script src="assets/js/chart.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>
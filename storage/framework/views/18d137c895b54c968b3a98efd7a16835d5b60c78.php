<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta
            name="description"
            content="Displaying all data related to people from Li Data's Database"
    />
    <meta name="keywords" content="li data," />


    <title>Companies | Li Data</title>

    <!-- Bootstrap CSS -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
            rel="stylesheet"
    />

    <!-- Animate CSS -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>adminAsset/assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('/')); ?>adminAsset/assets/images/icons/favicon.ico" />

</head>

<body>
<header>
    <!-- START NAVBAR -->
    <nav
            class="navbar navbar--user navbar-expand-md navbar-light"
            id="user-nav"
    >
        <div class="container-fluid justify-content-end">
            <a class="navbar-brand" href="<?php echo e(route('/')); ?>">
                <img
                        class="img-fluid"
                        src="<?php echo e(asset('/')); ?>adminAsset/assets/images/logo.svg"
                        alt="li data"
                />
            </a>

            <button
                    class="navbar-toggler me-auto"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="bi bi-list"></i>
            </button>



            <div
                    class="collapse navbar-collapse justify-content-between"
                    id="navbarSupportedContent"
            >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item pl-4">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('loggedInUser')); ?>">
                            <i class="bi bi-house-door"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block" id="search">
                        <a class="nav-link nav-link__search active" href="<?php echo e(route('company')); ?>">
                            <i class="bi bi-search"></i>
                            Data Search
                        </a>



                        <!-- Show element on hover  -->
                        <div class="search__details hide">
                            <a href="<?php echo e(route('people')); ?>">
                                <div class="search__details--left d-flex">
                                    <div class="search__details--icon-box">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="search__details--text">
                                        <div
                                                class="fw-bold heading--sub d-flex justify-content-between"
                                        >
                                            People
                                            <i class="bi bi-arrow-right animate-arrow"></i>
                                        </div>
                                        <p>
                                            Search for hyper-targeted lists of people using
                                            filters.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo e(route('company')); ?>">
                                <div class="search__details--right d-flex">
                                    <div class="search__details--icon-box">
                                        <i class="bi bi-building"></i>
                                    </div>
                                    <div class="search__details--text">
                                        <div
                                                class="fw-bold heading--sub d-flex justify-content-between"
                                        >
                                            Companies
                                            <i class="bi bi-arrow-right animate-arrow"></i>
                                        </div>
                                        <p>
                                            Search for targeted lists of companies using filters.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item d-md-none d-lg-none">
                        <a class="nav-link" href="<?php echo e(route('people')); ?>">
                            <i class="bi bi-send px-2"></i>
                            People
                        </a>
                    </li>
                    <li class="nav-item d-md-none d-lg-none">
                        <a class="nav-link" href="<?php echo e(route('company')); ?>">
                            <i class="bi bi-building px-2"></i>
                            Companies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('upgrade')); ?>">
                            <i class="bi bi-box-seam px-2"></i>
                            Products
                        </a>
                    </li>
                </ul>
            </div>




            <!-- update lidata code last -->




            <!-- START SHOW ELEMENT ON CLICKING USER -->
            <div class="user-div hide u-box-shadow-1">
                <h4 class="px-4 pt-5"></h4>
                <div class="user--label mx-4">
                    <span><?php echo e(Auth::user()->firstName); ?> <?php echo e(Auth::user()->lastName); ?></span>
                </div>

                <div class="user--menu">
                    <a class="user--menu-item" href="<?php echo e(route('account')); ?>">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                    <a class="user--menu-item" href="<?php echo e(route('upgrade')); ?>">
                        <i class="bi bi-trophy"></i>
                        <span>Upgrade Plan</span>
                    </a>

                    <a class="user--menu-item mb-3" href="<?php echo e(route('userLogout')); ?>">
                        <i class="bi bi-power"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <!-- END SHOW ELEMENT ON CLICKING USER -->
        </div>

        <!-- START RIGHT NAV ITEMS -->
        <div class="d-flex align-items-center nav-right__box">
            <a class="btn btn-blue mx-4" href="<?php echo e(route('upgrade')); ?>"
            >Get unlimited leads
            </a>
            <button type="button" class="btn">
                <a href="#">
                    <i class="bi bi-telephone phone-btn"></i>
                </a>
            </button>

            <!-- Link to Blog site -->
            <a class="btn" href="http://help.phonelist.io/">
                <i class="bi bi-question-circle"></i>
            </a>

            <button type="button" class="btn notification-btn">
                <i class="bi bi-bell"></i>
            </button>
            <button
                    type="button"
                    id="userBtn"
                    class="user user-btn circle-element mx-3"
            >

                <p class="user-name"><?php echo e($firstStringCharacter = substr(Auth::user()->firstName, 0, 1)); ?><?php echo e($firstStringCharacter = substr(Auth::user()->lastName, 0, 1)); ?></p>
            </button>
        </div>
        <!-- END RIGHT NAV ITEMS -->
    </nav>
    <!-- END NAVBAR -->

    <!-- START SECOND NAVBAR -->
    <div class="navbar02 u-border-bottom">
        <a href="<?php echo e(route('people')); ?>">
            <div class="navbar02--left">
                <h2 class="nav-item fs-4">
                    <i class="bi bi-people pe-2"></i>
                    People
                </h2>
            </div>
        </a>

        <a href="<?php echo e(route('company')); ?>">
            <div class="navbar02--right">
                <h2 class="nav-item nav-item--colored fs-4">
                    <i class="bi bi-building pe-2"></i>
                    Companies
                </h2>
            </div>
        </a>
    </div>
    <!-- END SECOND NAVBAR -->

    <!-- FIXME hide when clicked somewhere else -->
    <!-- START SHOW WHEN CLICKED ON PHONE -->
    <div class="u-box-shadow-1 phone-call__div hide">
        <div class="phone-call--icon">
            <i class="bi bi-telephone-outbound text-primary"></i>
        </div>
        <div class="phone-call--text">
            Instantly click-to-call prospects from anywhere.
        </div>
        <div class="phone-call--button btn-blue">Upgrade to Professional</div>
        <a class="phone-call--link"> Learn more </a>
    </div>
    <!-- END SHOW WHEN CLICKED ON PHONE -->

    <!-- START SHOW WHEN CLICKED ON NOTIFICATION -->
    <div
            class="u-box-shadow-1 notification__sidebar hide animate__animated animate__fadeInRightBig"
    >
        <div class="notification--header">
            <div class="notification--header-title">
                <h5>NOTIFICATIONS</h5>
            </div>
            <div class="notification--header-icons">
                <div class="btn"><i class="bi bi-arrow-clockwise"></i></div>
                <div class="btn close-btn">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>
        </div>
        <div class="notification--body"></div>
    </div>
    <!-- END SHOW WHEN CLICKED ON NOTIFICATION -->

    <!-- START SHOW WHEN CLICKED ON NOTIFICATION -->
    <!-- <div
        class="u-box-shadow-1 notification__sidebar hide animate__animated animate__fadeInRightBig"
    >
        <div class="notification--header">
            <div class="notification--header-title">
                <h5>NOTIFICATIONS</h5>
            </div>
            <div class="notification--header-icons">
                <div class="btn"><i class="bi bi-arrow-clockwise"></i></div>
                <div class="btn close-btn">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>
        </div>
        <div class="notification--body"></div>
    </div> -->
    <!-- END SHOW WHEN CLICKED ON NOTIFICATION -->

</header>

<main id="companyData">
    <section class="section-user-dashboard">
        <!-- START SIDEBAR -->
        <section class="section-user-dashboard--sidebar">
            <div class="heading--sub py-3 ps-4 u-border-bottom">Filters</div>

            <div class="search-bar py-3 ps-4 u-border-bottom">
                <input
                        type="text"
                        id='searchPeopleFromPhoneList'
                        name="name"
                        class="bg-transparent"
                        onkeypress="handle()"
                        placeholder="Search Companies..."
                        autocomplete="off"
                />
            </div>
            <form id="search" action="<?php echo e(route('company.search.combination')); ?>">
                <!-- INPUT COMPANY NAME -->
                <div class="input-company u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                        <i class="bi bi-building pe-2"></i>
                        Company
                    </div>
                    <?php if(isset($company)): ?>
                        <input
                                type="text"
                                name="company"
                                id="company"
                                placeholder="Enter companies..."
                                onkeypress="handle()"
                                autocomplete="off"
                                value="<?php echo e($company); ?>"
                        />
                    <?php else: ?>
                        <input
                                type="text"
                                name="company"
                                id="company"
                                placeholder="Enter companies..."
                                onkeypress="handle()"
                                autocomplete="off"
                        />
                    <?php endif; ?>
                    <button type="submit" class="btn btn-blue rounded-1 w-100">
                        Apply
                    </button>
                </div>

                <!-- INPUT CITY -->
                <div class="input-city u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                        <i class="bi bi-pin-map-fill"></i>
                        City
                    </div>
                    <?php if(isset($city)): ?>
                        <input
                                type="text"
                                name="city"
                                id="city"
                                placeholder="Enter city"
                                onkeypress="handle()"
                                autocomplete="off"
                                value="<?php echo e($city); ?>"
                        />
                    <?php else: ?>
                        <input
                                type="text"
                                name="city"
                                id="city"
                                placeholder="Enter city"
                                onkeypress="handle()"
                                autocomplete="off"
                        />
                    <?php endif; ?>
                    <button type="submit" class="btn btn-blue rounded-1 w-100">
                        Apply
                    </button>
                </div>

                <!-- INPUT STATE -->
                <div class="input-state u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                        <i class="bi bi-map-fill"></i>
                        State
                    </div>
                    <?php if(isset($state)): ?>
                        <input
                                type="text"
                                name="state"
                                id="state"
                                placeholder="Enter state"
                                onkeypress="handle()"
                                autocomplete="off"
                                value="<?php echo e($state); ?>"
                        />
                    <?php else: ?>
                        <input
                                type="text"
                                name="state"
                                id="state"
                                placeholder="Enter state"
                                onkeypress="handle()"
                                autocomplete="off"
                        />
                    <?php endif; ?>
                    <button type="submit" class="btn btn-blue rounded-1 w-100">
                        Apply
                    </button>
                </div>
                <!-- INPUT COUNTRY -->
                <div class="input-country u-border-bottom py-4 px-4">
                    <div class="input-title pb-2">
                        <i class="bi bi-globe2 pe-2"></i>
                        Country
                    </div>
                    <div class="dropdown" id="searchCountry">
                        <?php if(isset($countries)): ?>
                            <input
                                    class="searchBar col-12"
                                    id="countryInput"
                                    type="text"
                                    name="country"
                                    placeholder="Search by Country..."
                                    data-toggle="dropdown"
                                    data-bs-toggle="dropdown"
                                    autocomplete="off"
                                    value="<?php echo e($countries); ?>"
                            />
                        <?php else: ?>
                            <input
                                    class="searchBar col-12"
                                    id="countryInput"
                                    type="text"
                                    name="country"
                                    placeholder="Search by Country..."
                                    data-toggle="dropdown"
                                    data-bs-toggle="dropdown"
                                    autocomplete="off"
                            />


                        <?php endif; ?>
                        <span class="caret"></span>

                        <ul class="dropdown-menu p-3" aria-labelledby="countryDropdown">
                            <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button  class="dropdown-item" id="countryBtn<?php echo e($countryName->id); ?>"
                                         type="submit" onclick="getCountryName(<?php echo e($countryName->id); ?>)"
                                         value="<?php echo e($countryName->countryname); ?>" ><?php echo e($countryName->countryname); ?>

                                    (<?php echo e($countryName->countrycode); ?>)
                                </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <!-- INPUT INDUSTRY NAME -->
                <div class="input-industry py-4 px-4">
                    <div class="input-title pb-2">
                        <i class="bi bi-tools pe-2"></i>
                        Industry
                    </div>
                    <?php if(isset($industry)): ?>
                        <input
                                type="text"
                                name="industry"
                                id="industry"
                                placeholder="Search industries..."
                                onkeypress="handle()"
                                autocomplete="off"
                                value="<?php echo e($industry); ?>"
                        />
                    <?php else: ?>
                        <input
                                type="text"
                                name="industry"
                                id="industry"
                                placeholder="Search industries..."
                                onkeypress="handle()"
                        />
                    <?php endif; ?>
                    <button type="submit" class="btn btn-blue rounded-1 w-100">
                        Apply
                    </button>
                </div>
            </form>
        </section>
        <!-- END SIDEBAR -->

        <!-- START MAIN DASHBOARD -->
        <form action="<?php echo e(route('customExport')); ?>" enctype="multipart/form-data" method="get">
            <?php echo csrf_field(); ?>
            <section class="section-user-dashboard--main">
                <div class="container">
                    <div class="row">
                        <!-- Download CSV Button -->
                        <div class="container">
                            <div class="row py-4">
                                <input type="number" hidden name="userId" value="<?php echo e(Auth::user()->id); ?>">
                                <div class="col-md-8 ms-auto d-flex justify-content-end">
                                    <button
                                            type="submit"
                                            id="customCSV"
                                            class="btn btn-download border-3"
                                    >
                                        <i class="bi bi-download"></i>
                                        &nbsp; Download Data CSV
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Download CSV Button -->
                        <!-- START TABLE -->
                        <div
                                class="section-table table-scrollable mx-5 mb-2"
                                style="width: 75vw; overflow: auto; max-height: 72vh"
                        >
                            <div class="container">
                                <div class="row">
                                    <table
                                            class="table table-hover table-bordered table-responsive list"
                                            id="peopleTable"
                                    >
                                        <thead>
                                        <tr>
                                            <th class="px-4">
                                                <input id="checkAll" type="button" class="selectAll" value="Select All"/>
                                            </th>
                                            <th>Company</th>
                                            <th>Quick Actions</th>
                                            <th>Employees</th>
                                            <th>Industry</th>
                                            <th>Company Location</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="chk[]" id="chk" class="form-check-input" value="<?php echo e($data->id); ?>" >
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('user', ['id' => $data->id ])); ?>" class="company-name">
                                                        <?php if(!empty($data->organization_name)): ?>
                                                            <?php echo e($data->organization_name); ?>

                                                        <?php else: ?>
                                                            -
                                                        <?php endif; ?>
                                                    </a>
                                                </td>
                                                <td class="position-relative">
                                                    <button
                                                            type="button"
                                                            class="btn btn-access btn-access--phone"
                                                            id="<?php echo e($data->id); ?>"
                                                            onclick="accessPhoneNumber(<?php echo e($data->id); ?>)"
                                                    >
                                                        Access Email
                                                    </button>
                                                    <div class="message-box hide-text">
                                                        Verified number costs one credit.
                                                    </div>

                                                    <div class="button-group hide" id="buttonGroup<?php echo e($data->id); ?>">
                                                        <a
                                                                class="btn btn-access btn-access--phone"
                                                                href=""
                                                        >
                                                            <i class="bi bi-phone"></i>
                                                            <i class="bi bi-caret-down-fill"></i>
                                                        </a>
                                                        <div
                                                                class="message-box message-box--phone hide-text"
                                                                id="messagePhone<?php echo e($data->id); ?>"
                                                        >
                                                        </div>

                                                        <a
                                                                class="btn btn-access btn-access--email"
                                                                href=""
                                                        >
                                                            <i class="bi bi-envelope"></i>
                                                            <i class="bi bi-caret-down-fill"></i>
                                                        </a>

                                                        <div
                                                                class="message-box message-box--email hide-text"
                                                                id="messageEmail<?php echo e($data->id); ?>"
                                                        >
                                                            <!-- Email not available -->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php if(!empty($data->organization_num_current_employees)): ?>
                                                        <?php echo e($data->organization_num_current_employees); ?>

                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if(!empty($data->organization_industries)): ?>
                                                        <?php echo e($data->organization_industries); ?>

                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if(!empty($data->organization_hq_location_city)): ?>
                                                        <?php echo e($data->organization_hq_location_city .', '.$data->organization_hq_location_state.','.$data->organization_hq_location_country); ?>

                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TABLE -->

                <!-- Download CSV Button -->
                <div class="container">
                    <div class="row py-4">
                        <div class="col-md-4 text-secondary ps-5">
                            Filtered records: <?php echo e($count); ?>

                        </div>
                        <input type="number" hidden name="userId" value="<?php echo e(Auth::user()->id); ?>">
                        <div class="col-md-8 ms-auto d-flex justify-content-end">
                            <button
                                    type="submit"
                                    id="customCSV"
                                    class="btn btn-download border-3"
                            >
                                <i class="bi bi-download"></i>
                                &nbsp; Download Data CSV
                            </button>
                        </div>
                    </div>
                </div>

                <!-- START PAGINATION -->
                <div class="row pb-2 pt-5 mt-2">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <div class="d-sm-inline-flex justify-content-center">
                                    <?php echo $allData->links(); ?>

                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- END PAGINATION -->
            </section>
        </form>
        <!-- END MAIN DASHBOARD -->
    </section>
</main>

<!-- Bootstrap JS -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
></script>

<!-- jQuery -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
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


<script type="text/javascript">
    let collection,  buttonGroup, messageBox, buttonId;

    messageBox = document.getElementById('message');

    function accessPhoneNumber(id)
    {
        $.ajax({
            url:"<?php echo e(route('peopleDataHistory')); ?>",
            method:"POST",
            data:{id:id, _token:"<?php echo e(csrf_token()); ?>"},
            dataType:"json",
            success:function(data)
            {
                collection = document.getElementById(id);
                buttonGroup = document.getElementById('buttonGroup'+id);
                buttonId = document.getElementById(id).value;
                collection.classList.add('hide');
                buttonGroup.classList.remove('hide');
                for (var count = 0; count < data.length; count++) {
                    if (data[count].person_sanitized_phone != null)
                        $("#messagePhone" + id).text(data[count].person_sanitized_phone);
                    else
                        $("#messagePhone" + id).text("N/A");
                    if (data[count].email != null)
                        $("#messageEmail" + id).text(data[count].person_email);
                    else
                        $("#messageEmail" + id).text("N/A");
                }
            },
            error: function () {
                window.location.href = "settings/upgrade";
            }
        })

    }

</script>


<!-- Custom JS -->
<script src="<?php echo e(asset('/')); ?>adminAsset/assets/js/navbar.js"></script>
<script src="<?php echo e(asset('/')); ?>adminAsset/assets/js/people.js"></script>
<script src="<?php echo e(asset('/')); ?>adminAsset/assets/js/script.js"></script>

<script>
    function handle(e){
        if(e.key === "Enter"){
            alert("Enter was just pressed.");
        }

        return false;
    }
</script>


<script>
    $(document).ready(function () {
        $('#countryDropdown').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('.dropdown-menu li').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

</body>
</html>


   
     <?php /**PATH E:\xampp\htdocs\Lidata\resources\views/userDashboard/company.blade.php ENDPATH**/ ?>
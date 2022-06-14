
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    <!-- Animate CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>/adminAsset/assets/css/style.css" />

    <title>Lidata</title>
    <link rel="shortcut icon" href="<?php echo e(asset('/')); ?>/adminAsset/images/icons/favicon.ico" />
</head>

<body>
<header>
    <!-- START NAVBAR -->
    <nav
        class="navbar navbar--category fixed-top navbar-expand-lg navbar-light border-bottom bg-white"
        id="sticky-nav"
    >
        <div class="container-fluid px-5 py-2">
            <a class="navbar-brand d-block ms-5 ps-5" href="../../home.html">
                <img
                    src="<?php echo e(asset('/')); ?>/adminAsset/assets/images/logo--company-name-dark.png"
                    alt="logo"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul
                    class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center py-2 mx-5 px-5"
                >
                    <li class="nav-item">
                        <a class="nav-link pe-4" aria-current="page" href="#"
                        >Product</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-4" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link py-0">
                            <button type="button" class="btn btn-grad px-4">
                                Create Free Account
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START SECTION PEOPLE CARDS -->
    <section class="section-people-cards u-padding-lg mt-5">
        <div class="container mt-5 pt-4">
            <div class="row">
                <div class="col-md-6">
                    <div
                        class="card u-box-shadow-1 border-0 u-border-radius h-100 bg-light"
                    >
                        <div class="card-body p-5">
                            <h4 class="card-title">
                                <div class="d-flex align-items-center pb-3 mb-4">
                                    <div class="circle-element circle-element--person">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <span class="sub-heading">Person Search</span>
                                </div>
                            </h4>
                            <div>
                                <a href="#" class="dark-link active">A</a>
                                <a href="#" class="dark-link">B</a>
                                <a href="#" class="dark-link">C</a>
                                <a href="#" class="dark-link">D</a>
                                <a href="#" class="dark-link">E</a>
                                <a href="#" class="dark-link">F</a>
                                <a href="#" class="dark-link">G</a>
                                <a href="#" class="dark-link">H</a>
                                <a href="#" class="dark-link">I</a>
                                <a href="#" class="dark-link">J</a>
                                <a href="#" class="dark-link">K</a>
                                <a href="#" class="dark-link">L</a>
                                <a href="#" class="dark-link">M</a>
                                <a href="#" class="dark-link">N</a>
                                <a href="#" class="dark-link">O</a>
                                <a href="#" class="dark-link">P</a>
                                <a href="#" class="dark-link">Q</a>
                                <a href="#" class="dark-link">R</a>
                                <a href="#" class="dark-link">S</a>
                                <a href="#" class="dark-link">T</a>
                                <a href="#" class="dark-link">U</a>
                                <a href="#" class="dark-link">V</a>
                                <a href="#" class="dark-link">W</a>
                                <a href="#" class="dark-link">X</a>
                                <a href="#" class="dark-link">Y</a>
                                <a href="#" class="dark-link">Z</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-transparent u-border-radius h-100">
                        <div class="card-body d-flex align-items-center px-5 mx-5">
                            <div class="col-md-4 px-4 mx-3">
                                <img
                                    src="<?php echo e(asset('/')); ?>/adminAsset/assets/images/data.svg"
                                    class="img-fluid"
                                    alt="illustration"
                                />
                            </div>
                            <div class="col-md-8">
                                <h1 class="heading--sub mb-4">
                                    Reach your target contacts faster with Apollo
                                </h1>
                                <button type="button" class="btn btn-grad px-4">
                                    Sign Up For Free
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PEOPLE CARDS -->

    <!-- START SECTION MESSAGE -->
    <section class="section-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body p-5 mt-5">
                            <h2 class="card-text no-data">

                            </h2>
                            <p class="card-text">

                                <?php echo e($message = Session::get('message')); ?>

                                <h2 class="card-text no-data">
                                    <span class="text-secondary"><?php echo e($message); ?></span>
                                </h2>


                                </p>

                                <div class="card-footer bg-transparent border-0">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION MESSAGE -->
</header>

<main></main>

<!-- Custom JS -->

<script src="<?php echo e(asset('/')); ?>/adminAsset/assets/js/script.js"></script>

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
</body>
</html>
<?php /**PATH D:\xampp\htdocs\PhoneList\resources\views//front/nCategory.blade.php ENDPATH**/ ?>
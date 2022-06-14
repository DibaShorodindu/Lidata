<?php
    $connect = mysqli_connect("localhost", "root", "", "phonelist");
    $query = "SELECT * FROM phone_lists";
    $result = mysqli_query($connect, $query);
    $rowcount = mysqli_num_rows( $result );
?>
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
            <link rel="stylesheet" href="<?php echo e(asset('/')); ?>adminAsset/assets/css/style.css" />
            <title>Dashboard</title>
            <link rel="shortcut icon" href="<?php echo e(asset('/')); ?>adminAsset/assets/images/icons/favicon.ico" />
        </head>

        <body>

            <section class="section-dashboard">
                <!-- START SIDEBAR -->
                <section class="section-dashboard--sidebar">
                    <!-- START MENU -->
                    <nav class="menubar">
                        <ul class="menu d-flex flex-column">
                            <li class="">
                                <a href="<?php echo e(route('/')); ?>" class="navbar-brand">
                                    <img src="<?php echo e(asset('/')); ?>adminAsset/assets/images/logo--company-name.png" alt="logo" />
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo e(route('/adminDashboard')); ?>">
                                    <i class="bi bi-collection menu-item--icon "></i>
                                    <span class="menu-item--text ">
                            Dashboard
                          </span>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="<?php echo e(route('view-all')); ?>">
                                    <i class="bi bi-clipboard-data menu-item--icon "></i>
                                    <span class="menu-item--text ">
                            View All Data
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
                            <div class="col-md-4 m-auto">
                                <h3 class="fw-light">Total Entries: <span><?php echo e($rowcount); ?></span> </h3>
                            </div>

                            <!-- START PEOPLE SEARCHBAR -->
                            <div class="offset-md-5 col-md-3 d-flex justify-content-end">
                                <input type="text" name="search" id="searchPeople" class="searchBar w-100" onkeyup="searchPeople()"
                                       placeholder="Search People..." />
                            </div>

                            <!-- END PEOPLE SEARCHBAR -->
                        </div>

                        <!-- START TABLE -->
                        <div class="row pt-2 pb-4">

                            <!-- TODO Add table-scrollable to col-md-12 -->
                            <div class="col-md-12 table-scrollable">
                                <?php if($message = Session::get('message')): ?>
                                    <h4 id="file-upload-filename" class="mt-2 text-end mb-0 pe-3 text-info fw-bold"><?php echo e($message); ?></h4>
                                <?php endif; ?>
                                <table class="table table-hover table-bordered table-responsive edit" id="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Facebook URL</th>

                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="table-row">
                                                <td scope="row" class="name">
                                                    <a href=""> <?php echo e($data->name); ?> </a>
                                                </td>
                                                <td> <?php echo e($data->phone); ?> </td>
                                                <td> <?php echo e($data->email); ?> </td>
                                                <td> https://www.facebook.com/<?php echo e($data->uid); ?> </td>

                                                <td>
                                                    <input type="button" name="view" value="Edit" id="<?php echo e($data->id); ?>" class="btn btn-edit bg-primary view_data" />

                                                </td>

                                                <td>
                                                    <a href="<?php echo e(route('delete-data', ['id' => $data->id])); ?>" onclick="return confirm('Are you sure?')">
                                                        <button type="button" class="btn btn-delete bg-danger">Delete</button>
                                                    </a>


                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

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
                                                        <?php echo $allData->links(); ?>

                                                    </div>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- END PAGINATION -->
                            </div>


                            <!-- START MODAL FOR EDIT  -->
                            <div class="modal fade" id="dataModal" tabindex="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body" id="employee_detail"> </div>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- END MODAL FOR EDIT  -->

                    </div>

                        <!-- END TABLE -->

                </section>

                <!-- END MAIN BODY -->
            </section>




       







        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Chart JS -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Custom JS -->
        <script src="<?php echo e(asset('/')); ?>adminAsset/assets/js/script.js"></script>
        <script src="<?php echo e(asset('/')); ?>adminAsset/assets/js/dashboard.js"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>



        <script type="text/javascript">
            $(document).ready(function () {
                //$('#table').DataTable();
                $('.view_data').click(function(){

                    var id = $(this).attr("id");
                    //console.log(id);
                    $.ajax({
                        url:"select.blade.php",
                        type:"post",
                        data:{id:id},
                        success:function(data){
                            $('#employee_detail').html(data);
                            $('#dataModal').modal("show");
                        }
                    });
                });
            });
        </script>

        </body>

    </html>
<?php /**PATH D:\xampp\htdocs\PhoneList\resources\views/admin/manage-data.blade.php ENDPATH**/ ?>
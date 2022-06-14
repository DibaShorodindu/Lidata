<?php
$connect = mysqli_connect("localhost", "root", "", "phonelist");
$query = "SELECT * FROM phone_lists";
$result = mysqli_query($connect, $query);
$rowcount = mysqli_num_rows( $result );
?>



<?php $__env->startSection('title'); ?>
    You | Phone List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="section-user-dashboard">
            <!-- START SIDEBAR -->
            <section class="section-user-dashboard--sidebar">
                <div class="heading--sub py-3 ps-4 u-border-bottom">Filters</div>

                <!-- INPUT NAME -->
                <div class="input-name u-border-bottom py-4 px-4">
                    <div class="input-name--title pb-2">
                        <i class="bi bi-person-badge pe-2"></i>
                        Name
                    </div>
                    <form id="search" action="<?php echo e(route('peopleSearch')); ?>">
                        <input
                            type="text"
                            id='searchPeopleFromPhoneList'
                            name="name"
                            onkeypress="handle"
                            placeholder="Enter name..."
                        />
                    </form>


                </div>

                <!-- INPUT GENDER -->
                <div class="input-gender u-border-bottom py-4 px-4">
                    <div class="input-gender--title pb-2">
                        <i class="bi bi-gender-ambiguous pe-2"></i>
                        Gender
                    </div>
                    <form id="searchGender" action="<?php echo e(route('genderSearch')); ?>">
                        <input
                            type="text"
                            name="gender"
                            id="gender"
                            placeholder="Enter gender..."
                            onkeypress="handleGender"
                        />
                    </form>

                </div>

                <!-- INPUT RELATIONSHIP STATUS -->
                <div class="input-relationship u-border-bottom py-4 px-4">
                    <div class="input-relationship--title pb-2">
                        <i class="bi bi-heart-fill pe-2"></i>
                        Relationship Status
                    </div>
                    <form id="searchrelationship" action="<?php echo e(route('relationshipSearch')); ?>">
                        <input
                            type="text"
                            name="relationship"
                            id="relationship"
                            placeholder="Enter relationship status..."
                            onkeypress="handlerelationship"
                        />
                    </form>
                </div>

                <!-- INPUT CURRENT ADDRESS -->
                <div class="input-currentAdd u-border-bottom py-4 px-4">
                    <div class="input-currentAdd--title pb-2">
                        <i class="bi bi-pin-map-fill"></i>
                        Current Address
                    </div>
                    <form id="searchLocation" action="<?php echo e(route('locationSearch')); ?>">
                        <input
                            type="text"
                            name="location"
                            id="location"
                            placeholder="Enter current address..."
                            onkeypress="handlelocation"
                        />
                    </form>
                </div>

                <!-- INPUT HOMETOWN -->
                <div class="input-hometown u-border-bottom py-4 px-4">
                    <div class="input-hometown--title pb-2">
                        <i class="bi bi-house-door-fill"></i>
                        Hometown
                    </div>
                    <form id="searchHometown" action="<?php echo e(route('hometownSearch')); ?>">
                        <input
                            type="text"
                            name="hometown"
                            id="hometown"
                            placeholder="Enter hometown..."
                            onkeypress="handlehometown"
                        />
                    </form>
                </div>

                <!-- INPUT COUNTRY -->
                <div class="input-country py-4 px-4">
                    <div class="input-country--title pb-2">
                        <i class="bi bi-globe2 pe-2"></i>
                        Country
                    </div>
                    <form id="searchCountry" action="<?php echo e(route('countrySearch')); ?>">
                        <input
                            type="text"
                            name="country"
                            id="country"
                            placeholder="Enter country..."
                            onkeypress="handlecountry"
                        />
                    </form>
                </div>

                <!-- TODO Remove if unused -->
                <!-- INPUT JOB TITLE -->
                <!-- <div class="input-job u-border-bottom py-4 px-4">
                      <div class="input-job--title pb-4">
                        <i class="bi bi-briefcase pe-2"></i>
                        Job Title
                      </div>
                      <input type="text" name="job" id="job" placeholder="Search for a job title" />
                      <ul id="jobList" class="jobList hide">
                        <li>software engineer</li>
                        <li>project manager</li>
                        <li>teacher</li>
                        <li>owner</li>
                        <li>student</li>
                      </ul>
                    </div> -->
            </section>
            <!-- END SIDEBAR -->

            <!-- START MAIN DASHBOARD -->
            <section class="section-user-dashboard--main">
                <div class="container">
                    <div class="row">

                        <form action="<?php echo e(route('customExport')); ?>" enctype="multipart/form-data" method="get">
                             <?php echo csrf_field(); ?>
                            <div class="col-md-3 offset-7 d-flex justify-content-end mt-4">
                                <button type="submit" id="customCSV" class="btn btn-download border-3">
                                    <i class="bi bi-download"></i>
                                    &nbsp; Download Data CSV
                                </button>
                            </div>


                    </div>
                </div>
                <!-- START TABLE -->
                <div
                    class="section-table table-scrollable mx-5 mt-5 mb-2"
                    style="width: 75vw; overflow: auto; max-height: 85vh"
                >
                    <div class="container">
                        <div class="row">
                            <table
                                class="table table-hover table-bordered table-responsive list"
                                id="peopleTable"
                            >
                                <thead>
                                <tr>
                                    <th>
                                        <div class="col-md-5 d-flex align-items-end ps-5">
                                            
                                            <input id="checkAll" type="button" class="selectAll" value="Select All"/>
                                        </div>


                                    </th>

                                    <th>Name</th>
                                    <th>Facebook Profile</th>
                                    <th>Quick Actions</th>
                                    <th>Gender</th>
                                    <th>Relationship Status</th>
                                    <th>Work Place</th>
                                    <th>Last Education Year</th>
                                    <th>Current Address</th>
                                    <th>Home Town</th>
                                    <th>Country</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="table-row">
                                            <td>
                                                <input type="checkbox" name="chk[]" id="chk" class="form-check-input" value="<?php echo e($data->id); ?>" >
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('user', ['id' => $data->id ])); ?>" class="person-name">
                                                    <?php echo e($data->name); ?>

                                                </a>
                                            </td>
                                            <td>
                                                <a
                                                    href="https://www.facebook.com/<?php echo e($data->uid); ?>"
                                                >https://www.facebook.com/<?php echo e($data->uid); ?>

                                                </a>
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-access btn-access--phone"
                                                    href="<?php echo e(route('packages')); ?>"
                                                >
                                                    <i class="bi bi-phone"></i>
                                                    <i class="bi bi-caret-down-fill"></i>
                                                </a>
                                                <a
                                                    class="btn btn-access btn-access--email"
                                                    href="<?php echo e(route('packages')); ?>"
                                                >
                                                    <i class="bi bi-envelope"></i>
                                                    <i class="bi bi-caret-down-fill"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <?php if(!empty($data->gender)): ?>
                                                    <?php echo e($data->gender); ?>

                                                <?php else: ?>
                                                    -
                                                <?php endif; ?></td>
                                            <td>
                                                <?php if(!empty( $data->relationship_status )): ?>
                                                    <?php echo e($data->relationship_status); ?>

                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!empty( $data->work )): ?>
                                                    <?php echo e($data->work); ?>

                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!empty( $data->education_last_year )): ?>
                                                    <?php echo e($data->education_last_year); ?>

                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!empty( $data->location )): ?>
                                                    <?php echo e($data->location.', '.$data->country); ?>

                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!empty( $data->hometown )): ?>
                                                    <?php echo e($data->hometown); ?>

                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!empty( $data->country )): ?>
                                                    <?php echo e($data->country); ?>

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
                </form>
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
                                    <?php echo $allData->links(); ?>

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
                    url: "",
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



<?php $__env->stopSection(); ?>




<?php echo $__env->make('userDashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PhoneList\resources\views/userDashboard/people.blade.php ENDPATH**/ ?>
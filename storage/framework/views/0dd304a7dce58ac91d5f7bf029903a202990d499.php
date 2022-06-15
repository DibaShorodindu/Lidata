

<?php $__env->startSection('metaDescription'); ?>
  <?php echo e($data->person_name); ?>'s Contact Details with mobile number and address from Phone List
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
  <?php echo e($data->person_name); ?>'s Contact Details | Phone List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  <!-- START BREADCRUMB -->
  <hr class="mt-lg-0 mt-5 text-secondary" />
  <div class="container">
    <div class="row">
      <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('/')); ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e($data->organization_name); ?></li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- END BREADCRUMB -->
  <!-- START SEARCH BARS -->
  <section class="section-searchbar pt-md-5 pb-md-4 py-2 mt-md-0 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-6 ms-md-auto">
          <div class="row">
            <form action="<?php echo e(route('userSearch')); ?>">
              <?php echo csrf_field(); ?>
              <div class="col-12">
                <input  type="text" name="searchPeople" id="searchPeopleName"
                        class="searchBar bg-white border-5 text-dark fw-normal col-md-9 col-8"
                        placeholder="Search by Name..." onkeyup="searchPeople()" autocomplete="off"  />
                <button type="submit" class="btn btn-blue">Apply</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="row">
            <form action="<?php echo e(route('Company_Search')); ?>">
              <?php echo csrf_field(); ?>
              <div class="col-12">
                <input  type="text" name="searchCompany" id="searchCompany"
                        class="searchBar bg-white border-5 text-dark fw-normal col-md-9 col-8"
                        placeholder="Search by Company..." onkeyup="searchCompany()" autocomplete="off"  />
                <button type="submit" class="btn btn-blue">Apply</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SEARCH BARS -->


  <!-- START COMPANY SHORT DETAILS -->
  <section class="section-person-details user-div mt-4 px-0 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card u-box-shadow-1">
            <div class="card-body">
              <img
                      class="company-logo img-fluid"
                      src="<?php echo e(asset('/')); ?>adminAsset/assets/images/companyLogo--01.png"
                      alt="company logo"
              />
              <h1 class="card-title"><?php echo e($data->organization_name); ?></h1>
              <div class="company-social-links">
                <a href="<?php echo e($data->organization_website_url); ?>" class="border-end">
                  <i class="bi bi-globe fs-3 px-3"></i>
                </a>
                <a href="<?php echo e($data->organization_linkedin_numerical_urls); ?>" class="border-end">
                  <i class="bi bi-linkedin fs-3 px-3"></i>
                </a>
                <a
                        href="<?php echo e($data->organization_twitter_url); ?>"
                        class="border-end"
                >
                  <i class="bi bi-twitter fs-3 px-3"></i>
                </a>
                <a href="<?php echo e($data->organization_facebook_url); ?>">
                  <i class="bi bi-facebook fs-3 px-3"></i>
                </a>
              </div>
            </div>

            <div class="card-footer">
              <div class="nav">
                <ul class="d-flex flex-row">
                  <li class="nav-item active">
                    <a href="#companyDetails" class="nav-link">
                      Company Details
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END COMPANY SHORT DETAILS -->

  <div class="container">
    <div class="row">
      <div class="col-lg-8 my-5">
        <!-- START COMPANY Details -->
        <section
                class="section-company user-details-div"
                id="companyDetails"
        >
          <div class="card user-details-div__card u-box-shadow-1">
            <h3 class="card-title"><?php echo e($data->organization_name); ?> Details</h3>

            <div class="card-body p-0">
              <div class="company01-details__box">
                <div
                        class="company01-details--content mt-5 mb-2 text-start"
                >
                  <p class="text-secondary">
                    Our company, the Latest Mailing Database Digital
                    Marketing Services is the most trusted website upon the
                    internet businesses. We are the largest data source
                    provider that our lead generation experts collected and
                    researched the data to over 200 websites with
                    permission-based.
                  </p>
                </div>
              </div>
              <div class="company01-details__box row mt-5">
                <div
                        class="company01-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                >
                  <div class="circle-element">
                    <i class="bi bi-mouse2-fill"></i>
                  </div>
                </div>
                <div
                        class="company01-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                >
                  <div
                          class="company01-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                  >
                    <span>Website</span></br>
                    <a href="<?php echo e($data->organization_website_url); ?>">
                      <?php if(!empty( $data->organization_website_url)): ?>
                        <?php echo e($data->organization_website_url); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="company01-details__box row mt-5">
                <div
                        class="company01-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                >
                  <div class="circle-element">
                    <i class="bi bi-people-fill"></i>
                  </div>
                </div>
                <div
                        class="company01-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                >
                  <div
                          class="company01-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                  >
                    <span>Employees</span>
                    <p style="color: #5d6a7e">
                      <?php if(!empty( $data->organization_num_current_employees )): ?>
                        <?php echo e($data->organization_num_current_employees); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="company01-details__box row mt-5">
                <div
                        class="company01-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                >
                  <div class="circle-element">
                    <i class="bi bi-building"></i>
                  </div>
                </div>
                <div
                        class="company01-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                >
                  <div
                          class="company01-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                  >
                    <span>Industry</span>
                    <p style="color: #5d6a7e">
                      <?php if(!empty( $data->organization_industries)): ?>
                        <?php echo e($data->organization_industries); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="company01-details__box row mt-5">
                <div
                        class="company01-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                >
                  <div class="circle-element">
                    <i class="bi bi-pin-map-fill"></i>
                  </div>
                </div>
                <div
                        class="company01-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                >
                  <div
                          class="company01-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                  >
                    <span>City</span>
                    <p style="color: #5d6a7e">
                      <?php if(!empty( $data->organization_hq_location_city)): ?>
                        <?php echo e($data->organization_hq_location_city); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="company01-details__box row mt-5">
                <div
                        class="company01-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                >
                  <div class="circle-element">
                    <i class="bi bi-map-fill"></i>
                  </div>
                </div>
                <div
                        class="company01-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                >
                  <div
                          class="company01-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                  >
                    <span>State</span>
                    <p style="color: #5d6a7e">
                      <?php if(!empty( $data->organization_hq_location_state)): ?>
                        <?php echo e($data->organization_hq_location_state); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="company01-details__box row mt-5">
                <div
                        class="company01-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                >
                  <div class="circle-element">
                    <i class="bi bi-globe"></i>
                  </div>
                </div>
                <div
                        class="company01-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                >
                  <div
                          class="company01-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                  >
                    <span>Country</span>
                    <p style="color: #5d6a7e">
                      <?php if(!empty( $data->organization_hq_location_country)): ?>
                        <?php echo e($data->organization_hq_location_country); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END COMPANY Details -->

        <!-- START COMPANY Frequently Asked Questions -->
        <section class="section-faq user-details-div mt-5 mb-lg-4">
          <div class="card user-details-div__card u-box-shadow-1">
            <h3 class="card-title">
              Frequently Asked Questions about
              <?php if(!empty( $data->organization_name )): ?>
                <?php echo e($data->organization_name); ?>

              <?php else: ?>
                N/A
              <?php endif; ?>

            </h3>

            <div class="card-body">
              <div class="faq" id="faq">
                <!-- FAQ 01 -->
                <div class="faq-item my-4">
                  <h2 class="faq-header" id="headingOne">
                    <button
                            class="faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne"
                    >
                      <i class="bi bi-caret-down-square-fill"></i>
                      <span>
                            What is
                            Frequently Asked Questions about
                            <?php if(!empty( $data->organization_name )): ?>
                          <?php echo e($data->organization_name); ?>

                        <?php else: ?>
                          N/A
                        <?php endif; ?>
                            's website address?
                          </span>
                    </button>
                  </h2>
                  <div
                          id="collapseOne"
                          class="faq-collapse collapse"
                          aria-labelledby="headingOne"
                          data-bs-parent="#faq"
                  >
                    <div class="faq-body">
                      <?php if(!empty( $data->organization_name )): ?>
                        <?php echo e($data->organization_name); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                      's website is
                      <a href="<?php echo e($data->organization_website_url); ?>"
                      >
                        <?php if(!empty( $data->organization_website_url )): ?>
                          <?php echo e($data->organization_website_url); ?>

                        <?php else: ?>
                          N/A
                        <?php endif; ?>
                      </a
                      >
                    </div>
                  </div>
                </div>

                <!-- FAQ 02 -->
                <div class="faq-item my-4">
                  <h2 class="faq-header" id="headingTwo">
                    <button
                            class="faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"
                            aria-expanded="true"
                            aria-controls="collapseTwo"
                    >
                      <i class="bi bi-caret-down-square-fill"></i>

                      <span
                      >How many employees work at
                            <?php if(!empty( $data->organization_name )): ?>
                          <?php echo e($data->organization_name); ?>

                        <?php else: ?>
                          N/A
                        <?php endif; ?>
                            ?
                          </span>
                    </button>
                  </h2>
                  <div
                          id="collapseTwo"
                          class="faq-collapse collapse"
                          aria-labelledby="headingTwo"
                          data-bs-parent="#faq"
                  >
                    <div class="faq-body">
                      <?php if(!empty( $data->organization_name )): ?>
                        <?php echo e($data->organization_name); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                      consists of
                      <?php if(!empty( $data->organization_num_current_employees )): ?>
                        <?php echo e($data->organization_num_current_employees); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                      employees.
                    </div>
                  </div>
                </div>

                <!-- FAQ 03 -->
                <div class="faq-item my-4">
                  <h2 class="faq-header" id="headingThree">
                    <button
                            class="faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="true"
                            aria-controls="collapseThree"
                    >
                      <i class="bi bi-caret-down-square-fill"></i>
                      <span>
                            Where is
                            <?php if(!empty( $data->organization_name )): ?>
                          <?php echo e($data->organization_name); ?>

                        <?php else: ?>
                          N/A
                        <?php endif; ?>
                            located?
                          </span>
                    </button>
                  </h2>
                  <div
                          id="collapseThree"
                          class="faq-collapse collapse"
                          aria-labelledby="headingThree"
                          data-bs-parent="#faq"
                  >
                    <div class="faq-body">
                      <?php if(!empty( $data->organization_name )): ?>
                        <?php echo e($data->organization_name); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                      is located in
                      <?php if(!empty( $data->organization_hq_location_city )): ?>
                        <?php echo e($data->organization_hq_location_city); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                      ,
                      <?php if(!empty( $data->organization_hq_location_state )): ?>
                        <?php echo e($data->organization_hq_location_state); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                      ,
                      <?php if(!empty( $data->organization_hq_location_country)): ?>
                        <?php echo e($data->organization_hq_location_country); ?>

                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                      .
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END COMPANY Frequently Asked Questions -->
      </div>

      <div class="col-lg-4">
        <!-- START COMPANY Employee Details -->
        <section
                class="section-employees user-details-div ms-lg-4 mt-lg-5 mt-0 mb-lg-0 mb-5"
        >
          <div class="card user-details-div__card u-box-shadow-1">
            <h3 class="card-title mb-2">Employees</h3>

            <div class="card-body p-0">
              <?php $__currentLoopData = $userData->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userFetchData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="colleagues-details__box pt-5">
                  <a class="colleagues-details--name" href="<?php echo e(route('user-company', ['id' => $userFetchData->id])); ?>"

                  ><?php echo e($userFetchData->organization_name); ?></a
                  >
                  <p class="colleagues-details--job">
                    <?php if(!empty( $userFetchData->person_name )): ?>
                      <?php echo e($userFetchData->person_name); ?>

                    <?php else: ?>
                      N/A
                    <?php endif; ?>
                  </p>
                  <div class="colleagues-details--contact">
                    <a
                            class="colleagues-details--contact-phone"
                            href="pricing/packages.html"
                    >
                      <i class="bi bi-telephone-fill"></i>Phone
                    </a>
                    <a
                            class="colleagues-details--contact-email ms-5"
                            href="pricing/packages.html"
                    >
                      <i class="bi bi-envelope-fill"></i>Email
                    </a>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
          </div>
        </section>
        <!-- END COMPANY Employee Details -->
      </div>
    </div>
  </div>






  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
  </script>

  <script type="text/javascript">
    let route = "<?php echo e(url('/autocomplete-search')); ?>";
    $('#searchPeopleName').typeahead({
      source: function (query, process) {
        return $.get(route, {
          query: query
        }, function (data) {
          return process(data);
        });
      }
    });
  </script>
  <script type="text/javascript">
    let route_user_company = "<?php echo e(url('/autocomplete-company-search')); ?>";
    $('#searchCompany').typeahead({
      source: function (term, process) {
        return $.get(route_user_company, {
          term: term
        }, function (data) {
          return process(data);
        });
      }
    });
  </script>

<?php $__env->stopSection(); ?>


<script>
  function handleName(e){
    if(e.key === "Enter"){
      //alert("Enter was just pressed.");
    }

    return false;
  }
</script>







<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Lidata\resources\views/front/user/user-company.blade.php ENDPATH**/ ?>
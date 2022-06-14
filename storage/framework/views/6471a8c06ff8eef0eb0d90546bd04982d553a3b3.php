<?php $__env->startSection('main'); ?>
    <section class="section-main">
        <!-- START SECOND NAVBAR -->
        <section class="second-navbar">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="<?php echo e(route('contacts')); ?>" class="nav-link <?php echo e(request()->routeIs('contacts') ? 'active' : ''); ?>">Contact Import</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('accounts')); ?>" class="nav-link <?php echo e(request()->routeIs('accounts') ? 'active' : ''); ?>">Account Import</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('exports')); ?>" class="nav-link <?php echo e(request()->routeIs('exports') ? 'active' : ''); ?>">CSV Exports</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('csv-export-settings')); ?>" class="nav-link <?php echo e(request()->routeIs('csv-export-settings') ? 'active' : ''); ?>" class="nav-link">CSV Export Settings</a>
            </li>
          </ul>
        </section>
        <!-- END SECOND NAVBAR -->

       <!-- START CSV EXPORT SETTINGS -->
       <section
            class="section-csv-export-settings u-padding-lg d-flex flex-column align-items-center"
          >
            <h3 class="fw-bold text-dark">CSV Export Settings</h3>
            <div class="card border-0 u-box-shadow-1">
              <div class="card-body p-4">
                <h4 class="card-title border-0">
                  What is the CSV Export settings for?
                </h4>
                <p class="card-text text-secondary">
                  You can customize the default fields you want to download
                  every time you export a CSV file.
                </p>
                <div class="csv-export-box d-flex justify-content-between">
                  <div class="csv-export-icon-box d-flex align-items-center">
                    <i class="bi bi-people-fill px-3"></i>
                    <div class="csv-export-title">Contact CSV Export</div>
                  </div>

                  <!-- BUTTON TRIGGER MODAL -->
                  <button
                    type="button"
                    class="csv-export-button btn btn-access fw-bold"
                    data-bs-toggle="modal"
                    data-bs-target="#contactCSVExport"
                  >
                    <i class="bi bi-gear pe-1"></i>
                    Edit Settings
                  </button>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="contactCSVExport"
                    tabindex="-1"
                    aria-labelledby="contactCSVExportLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4
                            class="modal-title fw-bold text-dark"
                            id="contactCSVExportLabel"
                          >
                            Contact CSV Export
                          </h4>
                          <div>
                            <button
                              type="button"
                              class="btn btn-access text-dark"
                              data-bs-dismiss="modal"
                            >
                              Cancel
                            </button>
                            <button type="button" class="btn btn-blue">
                              Save settings
                            </button>
                          </div>
                        </div>
                        <div class="modal-body">
                          <div
                            class="modal-body--header border-bottom py-3 d-flex align-items-center justify-content-between"
                          >
                            <h4 class="text-dark fw-bold">Standard Fields</h4>
                            <a href="#" class="fs-4">Select All</a>
                          </div>
                          <div class="modal-body--content py-4">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>First Name</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="fname"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="fname"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Last Name</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="lname"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="lname"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Title</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="title"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="title"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="company"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="company"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Email</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="email"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="email"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Phone Number</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="number"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="number"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>City</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="city"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="city"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>State</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="state"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="state"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Country</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="countryID"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="countryID"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Employees</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="employees"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="employees"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Industry</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="industry"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="industry"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company City</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyCity"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyCity"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company State</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyState"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyState"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company Country</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyCountry"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyCountry"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="csv-export-box d-flex justify-content-between mt-4">
                  <div class="csv-export-icon-box d-flex align-items-center">
                    <i class="bi bi-building px-3"></i>
                    <div class="csv-export-title">Account CSV Export</div>
                  </div>

                  <!-- BUTTON TRIGGER MODAL -->
                  <button
                    type="button"
                    class="csv-export-button btn btn-access fw-bold"
                    data-bs-toggle="modal"
                    data-bs-target="#accountCSVExport"
                  >
                    <i class="bi bi-gear pe-1"></i>
                    Edit Settings
                  </button>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="accountCSVExport"
                    tabindex="-1"
                    aria-labelledby="accountCSVExportLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4
                            class="modal-title fw-bold text-dark"
                            id="accountCSVExportLabel"
                          >
                            Account CSV Export
                          </h4>
                          <div>
                            <button
                              type="button"
                              class="btn btn-access text-dark"
                              data-bs-dismiss="modal"
                            >
                              Cancel
                            </button>
                            <button type="button" class="btn btn-blue">
                              Save settings
                            </button>
                          </div>
                        </div>
                        <div class="modal-body">
                          <div
                            class="modal-body--header border-bottom py-3 d-flex align-items-center justify-content-between"
                          >
                            <h4 class="text-dark fw-bold">Standard Fields</h4>
                            <a href="#" class="fs-4">Select All</a>
                          </div>
                          <div class="modal-body--content py-4">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="company"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="company"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company Email</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyEmail"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyEmail"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company Phone Number</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyNumber"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyNumber"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Employees</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="employees"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="employees"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Industry</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="industry"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="industry"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company City</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyCity"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyCity"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company State</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyState"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyState"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 p-2">
                                  <div class="field-name-box">
                                    <h5>Company Country</h5>
                                    <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="companyCountry"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="companyCountry"
                                      >
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- END CSV EXPORT SETTINGS -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userDashboard.settings.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lidata_list\resources\views/userDashboard/settings/imports&exports/csv-export-settings.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="List of contacts in Li Data's database for names starting with 'A'"/>
  <meta name="keywords" content="li data," />



    <title><?php echo $__env->yieldContent('title'); ?></title>

<?php echo $__env->make('directory.includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body id="home">
<header>
    <?php echo $__env->make('directory.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>

<!-- START NAVBAR FOR SMALL SCREEN -->
<?php echo $__env->make('front.includes.smallScreen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END NAVBAR FOR SMALL SCREEN -->
<main>

   <?php echo $__env->yieldContent('main'); ?>

 <!-- START SEARCH BARS -->
 <section class="section-searchbar pt-md-5 pb-md-4 py-2 mt-md-0 mt-5">
        <div class="container">
          <div class="row">
            <div class="offset-6 col-lg-3 col-md-4 col-6 ms-md-auto">
              <div class="row">
              <form action="<?php echo e(route('userSearch')); ?>">
                <?php echo csrf_field(); ?>
                <div class="col-12">
                  <input
                    type="text"
                    name="searchPeople" id="searchPeople" 
                    class="searchBar bg-white border-5 text-dark fw-normal col-md-8 col-7"
                    placeholder="Search by Name..." onkeyup="searchPeople()" autocomplete="off" 
                  />
                  <button
                    type="button"
                    class="btn btn-blue ms-1 col-md-3 col-4"
                  >
                    Search
                  </button>
                </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="row">
              <form action="<?php echo e(route('companySearch')); ?>">
                <?php echo csrf_field(); ?>
                <div class="col-12">
                  <input
                    type="text"
                    name="searchCompany" id="searchCompany" 
                    class="searchBar bg-white border-5 text-dark fw-normal col-md-8 col-7"
                    placeholder="Search by Company..." onkeyup="searchCompany()" autocomplete="off" 
                  />
                  <button
                    type="button"
                    class="btn btn-blue ms-1 col-md-3 col-4"
                  >
                    Search
                  </button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SEARCH BARS -->

      <!-- START SECTION PEOPLE CARDS -->
      <section class="section-people-cards py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div
                class="card u-box-shadow-1 border-0 u-border-radius h-100 bg-light"
              >
                <div class="card-body p-5">
                  <h4 class="card-title">
                    <div class="d-flex align-items-center pb-3 mb-4">
                      <div class="circle-element circle-element--company">
                        <i class="bi bi-briefcase-fill"></i>
                      </div>
                      <span class="sub-heading">Company Search</span>
                    </div>
                  </h4>
                  <div>
                    <a href="<?php echo e(route('category-company', ['id' => 'A'])); ?>" class="dark-link <?php if($dataId == 'A'): ?> active  <?php endif; ?>" >A</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'B'])); ?>" class="dark-link <?php if($dataId == 'B'): ?> active  <?php endif; ?>">B</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'C'])); ?>" class="dark-link <?php if($dataId == 'C'): ?> active  <?php endif; ?>">C</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'D'])); ?>" class="dark-link <?php if($dataId == 'D'): ?> active  <?php endif; ?>">D</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'E'])); ?>" class="dark-link <?php if($dataId == 'E'): ?> active  <?php endif; ?>">E</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'F'])); ?>" class="dark-link <?php if($dataId == 'F'): ?> active  <?php endif; ?>">F</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'G'])); ?>" class="dark-link <?php if($dataId == 'G'): ?> active  <?php endif; ?>">G</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'H'])); ?>" class="dark-link <?php if($dataId == 'H'): ?> active  <?php endif; ?>">H</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'I'])); ?>" class="dark-link <?php if($dataId == 'I'): ?> active  <?php endif; ?>">I</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'J'])); ?>" class="dark-link <?php if($dataId == 'J'): ?> active  <?php endif; ?>">J</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'K'])); ?>" class="dark-link <?php if($dataId == 'K'): ?> active  <?php endif; ?>">K</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'L'])); ?>" class="dark-link <?php if($dataId == 'L'): ?> active  <?php endif; ?>">L</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'M'])); ?>" class="dark-link <?php if($dataId == 'M'): ?> active  <?php endif; ?>">M</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'N'])); ?>" class="dark-link <?php if($dataId == 'N'): ?> active  <?php endif; ?>">N</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'O'])); ?>" class="dark-link <?php if($dataId == 'O'): ?> active  <?php endif; ?>">O</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'P'])); ?>" class="dark-link <?php if($dataId == 'P'): ?> active  <?php endif; ?>">P</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'Q'])); ?>" class="dark-link <?php if($dataId == 'Q'): ?> active  <?php endif; ?>">Q</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'R'])); ?>" class="dark-link <?php if($dataId == 'R'): ?> active  <?php endif; ?>">R</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'S'])); ?>" class="dark-link <?php if($dataId == 'S'): ?> active  <?php endif; ?>">S</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'T'])); ?>" class="dark-link <?php if($dataId == 'T'): ?> active  <?php endif; ?>">T</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'U'])); ?>" class="dark-link <?php if($dataId == 'U'): ?> active  <?php endif; ?>">U</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'V'])); ?>" class="dark-link <?php if($dataId == 'V'): ?> active  <?php endif; ?>">V</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'W'])); ?>" class="dark-link <?php if($dataId == 'W'): ?> active  <?php endif; ?>">W</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'X'])); ?>" class="dark-link <?php if($dataId == 'X'): ?> active  <?php endif; ?>">X</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'Y'])); ?>" class="dark-link <?php if($dataId == 'Y'): ?> active  <?php endif; ?>">Y</a>
                    <a href="<?php echo e(route('category-company', ['id' => 'Z'])); ?>" class="dark-link <?php if($dataId == 'Z'): ?> active  <?php endif; ?>">Z</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <div class="card bg-transparent u-border-radius h-100">
                <div class="card-body d-flex align-items-center px-5 mx-5">
                  <div class="col-md-4 px-4 mx-3">
                    <img
                      src="../../assets/images/data.svg"
                      class="img-fluid"
                      alt="illustration"
                    />
                  </div>
                  <div class="col-md-8">
                    <h1 class="heading--sub mb-4">
                      Reach your target contacts faster with Li Data
                    </h1>
                    <a
                      href="../../signup.html"
                      type="button"
                      class="btn btn-grad px-4"
                    >
                      Sign Up For Free
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SECTION PEOPLE CARDS -->

      <!-- START SECTION MESSAGE -->
      <section class="section-message py-5 mb-4">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="card border-0">
                <div class="card-body p-5 mt-5">
                  <span class="card-text no-data d-none">
                    No Company pages found for:
                    <span class="text-secondary">A</span>
                  </span>
                  <h2 class="card-text text-dark fw-bold fst-normal fs-3">
                    Company Directory:
                    <span class="text-dark fw-bold fst-normal">A</span>
                  </h2>
                  <p class="card-text">
                  <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('user-company', ['id' => $allData->id])); ?>" class="user-link"
                      ><?php echo e($allData->organization_name); ?></a
                    >
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h2 class="card-text no-data">
                        No Person pages found for:
                        <span class="text-secondary"><?php echo e($dataId); ?></span>
                    </h2>
                    <?php endif; ?>
                  </p>
                  <div  class="row py-5">
                 
                <div class="d-flex justify-content-end">
                <?php echo $data->links(); ?>

                </div>
            </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SECTION MESSAGE -->

      <!-- START CATAGORIES -->
      <section class="section-categories bg-light u-padding-lg">
        <div class="container">
          <div class="row mb-3">
            <div class="col-md-12 border-bottom">
              <h5 class="sub-heading">Browse Lidata's Directories</h5>
            </div>
          </div>
          <div class="row py-5 px-3">
            <div class="col-md-6 pe-4">
              <div class="d-flex align-items-center border-bottom pb-3 mb-4">
                <div class="circle-element circle-element--person">
                  <i class="bi bi-people-fill"></i>
                </div>
                <span class="sub-heading">Person Search</span>
              </div>
              <div>
                <a href="<?php echo e(route('category', ['id' => 'A'])); ?>" class="blue-link">A</a>
                <a href="<?php echo e(route('category', ['id' => 'B'])); ?>" class="blue-link">B</a>
                <a href="<?php echo e(route('category', ['id' => 'C'])); ?>" class="blue-link">C</a>
                <a href="<?php echo e(route('category', ['id' => 'D'])); ?>" class="blue-link">D</a>
                <a href="<?php echo e(route('category', ['id' => 'E'])); ?>" class="blue-link">E</a>
                <a href="<?php echo e(route('category', ['id' => 'F'])); ?>" class="blue-link">F</a>
                <a href="<?php echo e(route('category', ['id' => 'G'])); ?>" class="blue-link">G</a>
                <a href="<?php echo e(route('category', ['id' => 'H'])); ?>" class="blue-link">H</a>
                <a href="<?php echo e(route('category', ['id' => 'I'])); ?>" class="blue-link">I</a>
                <a href="<?php echo e(route('category', ['id' => 'J'])); ?>" class="blue-link">J</a>
                <a href="<?php echo e(route('category', ['id' => 'K'])); ?>" class="blue-link">K</a>
                <a href="<?php echo e(route('category', ['id' => 'L'])); ?>" class="blue-link">L</a>
                <a href="<?php echo e(route('category', ['id' => 'M'])); ?>" class="blue-link">M</a>
                <a href="<?php echo e(route('category', ['id' => 'N'])); ?>" class="blue-link">N</a>
                <a href="<?php echo e(route('category', ['id' => 'O'])); ?>" class="blue-link">O</a>
                <a href="<?php echo e(route('category', ['id' => 'P'])); ?>" class="blue-link">P</a>
                <a href="<?php echo e(route('category', ['id' => 'Q'])); ?>" class="blue-link">Q</a>
                <a href="<?php echo e(route('category', ['id' => 'R'])); ?>" class="blue-link">R</a>
                <a href="<?php echo e(route('category', ['id' => 'S'])); ?>" class="blue-link">S</a>
                <a href="<?php echo e(route('category', ['id' => 'T'])); ?>" class="blue-link">T</a>
                <a href="<?php echo e(route('category', ['id' => 'U'])); ?>" class="blue-link">U</a>
                <a href="<?php echo e(route('category', ['id' => 'V'])); ?>" class="blue-link">V</a>
                <a href="<?php echo e(route('category', ['id' => 'W'])); ?>" class="blue-link">W</a>
                <a href="<?php echo e(route('category', ['id' => 'X'])); ?>" class="blue-link">X</a>
                <a href="<?php echo e(route('category', ['id' => 'Y'])); ?>" class="blue-link">Y</a>
                <a href="<?php echo e(route('category', ['id' => 'Z'])); ?>" class="blue-link">Z</a>
              </div>
            </div>
            <div class="col-md-6 ps-4">
              <div class="d-flex align-items-center border-bottom pb-3 mb-4">
                <div class="circle-element circle-element--company">
                  <i class="bi bi-briefcase-fill"></i>
                </div>
                <span class="sub-heading">Company Search</span>
              </div>
              <div>
                <a href="<?php echo e(route('category-company', ['id' => 'A'])); ?>" class="blue-link <?php if($dataId == 'A'): ?> active  <?php endif; ?>">A</a>
                <a href="<?php echo e(route('category-company', ['id' => 'B'])); ?>" class="blue-link <?php if($dataId == 'B'): ?> active  <?php endif; ?>">B</a>
                <a href="<?php echo e(route('category-company', ['id' => 'C'])); ?>" class="blue-link <?php if($dataId == 'C'): ?> active  <?php endif; ?>">C</a>
                <a href="<?php echo e(route('category-company', ['id' => 'D'])); ?>" class="blue-link <?php if($dataId == 'D'): ?> active  <?php endif; ?>">D</a>
                <a href="<?php echo e(route('category-company', ['id' => 'E'])); ?>" class="blue-link <?php if($dataId == 'E'): ?> active  <?php endif; ?>">E</a>
                <a href="<?php echo e(route('category-company', ['id' => 'F'])); ?>" class="blue-link <?php if($dataId == 'F'): ?> active  <?php endif; ?>">F</a>
                <a href="<?php echo e(route('category-company', ['id' => 'G'])); ?>" class="blue-link <?php if($dataId == 'G'): ?> active  <?php endif; ?>">G</a>
                <a href="<?php echo e(route('category-company', ['id' => 'H'])); ?>" class="blue-link <?php if($dataId == 'H'): ?> active  <?php endif; ?>">H</a>
                <a href="<?php echo e(route('category-company', ['id' => 'I'])); ?>" class="blue-link <?php if($dataId == 'I'): ?> active  <?php endif; ?>">I</a>
                <a href="<?php echo e(route('category-company', ['id' => 'J'])); ?>" class="blue-link <?php if($dataId == 'J'): ?> active  <?php endif; ?>">J</a>
                <a href="<?php echo e(route('category-company', ['id' => 'K'])); ?>" class="blue-link <?php if($dataId == 'K'): ?> active  <?php endif; ?>">K</a>
                <a href="<?php echo e(route('category-company', ['id' => 'L'])); ?>" class="blue-link <?php if($dataId == 'L'): ?> active  <?php endif; ?>">L</a>
                <a href="<?php echo e(route('category-company', ['id' => 'M'])); ?>" class="blue-link <?php if($dataId == 'M'): ?> active  <?php endif; ?>">M</a>
                <a href="<?php echo e(route('category-company', ['id' => 'N'])); ?>" class="blue-link <?php if($dataId == 'N'): ?> active  <?php endif; ?>">N</a>
                <a href="<?php echo e(route('category-company', ['id' => 'O'])); ?>" class="blue-link <?php if($dataId == 'O'): ?> active  <?php endif; ?>">O</a>
                <a href="<?php echo e(route('category-company', ['id' => 'P'])); ?>" class="blue-link <?php if($dataId == 'P'): ?> active  <?php endif; ?>">P</a>
                <a href="<?php echo e(route('category-company', ['id' => 'Q'])); ?>" class="blue-link <?php if($dataId == 'Q'): ?> active  <?php endif; ?>">Q</a>
                <a href="<?php echo e(route('category-company', ['id' => 'R'])); ?>" class="blue-link <?php if($dataId == 'R'): ?> active  <?php endif; ?>">R</a>
                <a href="<?php echo e(route('category-company', ['id' => 'S'])); ?>" class="blue-link <?php if($dataId == 'S'): ?> active  <?php endif; ?>">S</a>
                <a href="<?php echo e(route('category-company', ['id' => 'T'])); ?>" class="blue-link <?php if($dataId == 'T'): ?> active  <?php endif; ?>">T</a>
                <a href="<?php echo e(route('category-company', ['id' => 'U'])); ?>" class="blue-link <?php if($dataId == 'U'): ?> active  <?php endif; ?>">U</a>
                <a href="<?php echo e(route('category-company', ['id' => 'V'])); ?>" class="blue-link <?php if($dataId == 'V'): ?> active  <?php endif; ?>">V</a>
                <a href="<?php echo e(route('category-company', ['id' => 'W'])); ?>" class="blue-link <?php if($dataId == 'W'): ?> active  <?php endif; ?>">W</a>
                <a href="<?php echo e(route('category-company', ['id' => 'X'])); ?>" class="blue-link <?php if($dataId == 'X'): ?> active  <?php endif; ?>">X</a>
                <a href="<?php echo e(route('category-company', ['id' => 'Y'])); ?>" class="blue-link <?php if($dataId == 'Y'): ?> active  <?php endif; ?>">Y</a>
                <a href="<?php echo e(route('category-company', ['id' => 'Z'])); ?>" class="blue-link <?php if($dataId == 'Z'): ?> active  <?php endif; ?>">Z</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END CATAGORIES -->
</main>

<!-- START FOOTER -->
<?php echo $__env->make('directory.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END FOOTER -->

<?php echo $__env->make('directory.includes.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- TYPEWRITER JS -->
<script>
    let bannerText = document.getElementById('bannerText');

    let typewriter = new Typewriter(bannerText, {
        loop: false,
        delay: 50,
        cursor: ' ',
    });

    typewriter
        .typeString('Crush your sales numbers every quarter')
        .pauseFor(1500)
        // .deleteAll()
        .start();
</script>

<!-- ANIMATION JS -->
<script>
    AOS.init({
        once: true,
    });
</script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\lidata_list\resources\views/directory/master.blade.php ENDPATH**/ ?>
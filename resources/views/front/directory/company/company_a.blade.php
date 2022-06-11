<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta
      name="description"
      content="List of contacts in Li Data's database for names starting with 'A'"
    />
    <meta name="keywords" content="li data," />

    <title>Person Search: A | Li Data</title>

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

    <!-- Font awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

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
    <link rel="stylesheet" href="../assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico" />
  </head>

  <body>
    <header>
      <!-- START NAVBAR -->
      <div class="container">
        <div class="row" id="home-navbar">
          <div class="navbar__logo">
            <a class="navbar-brand d-lg-flex" href="/">
              <img
                class="img-fluid"
                src="../assets/images/logo--company-name-dark.svg"
                alt="li data"
              />
            </a>
          </div>

          <nav class="navbar navbar--center d-lg-flex d-none">
            <ul class="navbar__ul">
              <li class="navbar__li">
                <a href="{{route('product')}}" class="navbar__a"> Product </a>
              </li>
              <li class="navbar__li">
                <a href="{{route('pricing-us')}}" class="navbar__a">
                  Pricing
                </a>
              </li>
              <li class="navbar__li">
                <a href="https://blog.phonelist.io" class="navbar__a"> Blog </a>
              </li>
              <li class="navbar__li">
                <a href="{{route('career')}}" class="navbar__a"> Careers </a>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar--right d-lg-flex d-none">
            <ul class="navbar__ul align-items-center">
              <li class="navbar__li d-flex align-items-center me-5">
                <!-- START TRANSLATOR -->
                <a
                  href="#"
                  onclick="doGTranslate('en|en');return false;"
                  title="English"
                  class="gflag nturl"
                  style="background-position: -0px -0px"
                  ><img
                    src="//gtranslate.net/flags/blank.png"
                    height="16"
                    width="16"
                    alt="English"
                /></a>

                <br />
                <select onchange="doGTranslate(this);">
                  <option value="">Select Language</option>
                  <option value="en|zh-CN">Chinese (Simplified)</option>
                  <option value="en|zh-TW">Chinese (Traditional)</option>
                  <option value="en|en">English</option>
                  <option value="en|fr">French</option>
                  <option value="en|hi">Hindi</option>
                  <option value="en|ja">Japanese</option>
                  <option value="en|ko">Korean</option>
                  <option value="en|pt">Portuguese</option>
                  <option value="en|es">Spanish</option>
                </select>
                <div id="google_translate_element2"></div>
                <!-- END TRANSLATOR -->
              </li>
              @guest
                    <li class="navbar__li">
                        <a href="{{ route('/phonelistUserLogin') }}" class="navbar__a"> Account </a>
                    </li>
                @else
                    <li class="navbar__li">
                        <a href="{{ route('loggedInUser') }}" class="navbar__a"> Account </a>
                    </li>
                @endguest
            </ul>
          </nav>
        </div>
      </div>
      <!-- END NAVBAR -->

      <!-- START BREADCRUMB -->
      <hr class="mt-lg-0 mt-5 text-secondary" />
      <div class="container">
        <div class="row">
          <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Company
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- END BREADCRUMB -->
    </header>

    <!-- START NAVBAR FOR SMALL SCREEN -->
    <div class="d-lg-none d-flex">
      <div class="navbar__logo ms-md-5 ms-2 ps-5">
        <a class="navbar-brand d-flex" href="/">
          <img
            src="../assets/images/logo--company-name-dark.svg"
            alt="li data"
          />
        </a>
      </div>
      <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

        <label for="navi-toggle" class="navigation__button">
          <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
          <ul class="navigation__list">
            <li class="navigation__item">
              <a href="../product.html" class="navigation__link">Product</a>
            </li>
            <li class="navigation__item">
              <a href="{{route('pricing-us')}}" class="navigation__link">
                Pricing
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">Blog</a>
            </li>
            <li class="navigation__item">
              <a href="../careers.html" class="navigation__link">Careers</a>
            </li>
            <li class="navigation__item d-flex justify-content-center">
              <!-- START TRANSLATOR -->
              <a
                href="#"
                onclick="doGTranslate('en|en');return false;"
                title="English"
                class="gflag nturl"
                style="background-position: -0px -0px"
                ><img
                  src="//gtranslate.net/flags/blank.png"
                  height="16"
                  width="16"
                  alt="English"
              /></a>

              <br />
              <select onchange="doGTranslate(this);">
                <option value="">Select Language</option>
                <option value="en|zh-CN">Chinese (Simplified)</option>
                <option value="en|zh-TW">Chinese (Traditional)</option>
                <option value="en|en">English</option>
                <option value="en|fr">French</option>
                <option value="en|hi">Hindi</option>
                <option value="en|ja">Japanese</option>
                <option value="en|ko">Korean</option>
                <option value="en|pt">Portuguese</option>
                <option value="en|es">Spanish</option>
              </select>
              <div id="google_translate_element2"></div>
              <!-- END TRANSLATOR -->
            </li>
            <!-- <li class="navigation__item">
              <a href="../login.html" class="navigation__link">Login</a>
            </li> -->

            @guest
                    <li class="navigation__item">
                        <a href="{{ route('/phonelistUserLogin') }}" class="navigation__link"> Account </a>
                    </li>
                @else
                    <li class="navigation__item">
                        <a href="{{ route('loggedInUser') }}" class="navigation__link"> Account </a>
                    </li>
                @endguest
          </ul>
        </nav>
      </div>
    </div>
    <!-- END NAVBAR FOR SMALL SCREEN -->

    <main>
      <!-- START SEARCH BARS -->
      <section class="section-searchbar pt-md-5 pb-md-4 py-2 mt-md-0 mt-5">
        <div class="container">
          <div class="row">
            <div class="offset-6 col-lg-3 col-md-4 col-6 ms-md-auto">
              <div class="row">
              <form action="{{ route('userSearch') }}" id="searchPeople">
                @csrf
                <div class="col-12">
                  <input
                    type="text"
                    name="searchPeople" id="searchPeople" 
                    class="searchBar bg-white border-5 text-dark fw-normal col-md-11 col-11"
                    placeholder="Search by Name..." onkeyup="searchPeople()" autocomplete="off" 
                  />
                </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="row">
              <form action="{{ route('Company_Search') }}" id="searchCompany" >
                @csrf
                <div class="col-12">
                  <input
                    type="text"
                    name="searchCompany" id="searchCompany" 
                    class="searchBar bg-white border-5 text-dark fw-normal col-md-11 col-11"
                    placeholder="Search by Company..." onkeyup="searchCompany()" autocomplete="off" 
                  />
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
                    <a href="{{ route('category-company', ['id' => 'A'])  }}" class="dark-link @if ($dataId == 'A') active  @endif" >A</a>
                    <a href="{{ route('category-company', ['id' => 'B'])  }}" class="dark-link @if ($dataId == 'B') active  @endif">B</a>
                    <a href="{{ route('category-company', ['id' => 'C'])  }}" class="dark-link @if ($dataId == 'C') active  @endif">C</a>
                    <a href="{{ route('category-company', ['id' => 'D'])  }}" class="dark-link @if ($dataId == 'D') active  @endif">D</a>
                    <a href="{{ route('category-company', ['id' => 'E'])  }}" class="dark-link @if ($dataId == 'E') active  @endif">E</a>
                    <a href="{{ route('category-company', ['id' => 'F'])  }}" class="dark-link @if ($dataId == 'F') active  @endif">F</a>
                    <a href="{{ route('category-company', ['id' => 'G'])  }}" class="dark-link @if ($dataId == 'G') active  @endif">G</a>
                    <a href="{{ route('category-company', ['id' => 'H'])  }}" class="dark-link @if ($dataId == 'H') active  @endif">H</a>
                    <a href="{{ route('category-company', ['id' => 'I'])  }}" class="dark-link @if ($dataId == 'I') active  @endif">I</a>
                    <a href="{{ route('category-company', ['id' => 'J'])  }}" class="dark-link @if ($dataId == 'J') active  @endif">J</a>
                    <a href="{{ route('category-company', ['id' => 'K'])  }}" class="dark-link @if ($dataId == 'K') active  @endif">K</a>
                    <a href="{{ route('category-company', ['id' => 'L'])  }}" class="dark-link @if ($dataId == 'L') active  @endif">L</a>
                    <a href="{{ route('category-company', ['id' => 'M'])  }}" class="dark-link @if ($dataId == 'M') active  @endif">M</a>
                    <a href="{{ route('category-company', ['id' => 'N'])  }}" class="dark-link @if ($dataId == 'N') active  @endif">N</a>
                    <a href="{{ route('category-company', ['id' => 'O'])  }}" class="dark-link @if ($dataId == 'O') active  @endif">O</a>
                    <a href="{{ route('category-company', ['id' => 'P'])  }}" class="dark-link @if ($dataId == 'P') active  @endif">P</a>
                    <a href="{{ route('category-company', ['id' => 'Q'])  }}" class="dark-link @if ($dataId == 'Q') active  @endif">Q</a>
                    <a href="{{ route('category-company', ['id' => 'R'])  }}" class="dark-link @if ($dataId == 'R') active  @endif">R</a>
                    <a href="{{ route('category-company', ['id' => 'S'])  }}" class="dark-link @if ($dataId == 'S') active  @endif">S</a>
                    <a href="{{ route('category-company', ['id' => 'T'])  }}" class="dark-link @if ($dataId == 'T') active  @endif">T</a>
                    <a href="{{ route('category-company', ['id' => 'U'])  }}" class="dark-link @if ($dataId == 'U') active  @endif">U</a>
                    <a href="{{ route('category-company', ['id' => 'V'])  }}" class="dark-link @if ($dataId == 'V') active  @endif">V</a>
                    <a href="{{ route('category-company', ['id' => 'W'])  }}" class="dark-link @if ($dataId == 'W') active  @endif">W</a>
                    <a href="{{ route('category-company', ['id' => 'X'])  }}" class="dark-link @if ($dataId == 'X') active  @endif">X</a>
                    <a href="{{ route('category-company', ['id' => 'Y'])  }}" class="dark-link @if ($dataId == 'Y') active  @endif">Y</a>
                    <a href="{{ route('category-company', ['id' => 'Z'])  }}" class="dark-link @if ($dataId == 'Z') active  @endif">Z</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <div class="card bg-transparent u-border-radius h-100">
                <div class="card-body d-flex align-items-center px-5 mx-5">
                  <div class="col-md-4 px-4 mx-3">
                    <img
                      src="../assets/images/data.svg"
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
                    <span class="text-dark fw-bold fst-normal">{{ $dataId }}</span>
                  </h2>
                  <p class="card-text">
                  @forelse ($data as $allData)
                    <a href="{{ route('user-company', ['id' => $allData->id]) }}" class="user-link"
                      >{{$allData->organization_name }}</a
                    >
                    @empty
                    <h2 class="card-text no-data">
                        No Person pages found for:
                        <span class="text-secondary">{{ $dataId }}</span>
                    </h2>
                    @endforelse
                  </p>
                  <div  class="row py-5">
                 {{-- Pagination --}}
                <div class="d-flex justify-content-end">
                {!! $data->links() !!}
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
                <a href="{{ route('category', ['id' => 'A'])  }}" class="blue-link">A</a>
                <a href="{{ route('category', ['id' => 'B'])  }}" class="blue-link">B</a>
                <a href="{{ route('category', ['id' => 'C'])  }}" class="blue-link">C</a>
                <a href="{{ route('category', ['id' => 'D'])  }}" class="blue-link">D</a>
                <a href="{{ route('category', ['id' => 'E'])  }}" class="blue-link">E</a>
                <a href="{{ route('category', ['id' => 'F'])  }}" class="blue-link">F</a>
                <a href="{{ route('category', ['id' => 'G'])  }}" class="blue-link">G</a>
                <a href="{{ route('category', ['id' => 'H'])  }}" class="blue-link">H</a>
                <a href="{{ route('category', ['id' => 'I'])  }}" class="blue-link">I</a>
                <a href="{{ route('category', ['id' => 'J'])  }}" class="blue-link">J</a>
                <a href="{{ route('category', ['id' => 'K'])  }}" class="blue-link">K</a>
                <a href="{{ route('category', ['id' => 'L'])  }}" class="blue-link">L</a>
                <a href="{{ route('category', ['id' => 'M'])  }}" class="blue-link">M</a>
                <a href="{{ route('category', ['id' => 'N'])  }}" class="blue-link">N</a>
                <a href="{{ route('category', ['id' => 'O'])  }}" class="blue-link">O</a>
                <a href="{{ route('category', ['id' => 'P'])  }}" class="blue-link">P</a>
                <a href="{{ route('category', ['id' => 'Q'])  }}" class="blue-link">Q</a>
                <a href="{{ route('category', ['id' => 'R'])  }}" class="blue-link">R</a>
                <a href="{{ route('category', ['id' => 'S'])  }}" class="blue-link">S</a>
                <a href="{{ route('category', ['id' => 'T'])  }}" class="blue-link">T</a>
                <a href="{{ route('category', ['id' => 'U'])  }}" class="blue-link">U</a>
                <a href="{{ route('category', ['id' => 'V'])  }}" class="blue-link">V</a>
                <a href="{{ route('category', ['id' => 'W'])  }}" class="blue-link">W</a>
                <a href="{{ route('category', ['id' => 'X'])  }}" class="blue-link">X</a>
                <a href="{{ route('category', ['id' => 'Y'])  }}" class="blue-link">Y</a>
                <a href="{{ route('category', ['id' => 'Z'])  }}" class="blue-link">Z</a>
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
                <a href="{{ route('category-company', ['id' => 'A'])  }}" class="blue-link @if ($dataId == 'A') active  @endif">A</a>
                <a href="{{ route('category-company', ['id' => 'B'])  }}" class="blue-link @if ($dataId == 'B') active  @endif">B</a>
                <a href="{{ route('category-company', ['id' => 'C'])  }}" class="blue-link @if ($dataId == 'C') active  @endif">C</a>
                <a href="{{ route('category-company', ['id' => 'D'])  }}" class="blue-link @if ($dataId == 'D') active  @endif">D</a>
                <a href="{{ route('category-company', ['id' => 'E'])  }}" class="blue-link @if ($dataId == 'E') active  @endif">E</a>
                <a href="{{ route('category-company', ['id' => 'F'])  }}" class="blue-link @if ($dataId == 'F') active  @endif">F</a>
                <a href="{{ route('category-company', ['id' => 'G'])  }}" class="blue-link @if ($dataId == 'G') active  @endif">G</a>
                <a href="{{ route('category-company', ['id' => 'H'])  }}" class="blue-link @if ($dataId == 'H') active  @endif">H</a>
                <a href="{{ route('category-company', ['id' => 'I'])  }}" class="blue-link @if ($dataId == 'I') active  @endif">I</a>
                <a href="{{ route('category-company', ['id' => 'J'])  }}" class="blue-link @if ($dataId == 'J') active  @endif">J</a>
                <a href="{{ route('category-company', ['id' => 'K'])  }}" class="blue-link @if ($dataId == 'K') active  @endif">K</a>
                <a href="{{ route('category-company', ['id' => 'L'])  }}" class="blue-link @if ($dataId == 'L') active  @endif">L</a>
                <a href="{{ route('category-company', ['id' => 'M'])  }}" class="blue-link @if ($dataId == 'M') active  @endif">M</a>
                <a href="{{ route('category-company', ['id' => 'N'])  }}" class="blue-link @if ($dataId == 'N') active  @endif">N</a>
                <a href="{{ route('category-company', ['id' => 'O'])  }}" class="blue-link @if ($dataId == 'O') active  @endif">O</a>
                <a href="{{ route('category-company', ['id' => 'P'])  }}" class="blue-link @if ($dataId == 'P') active  @endif">P</a>
                <a href="{{ route('category-company', ['id' => 'Q'])  }}" class="blue-link @if ($dataId == 'Q') active  @endif">Q</a>
                <a href="{{ route('category-company', ['id' => 'R'])  }}" class="blue-link @if ($dataId == 'R') active  @endif">R</a>
                <a href="{{ route('category-company', ['id' => 'S'])  }}" class="blue-link @if ($dataId == 'S') active  @endif">S</a>
                <a href="{{ route('category-company', ['id' => 'T'])  }}" class="blue-link @if ($dataId == 'T') active  @endif">T</a>
                <a href="{{ route('category-company', ['id' => 'U'])  }}" class="blue-link @if ($dataId == 'U') active  @endif">U</a>
                <a href="{{ route('category-company', ['id' => 'V'])  }}" class="blue-link @if ($dataId == 'V') active  @endif">V</a>
                <a href="{{ route('category-company', ['id' => 'W'])  }}" class="blue-link @if ($dataId == 'W') active  @endif">W</a>
                <a href="{{ route('category-company', ['id' => 'X'])  }}" class="blue-link @if ($dataId == 'X') active  @endif">X</a>
                <a href="{{ route('category-company', ['id' => 'Y'])  }}" class="blue-link @if ($dataId == 'Y') active  @endif">Y</a>
                <a href="{{ route('category-company', ['id' => 'Z'])  }}" class="blue-link @if ($dataId == 'Z') active  @endif">Z</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END CATAGORIES -->
    </main>

    <!-- START FOOTER -->
    <footer class="footer pt-5 bg-light">
      <div class="container">
        <div class="row pt-3">
          <div class="col-lg-3 pl-5 mb-lg-0 mb-5">
            <a href="/">
              <img
                class="img-fluid footer__logo"
                src="../assets/images/logo--company-name-dark.svg"
                alt="li data"
              />
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-6 pl-md-0 pb-3 ps-md-0 ps-4">
            <h5 class="footer-title">ABOUT</h5>
            <ul class="pt-3">
              <li><a href="{{route('about')}}">About us</a></li>
              <li><a href="{{route('contact')}}">Contact us</a></li>
              <li><a href="/">Forum</a></li>
              <li><a href="/">Help</a></li>
            </ul>
          </div>

          <div
            class="col-lg-4 col-md-4 col-sm-6 p-md-0 pb-3 ps-md-0 ps-4 mt-md-0 mt-4"
          >
            <h5 class="footer-title">OUR PARTNERS</h5>

            <div class="row pe-5">
              <div class="col-lg-4 col-md-5 col-4 mt-3">
                <a href="https://www.latestdatabase.com/">
                  <img
                    src="../assets/images/latest-database--logo.svg"
                    class="img-fluid partner-logo"
                    alt="latest database logo"
                  />
                </a>
              </div>
              <div class="col-lg-4 col-md-5 col-4 mt-3 me-1">
                <a href="https://www.bcellphonelist.com/">
                  <img
                    src="../assets/images/Brother Phone Number List--logo.svg"
                    class="img-fluid partner-logo"
                    alt="Brother Phone Number List logo"
                  />
                </a>
              </div>
              <div class="col-lg-4 col-md-5 col-4 mt-3">
                <a href="http://www.photoeditorph.com/">
                  <img
                    src="../assets/images/phollipines-photo-editor--logo.svg"
                    class="img-fluid partner-logo"
                    alt="Philippines Photo Editor logo"
                  />
                </a>
              </div>
              <div class="col-lg-4 col-md-5 col-4 mt-3 me-1">
                <a href="https://www.mplists.com/">
                  <img
                    src="../assets/images/mplists--logo.svg"
                    class="img-fluid partner-logo"
                    alt="Mp List logo"
                  />
                </a>
              </div>
              <div class="col-lg-4 col-md-5 col-4 me-md-auto mt-3">
                <a href="http://www.seoexpartebd.com/">
                  <img
                    src="../assets/images/seo-exparte-logo.svg"
                    class="img-fluid partner-logo"
                    alt="SEO Exparte Bangladesh logo"
                  />
                </a>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-4 col-sm-6 pb-lg-5 pb-3 ps-md-0 ps-4 mt-md-0 mt-4"
          >
            <div class="span pb-3">
              <h5 class="footer-title">SOCIAL MEDIA</h5>
            </div>
            <div class="span fsocial">
              Follow us on social media to find out the latest updates on our
              progress.
            </div>
            <div class="social-media pt-3">
              <a href="https://www.facebook.com/Phonelistio-111559994765583">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/Phonelistio">
                <i class="fab fa-twitter"></i>
              </a>
              <a
                href="https://www.youtube.com/channel/UCIYmVIkqTG1oi79AWTeVLDQ"
              >
                <i class="fab fa-youtube"></i>
              </a>
              <a href="https://www.linkedin.com/in/phone-list-05b32a230/">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.instagram.com/phonelist.io/">
                <i class="fab fa-instagram"></i>
              </a>
            </div>

            <!-- START SOCIAL MEDIA BUTTON -->
            <div class="social-media-button mt-3">
              <ul>
                <li>
                  <a href="#"
                    ><i class="fab fa-whatsapp" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fab fa-telegram" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fab fa-facebook-messenger" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fab fa-skype" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fas fa-phone-alt" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </div>
            <!-- END SOCIAL MEDIA BUTTON -->
          </div>
        </div>

        <div class="row mt-5">
          <hr class="line" />
        </div>

        <div class="row bottom-line">
          <div class="col-md-4 text-md-left text-center">
            <span class="copy"
              >&#169;2022 Phonelist.io All rights reserved.</span
            >
          </div>
          <div class="col-md-8 mt-md-0 mt-4">
            <ul class="text-center m-auto terms">
              <li><a href="{{route('terms-of-service')}}">Terms of service</a></li>
              <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
              <li><a href="{{route('refund')}}">Refund Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->

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

    <!-- Custom JS -->
    <script src="../assets/js/script.js"></script>

    
     <!-- Search js -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">
    let route_user_company = "{{ url('/autocomplete-company-search') }}";
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

<script type="text/javascript">
    let route_user_people = "{{ url('/autocomplete-search') }}";
    $('#searchPeople').typeahead({
        source: function (query, process) {
            return $.get(route_user_people, {
                query: query
            }, function (data) {
                return process(data);
            });
        }
    });
</script>



  </body>
</html>


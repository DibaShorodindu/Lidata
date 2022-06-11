<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta
      name="description"
      content="Shamonti Haque's Contact Details with mobile number and email address from Li Data"
    />
    <meta name="keywords" content="li data," />

    <title>{{ $data->person_name }}s Contact Details | Li Data</title>

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
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
      rel="stylesheet"
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
                <a href="{{route('product')}}"class="navbar__a"> Product </a>
              </li>
              <li class="navbar__li">
                <a href="{{route('pricing-us')}}" class="navbar__a">
                  Pricing
                </a>
              </li>
              <li class="navbar__li">
                <a href="" class="navbar__a"> Blog </a>
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
              {{ $data->person_name }}
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
            class="img-fluid"
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
              <a href="{{route('product')}}" class="navigation__link">Product</a>
            </li>
            <li class="navigation__item">
              <a href="{{route('pricing-us')}}" class="navigation__link">Pricing</a>
            </li>
            <li class="navigation__item">
              <a href="https://blog.phonelist.io" class="navigation__link"
                >Blog</a
              >
            </li>
            <li class="navigation__item">
              <a href="{{route('career')}}" class="navigation__link">Careers</a>
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
              <form action="{{ route('userSearch') }}">
                @csrf
                <div class="col-12">
                  <input  type="text" name="searchPeople" id="searchPeople"   class="searchBar bg-white border-5 text-dark fw-normal col-md-8 col-7"  placeholder="Search by Name..." onkeyup="searchPeople()" autocomplete="off"  />
                  <button type="button" class="btn btn-blue ms-1 col-md-3 col-4"  >
                    Search
                  </button>
                </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="row">
              <form action="{{ route('companySearch') }}">
                @csrf
                <div class="col-12">
                  <input  type="text" name="searchCompany" id="searchCompany"  class="searchBar bg-white border-5 text-dark fw-normal col-md-8 col-7"  placeholder="Search by Company..." onkeyup="searchCompany()" autocomplete="off"  />
                  <button  type="button" class="btn btn-blue ms-1 col-md-3 col-4"   >
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

      <!-- START PERSON SHORT DETAILS -->
      <section class="section-person-details user-div mt-4 px-0 pb-4">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="card u-box-shadow-1">
                <div class="card-body">
                  <h1 class="card-title">{{ $data->person_name }}</h1>
                 
                  <h2 class="card-text">
                  
                  {{ $data->person_title}}  at
              
                    <a href="{{ route('user-company', ['id' => $data->id]) }}" style="color: #2495eb"
                      >{{ $data->organization_name }}</a
                    >
                    
                  </h2>
                
                </div>
                
                <div class="card-footer">
                  <div class="nav">
                    <ul class="d-flex flex-row">
                      <li class="nav-item active">
                        <a href="#professionalContact" class="nav-link">
                          Professional Contact
                        </a>
                      </li>
                      <li class="nav-item">
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
      <!-- END PERSON SHORT DETAILS -->

      <div class="container">
        <div class="row">
          <div class="col-lg-8 my-5">
            <!-- START PERSON Professional Contact Details -->
            <section
              class="section-contact user-details-div"
              id="professionalContact"
            >
              <div class="card user-details-div__card u-box-shadow-1">
                <h3 class="card-title">
                {{ $data->person_name }}''s Professional Contact Details
                </h3>
                <div class="card-body">
                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-envelope-fill"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-5 col-sm-6 mb-2"
                      >
                        <span>Email (Verified)</span>
                        <a href="#"> s**@seoexparte.com </a>
                      </div>

                      <button
                        type="button"
                        class="contact-details--btn btn btn-grad col-lg-4 col-md-3 col-sm-5 col-8"
                      >
                        Get Email Address
                      </button>
                      <div class="col-lg-3"></div>
                    </div>
                  </div>

                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-telephone-fill"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-5 col-sm-6 mb-2"
                      >
                        <span>Mobile Number</span>
                        <a href="#"> (XXX) XXX-XXXX</a>
                      </div>

                      <button
                        type="button"
                        class="contact-details--btn btn btn-grad col-lg-4 col-md-3 col-sm-5 col-8"
                      >
                        Get Mobile Number
                      </button>
                      <div class="col-lg-3"></div>
                    </div>
                  </div>

                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-telephone-fill"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                      >
                        <span>HQ</span>
                        <p style="color: #5d6a7e">{{ $data->organization_phone }}</p>
                      </div>

                      <div class="col-lg-3"></div>
                    </div>
                  </div>

                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-linkedin"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                      >
                        <span>LinkedIn Profile</span>
                        <a href="{{ $data->person_linkedin_url}}">
                        {{ $data->person_linkedin_url}}
                        </a>
                      </div>

                      <div class="col-lg-3"></div>
                    </div>
                  </div>

                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-pin-map-fill"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                      >
                        <span>City</span>
                        <p style="color: #5d6a7e">{{ $data->person_location_city}}</p>
                      </div>

                      <div class="col-lg-3"></div>
                    </div>
                  </div>

                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-map-fill"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                      >
                        <span>State</span>
                        <p style="color: #5d6a7e">N/A</p>
                      </div>

                      <div class="col-lg-3"></div>
                    </div>
                  </div>

                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-globe2"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                      >
                        <span>Country</span>
                        <p style="color: #5d6a7e">{{ $data->person_location_country}}</p>
                      </div>

                      <div class="col-lg-3"></div>
                    </div>
                  </div>

                  <div class="contact-details__box row mt-5">
                    <div
                      class="contact-details--icon col-lg-1 col-md-1 col-sm-2 col-2"
                    >
                      <div class="circle-element">
                        <i class="bi bi-building"></i>
                      </div>
                    </div>

                    <div
                      class="contact-details--content row col-md-10 col-sm-6 col-9 ps-md-5 ps-4"
                    >
                      <div
                        class="contact-details--text col-lg-5 col-md-7 col-sm-6 mb-2"
                      >
                        <span>Company</span>
                        <a href="#">{{ $data->organization_name}}</a>
                      </div>

                      <div class="col-lg-3 col-md-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- END PERSON Professional Contact Details -->

            <!-- START PERSON Current Company Details -->
            <section
              class="section-company user-details-div mt-5"
              id="companyDetails"
            >
              <div class="card user-details-div__card u-box-shadow-1">
                <h3 class="card-title">
                {{ $data->person_name}}'s Current Company Details
                </h3>

                <div class="card-body">
                  <div class="company-details__box">
                    <div class="company-details--title-box py-5">
                      <img
                        class="company-logo"
                        src="../assets/images/companyLogo--01.png"
                        alt="logo"
                      />

                      <div
                        class="company-title--box d-flex flex-column align-items-start"
                      >
                        <h4 class="company-title">{{ $data->organization_name}}</h4>

                        <span class="company-subtitle"
                          >Bogra, Bangladesh •
                          <span>150 Employees</span>
                        </span>
                        <span class="company-industry">{{ $data->organization_industries}}</span>
                        <div class="company-social-links">
                          <a href="{{ $data->organization_website_url}}">
                            <i class="bi bi-globe"></i>
                          </a>
                          <a href="{{ $data->organization_linkedin_numerical_urls}}">
                            <i class="bi bi-linkedin"></i>
                          </a>
                          <a href="{{ $data->organization_twitter_url}}">
                            <i class="bi bi-twitter"></i>
                          </a>
                          <a href="{{ $data->organization_facebook_url}}">
                            <i class="bi bi-facebook"></i>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="company-details--content mb-5">
                      <p>
                        Our company, the Latest Mailing Database Digital
                        Marketing Services is the most trusted website upon the
                        internet businesses. We are the largest data source
                        provider that our lead generation experts collected and
                        researched the data to over 200 websites with
                        permission-based. Therefore, our database is more
                        authentic and reliable than the other data service
                        provider. Furthermore, we started the business since
                        year 2012, with physical office that located in Bacolod
                        City, Negros Occidental, Philippines with an offshore
                        Virtual Officers in Bangladesh. As we operate with
                        complete License documents so we can run legally to
                        assure the clients that our business is safe
                        <span id="dots">...</span>
                        <span id="more">
                          and secure. Moreover, our team is determined to follow
                          all the anti-spam rules to provide high-quality
                          service to help the client promote their online
                          business more effectively. We deliver our products and
                          services with confidence. By providing the smarter
                          data solutions to help businesses reach their goals.
                          Wherefore, our team for customer support closely
                          assists the client to help their marketing department
                          on how to promote their products and services to their
                          target leads. As, we implement our company’s mission
                          to convert the specific leads into a potential
                          customer. In conclusion, we built trust. We nurture
                          our customers by giving them excellent services to
                          make them satisfied and grateful. We are helping the
                          client’s business remain on top of the online market.
                          We built a good relationship with the customers to
                          make them our regular clients as they also trusted our
                          company.
                        </span>
                      </p>
                      <button onclick="readMore()" id="seeMoreBtn">
                        See more
                      </button>
                    </div>

                    <div class="btn btn-light company-tag">
                    {{ $data->organization_industries}}
                    </div>

                    <div class="row">
                      <div class="col-lg-8 col-md-10">
                        <a
                          class="company-details--btn btn"
                          href="{{ route('user-company', ['id' => $data->id]) }}"
                          >Discover More About {{ $data->organization_name}}</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- END PERSON Current Company Details -->

            <!-- START PERSON Frequently Asked Questions -->
            <section class="section-faq user-details-div mt-5 mb-lg-4">
              <div class="card user-details-div__card u-box-shadow-1">
                <h3 class="card-title">
                  Frequently Asked Questions about {{ $data->person_name}}
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
                            What company does {{ $data->person_name}} work for?
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
                        {{ $data->person_name}} works {{ $data->organization_industries}}.
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

                          <span>What is {{ $data->person_name}}'s email address? </span>
                        </button>
                      </h2>
                      <div
                        id="collapseTwo"
                        class="faq-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#faq"
                      >
                        <div class="faq-body">
                        {{ $data->person_name}}'s email address is s**@seoexparte.com.
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
                            What {{ $data->person_name}}'s business email address?
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
                        {{ $data->person_name}}'s business email address is
                          s**@seoexparte.com.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- END PERSON Current Company Details -->
          </div>

          <div class="col-lg-4">
            <!-- START PERSON Colleagues Details -->
            <section
              class="section-colleagues user-details-div ms-lg-4 mt-lg-5 mt-0 mb-lg-0 mb-5"
            >
              <div class="card user-details-div__card u-box-shadow-1">
                <h3 class="card-title mb-2">
                  Colleagues at
                  <a href="{{ route('user-company', ['id' => $data->id]) }}">{{ $data->organization_name }}</a>
                </h3>

                <div class="card-body p-0">
                @foreach($userData->take(4) as $userFetchData)
                  <div class="colleagues-details__box pt-5">
                    <a class="colleagues-details--name" href="{{ route('user', ['id' => $userFetchData->id]) }}"
                      >{{ $userFetchData->person_name}}</a
                    >
                    <p class="colleagues-details--job">
                    @if(!empty( $userFetchData->work ))
                            {{ $userFetchData->work }}
                            @else
                          N/A
                    @endif

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
              
             
                  @endforeach
                </div>
              </div>
            </section>
            <!-- END PERSON Colleagues Details -->
          </div>
        </div>
      </div>

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
            <a href="{{ route('category-company', ['id' => 'A'])  }}" class="blue-link ">A</a>
            <a href="{{ route('category-company', ['id' => 'B'])  }}" class="blue-link  ">B</a>
            <a href="{{ route('category-company', ['id' => 'C'])  }}" class="blue-link  ">C</a>
            <a href="{{ route('category-company', ['id' => 'D'])  }}" class="blue-link  ">D</a>
            <a href="{{ route('category-company', ['id' => 'E'])  }}" class="blue-link  ">E</a>
            <a href="{{ route('category-company', ['id' => 'F'])  }}" class="blue-link  ">F</a>
            <a href="{{ route('category-company', ['id' => 'G'])  }}" class="blue-link  ">G</a>
            <a href="{{ route('category-company', ['id' => 'H'])  }}" class="blue-link  ">H</a>
            <a href="{{ route('category-company', ['id' => 'I'])  }}" class="blue-link  ">I</a>
            <a href="{{ route('category-company', ['id' => 'J'])  }}" class="blue-link  ">J</a>
            <a href="{{ route('category-company', ['id' => 'K'])  }}" class="blue-link  ">K</a>
            <a href="{{ route('category-company', ['id' => 'L'])  }}" class="blue-link  ">L</a>
            <a href="{{ route('category-company', ['id' => 'M'])  }}" class="blue-link  ">M</a>
            <a href="{{ route('category-company', ['id' => 'N'])  }}" class="blue-link  ">N</a>
            <a href="{{ route('category-company', ['id' => 'O'])  }}" class="blue-link  ">O</a>
            <a href="{{ route('category-company', ['id' => 'P'])  }}" class="blue-link  ">P</a>
            <a href="{{ route('category-company', ['id' => 'Q'])  }}" class="blue-link  ">Q</a>
            <a href="{{ route('category-company', ['id' => 'R'])  }}" class="blue-link  ">R</a>
            <a href="{{ route('category-company', ['id' => 'S'])  }}" class="blue-link  ">S</a>
            <a href="{{ route('category-company', ['id' => 'T'])  }}" class="blue-link  ">T</a>
            <a href="{{ route('category-company', ['id' => 'U'])  }}" class="blue-link  ">U</a>
            <a href="{{ route('category-company', ['id' => 'V'])  }}" class="blue-link  ">V</a>
            <a href="{{ route('category-company', ['id' => 'W'])  }}" class="blue-link  ">W</a>
            <a href="{{ route('category-company', ['id' => 'X'])  }}" class="blue-link  ">X</a>
            <a href="{{ route('category-company', ['id' => 'Y'])  }}" class="blue-link  ">Y</a>
            <a href="{{ route('category-company', ['id' => 'Z'])  }}" class="blue-link  ">Z</a>
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
                alt="phone list"
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
                    src="../../assets/images/latest-database--logo.svg"
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
    <script src="../../assets/js/navbar.js"></script>
    <script src="../../assets/js/script.js"></script>


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

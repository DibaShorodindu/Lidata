@extends('userDashboard.settings.master')

@section('main')
    <section class="section-main">
        <div class="card u-box-shadow-2 m-4 border rounded-3">
            {{--<form action="--}}{{--{{ route('updateUserInfo', ['id' => Auth::user()->id]) }}--}}{{--" id="personalInfo" method="post" enctype="multipart/form-data">
                @csrf--}}
                <div class="card-title d-flex align-items-center justify-content-between">
                    <h1 class="p-4 text-capitalize">Account Info</h1>
                    <button type="button" class="btn btn-blue me-3" onclick="saveFunction()">Save</button>
                </div>
                <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4">
                                <input hidden type="text" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}"/>
                                <form action="{{ route('updateUserFirstName', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="mb-3">
                                            <label for="fname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName" value="{{ Auth::user()->firstName }}" onkeypress="handleFirstName" />
                                        </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                            <form action="{{ route('updateUserLastName', ['id' => Auth::user()->id]) }}"  method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="mb-3">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{ Auth::user()->lastName }}" onkeypress="handleLastName"/>
                                    </div>
                            </form>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <form action="{{ route('updateUserPhone', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="mb-3">
                                        <label for="number" class="form-label"
                                        >Phone Number</label
                                        >
                                        <input type="number" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}" onkeypress="handlePhone"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <form action="{{ route('updateUserCountry', ['id' => Auth::user()->id]) }}" id="personalInfo" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <label for="country" class="form-label">Country</label>
                                        <div class="dropdown" id="country">
                                          <input
                                            class="searchBar bg-white text-dark fw-normal col-12"
                                            id="countryDropdown"
                                            type="text"
                                            placeholder="Bangladesh"
                                            data-toggle="dropdown"
                                            data-bs-toggle="dropdown"
                                          />

                                          <span class="caret"></span>
                    
                                          <ul
                                            class="dropdown-menu bg-white text-dark fw-bold p-3"
                                            aria-labelledby="countryDropdown"
                                          >
                                            <li class="dropdown-item">
                                              <a href="#">Afghanistan</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Åland Islands</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Albania</a></li>
                                            <li class="dropdown-item"><a href="#">Algeria</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">American Samoa</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Andorra</a></li>
                                            <li class="dropdown-item"><a href="#">Angola</a></li>
                                            <li class="dropdown-item"><a href="#">Anguilla</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Antarctica</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Antigua and Barbuda</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Argentina</a></li>
                                            <li class="dropdown-item"><a href="#">Armenia</a></li>
                                            <li class="dropdown-item"><a href="#">Aruba</a></li>
                                            <li class="dropdown-item"><a href="#">Australia</a></li>
                                            <li class="dropdown-item"><a href="#">Austria</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Azerbaijan</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Bahamas</a></li>
                                            <li class="dropdown-item"><a href="#">Bahrain</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Bangladesh</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Barbados</a></li>
                                            <li class="dropdown-item"><a href="#">Belarus</a></li>
                                            <li class="dropdown-item"><a href="#">Belgium</a></li>
                                            <li class="dropdown-item"><a href="#">Belize</a></li>
                                            <li class="dropdown-item"><a href="#">Benin</a></li>
                                            <li class="dropdown-item"><a href="#">Bermuda</a></li>
                                            <li class="dropdown-item"><a href="#">Bhutan</a></li>
                                            <li class="dropdown-item"><a href="#">Bolivia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Bosnia and Herzegovina</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Botswana</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Bouvet Island</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Brazil</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">British Indian Ocean Territory</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Brunei Darussalam</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Bulgaria</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Burkina Faso</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Burundi</a></li>
                                            <li class="dropdown-item"><a href="#">Cambodia</a></li>
                                            <li class="dropdown-item"><a href="#">Cameroon</a></li>
                                            <li class="dropdown-item"><a href="#">Canada</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Cape Verde</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Cayman Islands</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Central African Republic</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Chad</a></li>
                                            <li class="dropdown-item"><a href="#">Chile</a></li>
                                            <li class="dropdown-item"><a href="#">China</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Christmas Island</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Cocos (Keeling) Islands</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Colombia</a></li>
                                            <li class="dropdown-item"><a href="#">Comoros</a></li>
                                            <li class="dropdown-item"><a href="#">Congo</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Congo, The Democratic Republic of The</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Cook Islands</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Costa Rica</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Cote D'ivoire</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Croatia</a></li>
                                            <li class="dropdown-item"><a href="#">Cuba</a></li>
                                            <li class="dropdown-item"><a href="#">Cyprus</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Czech Republic</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Denmark</a></li>
                                            <li class="dropdown-item"><a href="#">Djibouti</a></li>
                                            <li class="dropdown-item"><a href="#">Dominica</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Dominican Republic</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Ecuador</a></li>
                                            <li class="dropdown-item"><a href="#">Egypt</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">El Salvador</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Equatorial Guinea</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Eritrea</a></li>
                                            <li class="dropdown-item"><a href="#">Estonia</a></li>
                                            <li class="dropdown-item"><a href="#">Ethiopia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Falkland Islands (Malvinas)</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Faroe Islands</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Fiji</a></li>
                                            <li class="dropdown-item"><a href="#">Finland</a></li>
                                            <li class="dropdown-item"><a href="#">France</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">French Guiana</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">French Polynesia</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">French Southern Territories</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Gabon</a></li>
                                            <li class="dropdown-item"><a href="#">Gambia</a></li>
                                            <li class="dropdown-item"><a href="#">Georgia</a></li>
                                            <li class="dropdown-item"><a href="#">Germany</a></li>
                                            <li class="dropdown-item"><a href="#">Ghana</a></li>
                                            <li class="dropdown-item"><a href="#">Gibraltar</a></li>
                                            <li class="dropdown-item"><a href="#">Greece</a></li>
                                            <li class="dropdown-item"><a href="#">Greenland</a></li>
                                            <li class="dropdown-item"><a href="#">Grenada</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Guadeloupe</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Guam</a></li>
                                            <li class="dropdown-item"><a href="#">Guatemala</a></li>
                                            <li class="dropdown-item"><a href="#">Guernsey</a></li>
                                            <li class="dropdown-item"><a href="#">Guinea</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Guinea-bissau</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Guyana</a></li>
                                            <li class="dropdown-item"><a href="#">Haiti</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Heard Island and Mcdonald Islands</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Holy See (Vatican City State)</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Honduras</a></li>
                                            <li class="dropdown-item"><a href="#">Hong Kong</a></li>
                                            <li class="dropdown-item"><a href="#">Hungary</a></li>
                                            <li class="dropdown-item"><a href="#">Iceland</a></li>
                                            <li class="dropdown-item"><a href="#">India</a></li>
                                            <li class="dropdown-item"><a href="#">Indonesia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Iran, Islamic Republic of</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Iraq</a></li>
                                            <li class="dropdown-item"><a href="#">Ireland</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Isle of Man</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Israel</a></li>
                                            <li class="dropdown-item"><a href="#">Italy</a></li>
                                            <li class="dropdown-item"><a href="#">Jamaica</a></li>
                                            <li class="dropdown-item"><a href="#">Japan</a></li>
                                            <li class="dropdown-item"><a href="#">Jersey</a></li>
                                            <li class="dropdown-item"><a href="#">Jordan</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Kazakhstan</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Kenya</a></li>
                                            <li class="dropdown-item"><a href="#">Kiribati</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Korea, Democratic People's Republic of</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Korea, Republic of</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Kuwait</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Kyrgyzstan</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Lao People's Democratic Republic</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Latvia</a></li>
                                            <li class="dropdown-item"><a href="#">Lebanon</a></li>
                                            <li class="dropdown-item"><a href="#">Lesotho</a></li>
                                            <li class="dropdown-item"><a href="#">Liberia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Libyan Arab Jamahiriya</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Liechtenstein</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Lithuania</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Luxembourg</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Macao</a></li>
                                            <li class="dropdown-item">
                                              <a href="#"
                                                >Macedonia, The Former Yugoslav Republic of</a
                                              >
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Madagascar</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Malawi</a></li>
                                            <li class="dropdown-item"><a href="#">Malaysia</a></li>
                                            <li class="dropdown-item"><a href="#">Maldives</a></li>
                                            <li class="dropdown-item"><a href="#">Mali</a></li>
                                            <li class="dropdown-item"><a href="#">Malta</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Marshall Islands</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Martinique</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Mauritania</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Mauritius</a></li>
                                            <li class="dropdown-item"><a href="#">Mayotte</a></li>
                                            <li class="dropdown-item"><a href="#">Mexico</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Micronesia, Federated States of</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Moldova, Republic of</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Monaco</a></li>
                                            <li class="dropdown-item"><a href="#">Mongolia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Montenegro</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Montserrat</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Morocco</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Mozambique</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Myanmar</a></li>
                                            <li class="dropdown-item"><a href="#">Namibia</a></li>
                                            <li class="dropdown-item"><a href="#">Nauru</a></li>
                                            <li class="dropdown-item"><a href="#">Nepal</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Netherlands</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Netherlands Antilles</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">New Caledonia</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">New Zealand</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Nicaragua</a></li>
                                            <li class="dropdown-item"><a href="#">Niger</a></li>
                                            <li class="dropdown-item"><a href="#">Nigeria</a></li>
                                            <li class="dropdown-item"><a href="#">Niue</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Norfolk Island</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Northern Mariana Islands</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Norway</a></li>
                                            <li class="dropdown-item"><a href="#">Oman</a></li>
                                            <li class="dropdown-item"><a href="#">Pakistan</a></li>
                                            <li class="dropdown-item"><a href="#">Palau</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Palestinian Territory, Occupied</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Panama</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Papua New Guinea</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Paraguay</a></li>
                                            <li class="dropdown-item"><a href="#">Peru</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Philippines</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Pitcairn</a></li>
                                            <li class="dropdown-item"><a href="#">Poland</a></li>
                                            <li class="dropdown-item"><a href="#">Portugal</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Puerto Rico</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Qatar</a></li>
                                            <li class="dropdown-item"><a href="#">Reunion</a></li>
                                            <li class="dropdown-item"><a href="#">Romania</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Russian Federation</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Rwanda</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Saint Helena</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Saint Kitts and Nevis</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Saint Lucia</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Saint Pierre and Miquelon</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Saint Vincent and The Grenadines</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Samoa</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">San Marino</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Sao Tome and Principe</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Saudi Arabia</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Senegal</a></li>
                                            <li class="dropdown-item"><a href="#">Serbia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Seychelles</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Sierra Leone</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Singapore</a></li>
                                            <li class="dropdown-item"><a href="#">Slovakia</a></li>
                                            <li class="dropdown-item"><a href="#">Slovenia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Solomon Islands</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Somalia</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">South Africa</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#"
                                                >South Georgia and The South Sandwich Islands</a
                                              >
                                            </li>
                                            <li class="dropdown-item"><a href="#">Spain</a></li>
                                            <li class="dropdown-item"><a href="#">Sri Lanka</a></li>
                                            <li class="dropdown-item"><a href="#">Sudan</a></li>
                                            <li class="dropdown-item"><a href="#">Suriname</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Svalbard and Jan Mayen</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Swaziland</a></li>
                                            <li class="dropdown-item"><a href="#">Sweden</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Switzerland</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Syrian Arab Republic</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Taiwan (ROC)</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Tajikistan</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Tanzania, United Republic of</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Thailand</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Timor-leste</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Togo</a></li>
                                            <li class="dropdown-item"><a href="#">Tokelau</a></li>
                                            <li class="dropdown-item"><a href="#">Tonga</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Trinidad and Tobago</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Tunisia</a></li>
                                            <li class="dropdown-item"><a href="#">Turkey</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Turkmenistan</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Turks and Caicos Islands</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Tuvalu</a></li>
                                            <li class="dropdown-item"><a href="#">Uganda</a></li>
                                            <li class="dropdown-item"><a href="#">Ukraine</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">United Arab Emirates</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">United Kingdom</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">United States</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">United States Minor Outlying Islands</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Uruguay</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Uzbekistan</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Vanuatu</a></li>
                                            <li class="dropdown-item"><a href="#">Venezuela</a></li>
                                            <li class="dropdown-item"><a href="#">Viet Nam</a></li>
                                            <li class="dropdown-item">
                                              <a href="#">Virgin Islands, British</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Virgin Islands, U.S.</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Wallis and Futuna</a>
                                            </li>
                                            <li class="dropdown-item">
                                              <a href="#">Western Sahara</a>
                                            </li>
                                            <li class="dropdown-item"><a href="#">Yemen</a></li>
                                            <li class="dropdown-item"><a href="#">Zambia</a></li>
                                            <li class="dropdown-item"><a href="#">Zimbabwe</a></li>
                                          </ul>
                                        </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <span class="form-span d-block" id="email"
                                        >{{ Auth::user()->email }}</span
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <button
                                        type="button"
                                        class="btn btn-change mt-3"
                                        data-bs-toggle="modal"
                                        data-bs-target="#changeEmail"
                                    >
                                        <i class="bi bi-shield-lock"></i>
                                        Change Email
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="changeEmail"
                                        tabindex="-1"
                                        aria-labelledby="changeEmail"
                                        aria-hidden="true"
                                    >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="changeEmail">
                                                        Change Email
                                                    </h3>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    ></button>
                                                </div>
                                                <form action="{{ route('updateUserEmail', ['id' => Auth::user()->id]) }}" id="personalInfo" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="" class="form-label"
                                                                >New Email:</label
                                                                >
                                                                <input type="email" class="form-control" name="email" />
                                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">
                                                            Change Email
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password" class="form-label">Password</label>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <button
                                        type="button"
                                        class="btn btn-change"
                                        data-bs-toggle="modal"
                                        data-bs-target="#changePassword"
                                    >
                                        <i class="bi bi-shield-lock"></i>
                                        Change Password
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="changePassword"
                                        tabindex="-1"
                                        aria-labelledby="changePassword"
                                        aria-hidden="true"
                                    >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="changePassword">
                                                        Change Password
                                                    </h3>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    ></button>
                                                </div>
                                                <form action="{{ route('updateUserPassword', ['id' => Auth::user()->id]) }}"  method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="" class="form-label"
                                                                >New Password:</label
                                                                >
                                                                <input type="password" class="form-control" name="password" />
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">
                                                            Change Password
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            {{--</form>--}}

        </div>
        </div>
    </section>


    <script>

        function handleFirstName(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handleLastName(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handlePhone(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function handleCountry(e){
            if(e.key === "Enter"){
                alert("Enter was just pressed.");
            }

            return false;
        }
        function saveFunction(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id = document.getElementById("id").value;
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;
            var phone = document.getElementById("phone").value;
            var country = document.getElementById("country").value;
            //alert(id);
            $.ajax({
                type: "POST",
                url: '{{ route('updateUserInfo') }}',
                data: { firstName:firstName, lastName:lastName, phone:phone, country:country, id:id },
                success: function( msg ) {
                    alert( msg );
                }
            });
        }



    </script>

@endsection

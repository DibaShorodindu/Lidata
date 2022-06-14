<?php $__env->startSection('metaDescription'); ?>
    List of contacts in Phone Number List's database for contacts living in '<?php echo e($dataId); ?>'
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    Country Search: <?php echo e($dataId); ?> | Phone List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <!-- START SEARCH BARS -->
    <section class="section-searchbar pt-md-5 pb-md-4 py-2 mt-md-0 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 ms-md-auto">
                    <div class="row">
                        <form id="searchPeopleByName" action="<?php echo e(route('userSearch')); ?>">
                            <div class="col-12">
                                <input type="text" name="searchPeople" id="searchPeople"
                                       class="searchBar bg-white border-5 text-dark fw-normal col-md-11 col-11" 
                                       placeholder="Search by Name..." onkeypress="handleName" />
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="dropdown" id="searchCountry">
                        <input
                            class="searchBar w-100 bg-white text-dark fw-normal"
                            id="countryDropdown"
                            type="text"
                            placeholder="Search Person by Country..."
                            data-toggle="dropdown"
                            data-bs-toggle="dropdown"
                        />
                        <span class="caret"></span>

                        <ul
                            class="dropdown-menu w-100 bg-white text-dark fw-bold p-3"
                            aria-labelledby="countryDropdown"
                        >
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Afghanistan'])); ?>" <?php if($dataId == 'Afghanistan'): ?> selected  <?php endif; ?> >Afghanistan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Åland Islands'])); ?>" <?php if($dataId == 'Åland Islands'): ?> selected  <?php endif; ?> >Åland Islands</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Albania'])); ?>" <?php if($dataId == 'Albania'): ?> selected  <?php endif; ?> >Albania</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Algeria'])); ?>" <?php if($dataId == 'Algeria'): ?> selected  <?php endif; ?> >Algeria</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'American Samoa'])); ?>" <?php if($dataId == 'American Samoa'): ?> selected  <?php endif; ?> >American Samoa</a></li>
                            <li class="dropdown-item"><a href=" <?php echo e(route('country', ['id' => 'Andorra'])); ?>" <?php if($dataId == 'Andorra'): ?> selected  <?php endif; ?> >Andorra</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Angola'])); ?>" <?php if($dataId == 'Angola'): ?> selected  <?php endif; ?> >Angola</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Anguilla'])); ?>" <?php if($dataId == 'Anguilla'): ?> selected  <?php endif; ?> >Anguilla</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Antarctica'])); ?>" <?php if($dataId == 'Antarctica'): ?> selected  <?php endif; ?> >Antarctica</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Antigua and Barbuda'])); ?>" <?php if($dataId == 'Antigua and Barbuda'): ?> selected  <?php endif; ?> >
                                    Antigua and Barbuda
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Argentina'])); ?>" <?php if($dataId == 'Argentina'): ?> selected  <?php endif; ?> >Argentina</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Armenia'])); ?>" <?php if($dataId == 'Armenia'): ?> selected  <?php endif; ?> >Armenia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Aruba'])); ?>" <?php if($dataId == 'Aruba'): ?> selected  <?php endif; ?> >Aruba</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Australia'])); ?>" <?php if($dataId == 'Australia'): ?> selected  <?php endif; ?> >Australia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Austria'])); ?>" <?php if($dataId == 'Austria'): ?> selected  <?php endif; ?> >Austria</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Azerbaijan'])); ?>" <?php if($dataId == 'Azerbaijan'): ?> selected  <?php endif; ?> >Azerbaijan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bahamas'])); ?>" <?php if($dataId == 'Bahamas'): ?> selected  <?php endif; ?> >Bahamas</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bahrain'])); ?>" <?php if($dataId == 'Bahrain'): ?> selected  <?php endif; ?> >Bahrain</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bangladesh'])); ?>" <?php if($dataId == 'Bangladesh'): ?> selected  <?php endif; ?> >Bangladesh</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Barbados'])); ?>" <?php if($dataId == 'Barbados'): ?> selected  <?php endif; ?> >Barbados</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Belarus'])); ?>" <?php if($dataId == 'Belarus'): ?> selected  <?php endif; ?> >Belarus</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Belgium'])); ?>" <?php if($dataId == 'Belgium'): ?> selected  <?php endif; ?> >Belgium</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Belize'])); ?>" <?php if($dataId == 'Belize'): ?> selected  <?php endif; ?> >Belize</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Benin'])); ?>" <?php if($dataId == 'Benin'): ?> selected  <?php endif; ?> >Benin</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bermuda'])); ?>" <?php if($dataId == 'Bermuda'): ?> selected  <?php endif; ?> >Bermuda</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bhutan'])); ?>" <?php if($dataId == 'Bhutan'): ?> selected  <?php endif; ?> >Bhutan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bolivia'])); ?>" <?php if($dataId == 'Bolivia'): ?> selected  <?php endif; ?> >Bolivia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bosnia and Herzegovina'])); ?>" <?php if($dataId == 'Bosnia and Herzegovina'): ?> selected  <?php endif; ?> >
                                    Bosnia and Herzegovina
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Botswana'])); ?>" <?php if($dataId == 'Botswana'): ?> selected  <?php endif; ?> >Botswana</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bouvet Island'])); ?>" <?php if($dataId == 'Bouvet Island'): ?> selected  <?php endif; ?> >Bouvet Island</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Brazil'])); ?>" <?php if($dataId == 'Brazil'): ?> selected  <?php endif; ?> >Brazil</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'British Indian Ocean Territory'])); ?>" <?php if($dataId == 'British Indian Ocean Territory'): ?> selected  <?php endif; ?> >
                                    British Indian Ocean Territory
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Brunei Darussalam'])); ?>" <?php if($dataId == 'Brunei Darussalam'): ?> selected  <?php endif; ?> >
                                    Brunei Darussalam
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Bulgaria'])); ?>" <?php if($dataId == 'Bulgaria'): ?> selected  <?php endif; ?> >Bulgaria</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Burkina Faso'])); ?>" <?php if($dataId == 'Burkina Faso'): ?> selected  <?php endif; ?> >Burkina Faso</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Burundi'])); ?>" <?php if($dataId == 'Burundi'): ?> selected  <?php endif; ?> >Burundi</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cambodia'])); ?>" <?php if($dataId == 'Cambodia'): ?> selected  <?php endif; ?> >Cambodia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cameroon'])); ?>" <?php if($dataId == 'Cameroon'): ?> selected  <?php endif; ?> >Cameroon</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Canada'])); ?>" <?php if($dataId == 'Canada'): ?> selected  <?php endif; ?> >Canada</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cape Verde'])); ?>" <?php if($dataId == 'Cape Verde'): ?> selected  <?php endif; ?> >Cape Verde</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cayman Islands'])); ?>" <?php if($dataId == 'Cayman Islands'): ?> selected  <?php endif; ?> >Cayman Islands</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Central African Republic'])); ?>" <?php if($dataId == 'Central African Republic'): ?> selected  <?php endif; ?> >
                                    Central African Republic
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Chad'])); ?>" <?php if($dataId == 'Chad'): ?> selected  <?php endif; ?> >Chad</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Chile'])); ?>" <?php if($dataId == 'Chile'): ?> selected  <?php endif; ?> >Chile</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'China'])); ?>" <?php if($dataId == 'China'): ?> selected  <?php endif; ?> >China</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Christmas Island'])); ?>" <?php if($dataId == 'Christmas Island'): ?> selected  <?php endif; ?> >Christmas Island</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cocos (Keeling) Islands'])); ?>" <?php if($dataId == 'Cocos (Keeling) Islands'): ?> selected  <?php endif; ?> >
                                    Cocos (Keeling) Islands
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Colombia'])); ?>" <?php if($dataId == 'Colombia'): ?> selected  <?php endif; ?> >Colombia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Comoros'])); ?>" <?php if($dataId == 'Comoros'): ?> selected  <?php endif; ?> >Comoros</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Congo'])); ?>" <?php if($dataId == 'Congo'): ?> selected  <?php endif; ?> >Congo</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Congo, The Democratic Republic of The'])); ?>" <?php if($dataId == 'Congo, The Democratic Republic of The'): ?> selected  <?php endif; ?> >
                                    Congo, The Democratic Republic of The
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cook Islands'])); ?>" <?php if($dataId == 'Cook Islands'): ?> selected  <?php endif; ?> >Cook Islands</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Costa Rica'])); ?>" <?php if($dataId == 'Costa Rica'): ?> selected  <?php endif; ?> >Costa Rica</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cote D ivoire'])); ?>" <?php if($dataId == 'Cote D ivoire'): ?> selected  <?php endif; ?> >Cote D'ivoire</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Croatia'])); ?>" <?php if($dataId == 'Croatia'): ?> selected  <?php endif; ?> >Croatia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cuba'])); ?>" <?php if($dataId == 'Cuba'): ?> selected  <?php endif; ?> >Cuba</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Cyprus'])); ?>" <?php if($dataId == 'Cyprus'): ?> selected  <?php endif; ?> >Cyprus</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Czech Republic'])); ?>" <?php if($dataId == 'Czech Republic'): ?> selected  <?php endif; ?> >Czech Republic</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Denmark'])); ?>" <?php if($dataId == 'Denmark'): ?> selected  <?php endif; ?> >Denmark</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Djibouti'])); ?>" <?php if($dataId == 'Djibouti'): ?> selected  <?php endif; ?> >Djibouti</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Dominica'])); ?>" <?php if($dataId == 'Dominica'): ?> selected  <?php endif; ?> >Dominica</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Dominican Republic'])); ?>" <?php if($dataId == 'Dominican Republic'): ?> selected  <?php endif; ?> >
                                    Dominican Republic
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Ecuador'])); ?>" <?php if($dataId == 'Ecuador'): ?> selected  <?php endif; ?> >Ecuador</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Egypt'])); ?>" <?php if($dataId == 'Egypt'): ?> selected  <?php endif; ?> >Egypt</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'El Salvador'])); ?>" <?php if($dataId == 'El Salvador'): ?> selected  <?php endif; ?> >El Salvador</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Equatorial Guinea'])); ?>" <?php if($dataId == 'Equatorial Guinea'): ?> selected  <?php endif; ?> >
                                    Equatorial Guinea
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Eritrea'])); ?>" <?php if($dataId == 'Eritrea'): ?> selected  <?php endif; ?> >Eritrea</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Estonia'])); ?>" <?php if($dataId == 'Estonia'): ?> selected  <?php endif; ?> >Estonia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Ethiopia'])); ?>" <?php if($dataId == 'Ethiopia'): ?> selected  <?php endif; ?> >Ethiopia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Falkland Islands (Malvinas)'])); ?>" <?php if($dataId == 'Falkland Islands (Malvinas)'): ?> selected  <?php endif; ?> >
                                    Falkland Islands (Malvinas)
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Faroe Islands'])); ?>" <?php if($dataId == 'Faroe Islands'): ?> selected  <?php endif; ?> >Faroe Islands</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Fiji'])); ?>" <?php if($dataId == 'Fiji'): ?> selected  <?php endif; ?> >Fiji</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Finland'])); ?>" <?php if($dataId == 'Finland'): ?> selected  <?php endif; ?> >Finland</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'France'])); ?>" <?php if($dataId == 'France'): ?> selected  <?php endif; ?> >France</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'French Guiana'])); ?>" <?php if($dataId == 'French Guiana'): ?> selected  <?php endif; ?> >French Guiana</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'French Polynesia'])); ?>" <?php if($dataId == 'French Polynesia'): ?> selected  <?php endif; ?> >French Polynesia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'French Southern Territories'])); ?>" <?php if($dataId == 'French Southern Territories'): ?> selected  <?php endif; ?> >
                                    French Southern Territories
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Gabon'])); ?>" <?php if($dataId == 'Gabon'): ?> selected  <?php endif; ?> >Gabon</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Gambia'])); ?>" <?php if($dataId == 'Gambia'): ?> selected  <?php endif; ?> >Gambia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Georgia'])); ?>" <?php if($dataId == 'Georgia'): ?> selected  <?php endif; ?> >Georgia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Germany'])); ?>" <?php if($dataId == 'Germany'): ?> selected  <?php endif; ?> >Germany</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Ghana'])); ?>" <?php if($dataId == 'Ghana'): ?> selected  <?php endif; ?> >Ghana</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Gibraltar'])); ?>" <?php if($dataId == 'Gibraltar'): ?> selected  <?php endif; ?> >Gibraltar</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Greece'])); ?>" <?php if($dataId == 'Greece'): ?> selected  <?php endif; ?> >Greece</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Greenland'])); ?>" <?php if($dataId == 'Greenland'): ?> selected  <?php endif; ?> >Greenland</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Grenada'])); ?>" <?php if($dataId == 'Grenada'): ?> selected  <?php endif; ?> >Grenada</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Guadeloupe'])); ?>" <?php if($dataId == 'Guadeloupe'): ?> selected  <?php endif; ?> >Guadeloupe</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Guam'])); ?>" <?php if($dataId == 'Guam'): ?> selected  <?php endif; ?> >Guam</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Guatemala'])); ?>" <?php if($dataId == 'Guatemala'): ?> selected  <?php endif; ?> >Guatemala</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Guernsey'])); ?>" <?php if($dataId == 'Guernsey'): ?> selected  <?php endif; ?> >Guernsey</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Guinea'])); ?>" <?php if($dataId == 'Guinea'): ?> selected  <?php endif; ?> >Guinea</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Guinea-bissau'])); ?>" <?php if($dataId == 'Guinea-bissau'): ?> selected  <?php endif; ?> >Guinea-bissau</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Guyana'])); ?>" <?php if($dataId == 'Guyana'): ?> selected  <?php endif; ?> >Guyana</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Haiti'])); ?>" <?php if($dataId == 'Haiti'): ?> selected  <?php endif; ?> >Haiti</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Heard Island and Mcdonald Islands'])); ?>" <?php if($dataId == 'Heard Island and Mcdonald Islands'): ?> selected  <?php endif; ?> >
                                    Heard Island and Mcdonald Islands
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Holy See (Vatican City State)'])); ?>" <?php if($dataId == 'Holy See (Vatican City State)'): ?> selected  <?php endif; ?> >
                                    Holy See (Vatican City State)
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Honduras'])); ?>" <?php if($dataId == 'Honduras'): ?> selected  <?php endif; ?> >Honduras</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Hong Kong'])); ?>" <?php if($dataId == 'Hong Kong'): ?> selected  <?php endif; ?> >Hong Kong</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Hungary'])); ?>" <?php if($dataId == 'Hungary'): ?> selected  <?php endif; ?> >Hungary</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Iceland'])); ?>" <?php if($dataId == 'Iceland'): ?> selected  <?php endif; ?> >Iceland</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'India'])); ?>" <?php if($dataId == 'India'): ?> selected  <?php endif; ?> >India</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Indonesia'])); ?>" <?php if($dataId == 'Indonesia'): ?> selected  <?php endif; ?> >Indonesia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Iran, Islamic Republic of'])); ?>" <?php if($dataId == 'Iran, Islamic Republic of'): ?> selected  <?php endif; ?> >
                                    Iran, Islamic Republic of
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Iraq'])); ?>" <?php if($dataId == 'Iraq'): ?> selected  <?php endif; ?> >Iraq</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Ireland'])); ?>" <?php if($dataId == 'Ireland'): ?> selected  <?php endif; ?> >Ireland</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Isle of Man'])); ?>" <?php if($dataId == 'Isle of Man'): ?> selected  <?php endif; ?> >Isle of Man</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Israel'])); ?>" <?php if($dataId == 'Israel'): ?> selected  <?php endif; ?> >Israel</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Italy'])); ?>" <?php if($dataId == 'Italy'): ?> selected  <?php endif; ?> >Italy</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Jamaica'])); ?>" <?php if($dataId == 'Jamaica'): ?> selected  <?php endif; ?> >Jamaica</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Japan'])); ?>" <?php if($dataId == 'Japan'): ?> selected  <?php endif; ?> >Japan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Jersey'])); ?>" <?php if($dataId == 'Jersey'): ?> selected  <?php endif; ?> >Jersey</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Jordan'])); ?>" <?php if($dataId == 'Jordan'): ?> selected  <?php endif; ?> >Jordan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Kazakhstan'])); ?>" <?php if($dataId == 'Kazakhstan'): ?> selected  <?php endif; ?> >Kazakhstan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Kenya'])); ?>" <?php if($dataId == 'Kenya'): ?> selected  <?php endif; ?> >Kenya</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Kiribati'])); ?>" <?php if($dataId == 'Kiribati'): ?> selected  <?php endif; ?> >Kiribati</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Korea, Democratic Peoples Republic of'])); ?>" <?php if($dataId == 'Korea, Democratic Peoples Republic of'): ?> selected  <?php endif; ?> >
                                    Korea, Democratic People's Republic of
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Korea, Republic of'])); ?>" <?php if($dataId == 'Korea, Republic of'): ?> selected  <?php endif; ?> >
                                    Korea, Republic of
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Kuwait'])); ?>" <?php if($dataId == 'Kuwait'): ?> selected  <?php endif; ?> >Kuwait</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Kyrgyzstan'])); ?>" <?php if($dataId == 'Kyrgyzstan'): ?> selected  <?php endif; ?> >Kyrgyzstan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Lao Peoples Democratic Republic'])); ?>" <?php if($dataId == 'Lao Peoples Democratic Republic'): ?> selected  <?php endif; ?> >
                                    Lao People's Democratic Republic
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Latvia'])); ?>" <?php if($dataId == 'Latvia'): ?> selected  <?php endif; ?> >Latvia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Lebanon'])); ?>" <?php if($dataId == 'Lebanon'): ?> selected  <?php endif; ?> >Lebanon</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Lesotho'])); ?>" <?php if($dataId == 'Lesotho'): ?> selected  <?php endif; ?> >Lesotho</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Liberia'])); ?>" <?php if($dataId == 'Liberia'): ?> selected  <?php endif; ?> >Liberia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Libyan Arab Jamahiriya'])); ?>" <?php if($dataId == 'Libyan Arab Jamahiriya'): ?> selected  <?php endif; ?> >
                                    Libyan Arab Jamahiriya
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Liechtenstein'])); ?>" <?php if($dataId == 'Liechtenstein'): ?> selected  <?php endif; ?> >Liechtenstein</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Lithuania'])); ?>" <?php if($dataId == 'Lithuania'): ?> selected  <?php endif; ?> >Lithuania</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Luxembourg'])); ?>" <?php if($dataId == 'Luxembourg'): ?> selected  <?php endif; ?> >Luxembourg</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Macao'])); ?>" <?php if($dataId == 'Macao'): ?> selected  <?php endif; ?> >Macao</a></li>
                            <li class="dropdown-item">
                                <a href="<?php echo e(route('country', ['id' => 'Macedonia, The Former Yugoslav Republic of'])); ?>" <?php if($dataId == 'Macedonia, The Former Yugoslav Republic of'): ?> selected  <?php endif; ?>>
                                    Macedonia, The Former Yugoslav Republic of
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Madagascar'])); ?>" <?php if($dataId == 'Madagascar'): ?> selected  <?php endif; ?> >Madagascar</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Malawi'])); ?>" <?php if($dataId == 'Malawi'): ?> selected  <?php endif; ?> >Malawi</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Malaysia'])); ?>" <?php if($dataId == 'Malaysia'): ?> selected  <?php endif; ?> >Malaysia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Maldives'])); ?>" <?php if($dataId == 'Maldives'): ?> selected  <?php endif; ?> >Maldives</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Mali'])); ?>" <?php if($dataId == 'Mali'): ?> selected  <?php endif; ?> >Mali</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Malta'])); ?>" <?php if($dataId == 'Malta'): ?> selected  <?php endif; ?> >Malta</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Marshall Islands'])); ?>" <?php if($dataId == 'Marshall Islands'): ?> selected  <?php endif; ?> >Marshall Islands</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Martinique'])); ?>" <?php if($dataId == 'Martinique'): ?> selected  <?php endif; ?> >Martinique</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Mauritania'])); ?>" <?php if($dataId == 'Mauritania'): ?> selected  <?php endif; ?> >Mauritania</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Mauritius'])); ?>" <?php if($dataId == 'Mauritius'): ?> selected  <?php endif; ?> >Mauritius</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Mayotte'])); ?>" <?php if($dataId == 'Mayotte'): ?> selected  <?php endif; ?> >Mayotte</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Mexico'])); ?>" <?php if($dataId == 'Mexico'): ?> selected  <?php endif; ?> >Mexico</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Micronesia, Federated States of'])); ?>" <?php if($dataId == 'Micronesia, Federated States of'): ?> selected  <?php endif; ?> >
                                    Micronesia, Federated States of
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Moldova, Republic of'])); ?>" <?php if($dataId == 'Moldova, Republic of'): ?> selected  <?php endif; ?> >
                                    Moldova, Republic of
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Monaco'])); ?>" <?php if($dataId == 'Monaco'): ?> selected  <?php endif; ?> >Monaco</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Mongolia'])); ?>" <?php if($dataId == 'Mongolia'): ?> selected  <?php endif; ?> >Mongolia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Montenegro'])); ?>" <?php if($dataId == 'Montenegro'): ?> selected  <?php endif; ?> >Montenegro</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Montserrat'])); ?>" <?php if($dataId == 'Montserrat'): ?> selected  <?php endif; ?> >Montserrat</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Morocco'])); ?>" <?php if($dataId == 'Morocco'): ?> selected  <?php endif; ?> >Morocco</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Mozambique'])); ?>" <?php if($dataId == 'Mozambique'): ?> selected  <?php endif; ?> >Mozambique</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Myanmar'])); ?>" <?php if($dataId == 'Myanmar'): ?> selected  <?php endif; ?> >Myanmar</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Namibia'])); ?>" <?php if($dataId == 'Namibia'): ?> selected  <?php endif; ?> >Namibia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Nauru'])); ?>" <?php if($dataId == 'Nauru'): ?> selected  <?php endif; ?> >Nauru</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Nepal'])); ?>" <?php if($dataId == 'Nepal'): ?> selected  <?php endif; ?> >Nepal</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Netherlands'])); ?>" <?php if($dataId == 'Netherlands'): ?> selected  <?php endif; ?> >Netherlands</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Netherlands Antilles'])); ?>" <?php if($dataId == 'Netherlands Antilles'): ?> selected  <?php endif; ?> >
                                    Netherlands Antilles
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'New Caledonia'])); ?>" <?php if($dataId == 'New Caledonia'): ?> selected  <?php endif; ?> >New Caledonia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'New Zealand'])); ?>" <?php if($dataId == 'New Zealand'): ?> selected  <?php endif; ?> >New Zealand</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Nicaragua'])); ?>" <?php if($dataId == 'Nicaragua'): ?> selected  <?php endif; ?> >Nicaragua</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Niger'])); ?>" <?php if($dataId == 'Niger'): ?> selected  <?php endif; ?> >Niger</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Nigeria'])); ?>" <?php if($dataId == 'Nigeria'): ?> selected  <?php endif; ?> >Nigeria</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Niue'])); ?>" <?php if($dataId == 'Niue'): ?> selected  <?php endif; ?> >Niue</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Norfolk Island'])); ?>" <?php if($dataId == 'Norfolk Island'): ?> selected  <?php endif; ?> >Norfolk Island</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Northern Mariana Islands'])); ?>" <?php if($dataId == 'Northern Mariana Islands'): ?> selected  <?php endif; ?> >
                                    Northern Mariana Islands
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Norway'])); ?>" <?php if($dataId == 'Norway'): ?> selected  <?php endif; ?> >Norway</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Oman'])); ?>" <?php if($dataId == 'Oman'): ?> selected  <?php endif; ?> >Oman</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Pakistan'])); ?>" <?php if($dataId == 'Pakistan'): ?> selected  <?php endif; ?> >Pakistan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Palau'])); ?>" <?php if($dataId == 'Palau'): ?> selected  <?php endif; ?> >Palau</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Palestinian Territory, Occupied'])); ?>" <?php if($dataId == 'Palestinian Territory, Occupied'): ?> selected  <?php endif; ?> >
                                    Palestinian Territory, Occupied
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Panama'])); ?>" <?php if($dataId == 'Panama'): ?> selected  <?php endif; ?> >Panama</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Papua New Guinea'])); ?>" <?php if($dataId == 'Papua New Guinea'): ?> selected  <?php endif; ?> >Papua New Guinea</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Paraguay'])); ?>" <?php if($dataId == 'Paraguay'): ?> selected  <?php endif; ?> >Paraguay</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Peru'])); ?>" <?php if($dataId == 'Peru'): ?> selected  <?php endif; ?> >Peru</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Philippines'])); ?>" <?php if($dataId == 'Philippines'): ?> selected  <?php endif; ?> >Philippines</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Pitcairn'])); ?>" <?php if($dataId == 'Pitcairn'): ?> selected  <?php endif; ?> >Pitcairn</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Poland'])); ?>" <?php if($dataId == 'Poland'): ?> selected  <?php endif; ?> >Poland</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Portugal'])); ?>" <?php if($dataId == 'Portugal'): ?> selected  <?php endif; ?> >Portugal</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Puerto Rico'])); ?>" <?php if($dataId == 'Puerto Rico'): ?> selected  <?php endif; ?> >Puerto Rico</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Qatar'])); ?>" <?php if($dataId == 'Qatar'): ?> selected  <?php endif; ?> >Qatar</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Reunion'])); ?>" <?php if($dataId == 'Reunion'): ?> selected  <?php endif; ?> >Reunion</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Romania'])); ?>" <?php if($dataId == 'Romania'): ?> selected  <?php endif; ?> >Romania</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Russian Federation'])); ?>" <?php if($dataId == 'Russian Federation'): ?> selected  <?php endif; ?> >
                                    Russian Federation
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Rwanda'])); ?>" <?php if($dataId == 'Rwanda'): ?> selected  <?php endif; ?> >Rwanda</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Saint Helena'])); ?>" <?php if($dataId == 'Saint Helena'): ?> selected  <?php endif; ?> >Saint Helena</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Saint Kitts and Nevis'])); ?>" <?php if($dataId == 'Saint Kitts and Nevis'): ?> selected  <?php endif; ?> >
                                    Saint Kitts and Nevis
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Saint Lucia'])); ?>" <?php if($dataId == 'Saint Lucia'): ?> selected  <?php endif; ?> >Saint Lucia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Saint Pierre and Miquelon'])); ?>" <?php if($dataId == 'Saint Pierre and Miquelon'): ?> selected  <?php endif; ?> >
                                    Saint Pierre and Miquelon
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Saint Vincent and The Grenadines'])); ?>" <?php if($dataId == 'Saint Vincent and The Grenadines'): ?> selected  <?php endif; ?> >
                                    Saint Vincent and The Grenadines
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Samoa'])); ?>" <?php if($dataId == 'Samoa'): ?> selected  <?php endif; ?> >Samoa</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'San Marino'])); ?>" <?php if($dataId == 'San Marino'): ?> selected  <?php endif; ?> >San Marino</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Sao Tome and Principe'])); ?>" <?php if($dataId == 'Sao Tome and Principe'): ?> selected  <?php endif; ?> >
                                    Sao Tome and Principe
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Saudi Arabia'])); ?>" <?php if($dataId == 'Saudi Arabia'): ?> selected  <?php endif; ?> >Saudi Arabia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Senegal'])); ?>" <?php if($dataId == 'Senegal'): ?> selected  <?php endif; ?> >Senegal</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Serbia'])); ?>" <?php if($dataId == 'Serbia'): ?> selected  <?php endif; ?> >Serbia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Seychelles'])); ?>" <?php if($dataId == 'Seychelles'): ?> selected  <?php endif; ?> >Seychelles</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Sierra Leone'])); ?>" <?php if($dataId == 'Sierra Leone'): ?> selected  <?php endif; ?> >Sierra Leone</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Singapore'])); ?>" <?php if($dataId == 'Singapore'): ?> selected  <?php endif; ?> >Singapore</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Slovakia'])); ?>" <?php if($dataId == 'Slovakia'): ?> selected  <?php endif; ?> >Slovakia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Slovenia'])); ?>" <?php if($dataId == 'Slovenia'): ?> selected  <?php endif; ?> >Slovenia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Solomon Islands'])); ?>" <?php if($dataId == 'Solomon Islands'): ?> selected  <?php endif; ?> >Solomon Islands</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Somalia'])); ?>" <?php if($dataId == 'Somalia'): ?> selected  <?php endif; ?> >Somalia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'South Africa'])); ?>" <?php if($dataId == 'South Africa'): ?> selected  <?php endif; ?> >South Africa</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'South Georgia and The South Sandwich Islands'])); ?>" <?php if($dataId == 'South Georgia and The South Sandwich Islands'): ?> selected  <?php endif; ?>
                                >
                                    South Georgia and The South Sandwich Islands
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Spain'])); ?>" <?php if($dataId == 'Spain'): ?> selected  <?php endif; ?> >Spain</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Sri Lanka'])); ?>" <?php if($dataId == 'Sri Lanka'): ?> selected  <?php endif; ?> >Sri Lanka</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Sudan'])); ?>" <?php if($dataId == 'Sudan'): ?> selected  <?php endif; ?> >Sudan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Suriname'])); ?>" <?php if($dataId == 'Suriname'): ?> selected  <?php endif; ?> >Suriname</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Svalbard and Jan Mayen'])); ?>" <?php if($dataId == 'Svalbard and Jan Mayen'): ?> selected  <?php endif; ?> >
                                    Svalbard and Jan Mayen
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Swaziland'])); ?>" <?php if($dataId == 'Swaziland'): ?> selected  <?php endif; ?> >Swaziland</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Sweden'])); ?>" <?php if($dataId == 'Sweden'): ?> selected  <?php endif; ?> >Sweden</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Switzerland'])); ?>" <?php if($dataId == 'Switzerland'): ?> selected  <?php endif; ?> >Switzerland</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Syrian Arab Republic'])); ?>" <?php if($dataId == 'Syrian Arab Republic'): ?> selected  <?php endif; ?> >
                                    Syrian Arab Republic
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Taiwan'])); ?>" <?php if($dataId == 'Taiwan'): ?> selected  <?php endif; ?> >Taiwan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Tajikistan'])); ?>" <?php if($dataId == 'Tajikistan'): ?> selected  <?php endif; ?> >Tajikistan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Tanzania, United Republic of'])); ?>" <?php if($dataId == 'Tanzania, United Republic of'): ?> selected  <?php endif; ?> >
                                    Tanzania, United Republic of
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Thailand'])); ?>" <?php if($dataId == 'Thailand'): ?> selected  <?php endif; ?> >Thailand</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Timor-leste'])); ?>" <?php if($dataId == 'Timor-leste'): ?> selected  <?php endif; ?> >Timor-leste</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Togo'])); ?>" <?php if($dataId == 'Togo'): ?> selected  <?php endif; ?> >Togo</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Tokelau'])); ?>" <?php if($dataId == 'Tokelau'): ?> selected  <?php endif; ?> >Tokelau</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Tonga'])); ?>" <?php if($dataId == 'Tonga'): ?> selected  <?php endif; ?> >Tonga</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Trinidad and Tobago'])); ?>" <?php if($dataId == 'Trinidad and Tobago'): ?> selected  <?php endif; ?> >
                                    Trinidad and Tobago
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Tunisia'])); ?>" <?php if($dataId == 'Tunisia'): ?> selected  <?php endif; ?> >Tunisia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Turkey'])); ?>" <?php if($dataId == 'Turkey'): ?> selected  <?php endif; ?> >Turkey</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Turkmenistan'])); ?>" <?php if($dataId == 'Turkmenistan'): ?> selected  <?php endif; ?> >Turkmenistan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Turks and Caicos Islands'])); ?>" <?php if($dataId == 'Turks and Caicos Islands'): ?> selected  <?php endif; ?> >
                                    Turks and Caicos Islands
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Tuvalu'])); ?>" <?php if($dataId == 'Tuvalu'): ?> selected  <?php endif; ?> >Tuvalu</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Uganda'])); ?>" <?php if($dataId == 'Uganda'): ?> selected  <?php endif; ?> >Uganda</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Ukraine'])); ?>" <?php if($dataId == 'Ukraine'): ?> selected  <?php endif; ?> >Ukraine</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'United Arab Emirates'])); ?>" <?php if($dataId == 'United Arab Emirates'): ?> selected  <?php endif; ?> >
                                    United Arab Emirates
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'United Kingdom'])); ?>" <?php if($dataId == 'United Kingdom'): ?> selected  <?php endif; ?> >United Kingdom</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'United States'])); ?>" <?php if($dataId == 'United States'): ?> selected  <?php endif; ?> >United States</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'United States Minor Outlying Islands'])); ?>" <?php if($dataId == 'United States Minor Outlying Islands'): ?> selected  <?php endif; ?> >
                                    United States Minor Outlying Islands
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Uruguay'])); ?>" <?php if($dataId == 'Uruguay'): ?> selected  <?php endif; ?> >Uruguay</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Uzbekistan'])); ?>" <?php if($dataId == 'Uzbekistan'): ?> selected  <?php endif; ?> >Uzbekistan</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Vanuatu'])); ?>" <?php if($dataId == 'Vanuatu'): ?> selected  <?php endif; ?> >Vanuatu</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Venezuela'])); ?>" <?php if($dataId == 'Venezuela'): ?> selected  <?php endif; ?> >Venezuela</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Viet Nam'])); ?>" <?php if($dataId == 'Viet Nam'): ?> selected  <?php endif; ?> >Viet Nam</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Virgin Islands, British'])); ?>" <?php if($dataId == 'Virgin Islands, British'): ?> selected  <?php endif; ?> >
                                    Virgin Islands, British
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Virgin Islands, U.S.'])); ?>" <?php if($dataId == 'Virgin Islands, U.S.'): ?> selected  <?php endif; ?> >
                                    Virgin Islands, U.S.
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Wallis and Futuna'])); ?>" <?php if($dataId == 'Wallis and Futuna'): ?> selected  <?php endif; ?> >
                                    Wallis and Futuna
                                </a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Western Sahara'])); ?>" <?php if($dataId == 'Western Sahara'): ?> selected  <?php endif; ?> >Western Sahara</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Yemen'])); ?>" <?php if($dataId == 'Yemen'): ?> selected  <?php endif; ?> >Yemen</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Zambia'])); ?>" <?php if($dataId == 'Zambia'): ?> selected  <?php endif; ?> >Zambia</a></li>
                            <li class="dropdown-item"><a href="<?php echo e(route('country', ['id' => 'Zimbabwe'])); ?>" <?php if($dataId == 'Zimbabwe'): ?> selected  <?php endif; ?> >Zimbabwe</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SEARCH BARS -->
    <!-- START SECTION PEOPLE CARDS -->
    <section class="section-people-cards mt-4 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card u-box-shadow-1 border-0 u-border-radius h-100 bg-light">
                        <div class="card-body p-5">
                            <h4 class="card-title">
                                <div class="d-flex align-items-center">
                                    <div class="circle-element circle-element--person">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <h1 class="sub-heading">People Search per Country</h1>
                                </div>

                                <select
                                    id="country"
                                    name="country"
                                    class="offset-md-2 col-md-4"
                                    onchange="window.location.href=this.options[this.selectedIndex].value;"
                                >
                                    <option value="<?php echo e(route('country', ['id' => 'Afghanistan'])); ?>" <?php if($dataId == 'Afghanistan'): ?> selected  <?php endif; ?> >Afghanistan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Åland Islands'])); ?>" <?php if($dataId == 'Åland Islands'): ?> selected  <?php endif; ?> >Åland Islands</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Albania'])); ?>" <?php if($dataId == 'Albania'): ?> selected  <?php endif; ?> >Albania</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Algeria'])); ?>" <?php if($dataId == 'Algeria'): ?> selected  <?php endif; ?> >Algeria</option>
                                    <option value="<?php echo e(route('country', ['id' => 'American Samoa'])); ?>" <?php if($dataId == 'American Samoa'): ?> selected  <?php endif; ?> >American Samoa</option>
                                    <option value=" <?php echo e(route('country', ['id' => 'Andorra'])); ?>" <?php if($dataId == 'Andorra'): ?> selected  <?php endif; ?> >Andorra</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Angola'])); ?>" <?php if($dataId == 'Angola'): ?> selected  <?php endif; ?> >Angola</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Anguilla'])); ?>" <?php if($dataId == 'Anguilla'): ?> selected  <?php endif; ?> >Anguilla</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Antarctica'])); ?>" <?php if($dataId == 'Antarctica'): ?> selected  <?php endif; ?> >Antarctica</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Antigua and Barbuda'])); ?>" <?php if($dataId == 'Antigua and Barbuda'): ?> selected  <?php endif; ?> >
                                        Antigua and Barbuda
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Argentina'])); ?>" <?php if($dataId == 'Argentina'): ?> selected  <?php endif; ?> >Argentina</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Armenia'])); ?>" <?php if($dataId == 'Armenia'): ?> selected  <?php endif; ?> >Armenia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Aruba'])); ?>" <?php if($dataId == 'Aruba'): ?> selected  <?php endif; ?> >Aruba</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Australia'])); ?>" <?php if($dataId == 'Australia'): ?> selected  <?php endif; ?> >Australia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Austria'])); ?>" <?php if($dataId == 'Austria'): ?> selected  <?php endif; ?> >Austria</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Azerbaijan'])); ?>" <?php if($dataId == 'Azerbaijan'): ?> selected  <?php endif; ?> >Azerbaijan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bahamas'])); ?>" <?php if($dataId == 'Bahamas'): ?> selected  <?php endif; ?> >Bahamas</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bahrain'])); ?>" <?php if($dataId == 'Bahrain'): ?> selected  <?php endif; ?> >Bahrain</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bangladesh'])); ?>" <?php if($dataId == 'Bangladesh'): ?> selected  <?php endif; ?> >Bangladesh</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Barbados'])); ?>" <?php if($dataId == 'Barbados'): ?> selected  <?php endif; ?> >Barbados</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Belarus'])); ?>" <?php if($dataId == 'Belarus'): ?> selected  <?php endif; ?> >Belarus</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Belgium'])); ?>" <?php if($dataId == 'Belgium'): ?> selected  <?php endif; ?> >Belgium</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Belize'])); ?>" <?php if($dataId == 'Belize'): ?> selected  <?php endif; ?> >Belize</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Benin'])); ?>" <?php if($dataId == 'Benin'): ?> selected  <?php endif; ?> >Benin</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bermuda'])); ?>" <?php if($dataId == 'Bermuda'): ?> selected  <?php endif; ?> >Bermuda</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bhutan'])); ?>" <?php if($dataId == 'Bhutan'): ?> selected  <?php endif; ?> >Bhutan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bolivia'])); ?>" <?php if($dataId == 'Bolivia'): ?> selected  <?php endif; ?> >Bolivia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bosnia and Herzegovina'])); ?>" <?php if($dataId == 'Bosnia and Herzegovina'): ?> selected  <?php endif; ?> >
                                        Bosnia and Herzegovina
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Botswana'])); ?>" <?php if($dataId == 'Botswana'): ?> selected  <?php endif; ?> >Botswana</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bouvet Island'])); ?>" <?php if($dataId == 'Bouvet Island'): ?> selected  <?php endif; ?> >Bouvet Island</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Brazil'])); ?>" <?php if($dataId == 'Brazil'): ?> selected  <?php endif; ?> >Brazil</option>
                                    <option value="<?php echo e(route('country', ['id' => 'British Indian Ocean Territory'])); ?>" <?php if($dataId == 'British Indian Ocean Territory'): ?> selected  <?php endif; ?> >
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Brunei Darussalam'])); ?>" <?php if($dataId == 'Brunei Darussalam'): ?> selected  <?php endif; ?> >
                                        Brunei Darussalam
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Bulgaria'])); ?>" <?php if($dataId == 'Bulgaria'): ?> selected  <?php endif; ?> >Bulgaria</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Burkina Faso'])); ?>" <?php if($dataId == 'Burkina Faso'): ?> selected  <?php endif; ?> >Burkina Faso</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Burundi'])); ?>" <?php if($dataId == 'Burundi'): ?> selected  <?php endif; ?> >Burundi</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cambodia'])); ?>" <?php if($dataId == 'Cambodia'): ?> selected  <?php endif; ?> >Cambodia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cameroon'])); ?>" <?php if($dataId == 'Cameroon'): ?> selected  <?php endif; ?> >Cameroon</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Canada'])); ?>" <?php if($dataId == 'Canada'): ?> selected  <?php endif; ?> >Canada</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cape Verde'])); ?>" <?php if($dataId == 'Cape Verde'): ?> selected  <?php endif; ?> >Cape Verde</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cayman Islands'])); ?>" <?php if($dataId == 'Cayman Islands'): ?> selected  <?php endif; ?> >Cayman Islands</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Central African Republic'])); ?>" <?php if($dataId == 'Central African Republic'): ?> selected  <?php endif; ?> >
                                        Central African Republic
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Chad'])); ?>" <?php if($dataId == 'Chad'): ?> selected  <?php endif; ?> >Chad</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Chile'])); ?>" <?php if($dataId == 'Chile'): ?> selected  <?php endif; ?> >Chile</option>
                                    <option value="<?php echo e(route('country', ['id' => 'China'])); ?>" <?php if($dataId == 'China'): ?> selected  <?php endif; ?> >China</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Christmas Island'])); ?>" <?php if($dataId == 'Christmas Island'): ?> selected  <?php endif; ?> >Christmas Island</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cocos (Keeling) Islands'])); ?>" <?php if($dataId == 'Cocos (Keeling) Islands'): ?> selected  <?php endif; ?> >
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Colombia'])); ?>" <?php if($dataId == 'Colombia'): ?> selected  <?php endif; ?> >Colombia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Comoros'])); ?>" <?php if($dataId == 'Comoros'): ?> selected  <?php endif; ?> >Comoros</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Congo'])); ?>" <?php if($dataId == 'Congo'): ?> selected  <?php endif; ?> >Congo</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Congo, The Democratic Republic of The'])); ?>" <?php if($dataId == 'Congo, The Democratic Republic of The'): ?> selected  <?php endif; ?> >
                                        Congo, The Democratic Republic of The
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cook Islands'])); ?>" <?php if($dataId == 'Cook Islands'): ?> selected  <?php endif; ?> >Cook Islands</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Costa Rica'])); ?>" <?php if($dataId == 'Costa Rica'): ?> selected  <?php endif; ?> >Costa Rica</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cote D ivoire'])); ?>" <?php if($dataId == 'Cote D ivoire'): ?> selected  <?php endif; ?> >Cote D'ivoire</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Croatia'])); ?>" <?php if($dataId == 'Croatia'): ?> selected  <?php endif; ?> >Croatia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cuba'])); ?>" <?php if($dataId == 'Cuba'): ?> selected  <?php endif; ?> >Cuba</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Cyprus'])); ?>" <?php if($dataId == 'Cyprus'): ?> selected  <?php endif; ?> >Cyprus</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Czech Republic'])); ?>" <?php if($dataId == 'Czech Republic'): ?> selected  <?php endif; ?> >Czech Republic</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Denmark'])); ?>" <?php if($dataId == 'Denmark'): ?> selected  <?php endif; ?> >Denmark</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Djibouti'])); ?>" <?php if($dataId == 'Djibouti'): ?> selected  <?php endif; ?> >Djibouti</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Dominica'])); ?>" <?php if($dataId == 'Dominica'): ?> selected  <?php endif; ?> >Dominica</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Dominican Republic'])); ?>" <?php if($dataId == 'Dominican Republic'): ?> selected  <?php endif; ?> >
                                        Dominican Republic
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Ecuador'])); ?>" <?php if($dataId == 'Ecuador'): ?> selected  <?php endif; ?> >Ecuador</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Egypt'])); ?>" <?php if($dataId == 'Egypt'): ?> selected  <?php endif; ?> >Egypt</option>
                                    <option value="<?php echo e(route('country', ['id' => 'El Salvador'])); ?>" <?php if($dataId == 'El Salvador'): ?> selected  <?php endif; ?> >El Salvador</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Equatorial Guinea'])); ?>" <?php if($dataId == 'Equatorial Guinea'): ?> selected  <?php endif; ?> >
                                        Equatorial Guinea
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Eritrea'])); ?>" <?php if($dataId == 'Eritrea'): ?> selected  <?php endif; ?> >Eritrea</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Estonia'])); ?>" <?php if($dataId == 'Estonia'): ?> selected  <?php endif; ?> >Estonia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Ethiopia'])); ?>" <?php if($dataId == 'Ethiopia'): ?> selected  <?php endif; ?> >Ethiopia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Falkland Islands (Malvinas)'])); ?>" <?php if($dataId == 'Falkland Islands (Malvinas)'): ?> selected  <?php endif; ?> >
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Faroe Islands'])); ?>" <?php if($dataId == 'Faroe Islands'): ?> selected  <?php endif; ?> >Faroe Islands</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Fiji'])); ?>" <?php if($dataId == 'Fiji'): ?> selected  <?php endif; ?> >Fiji</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Finland'])); ?>" <?php if($dataId == 'Finland'): ?> selected  <?php endif; ?> >Finland</option>
                                    <option value="<?php echo e(route('country', ['id' => 'France'])); ?>" <?php if($dataId == 'France'): ?> selected  <?php endif; ?> >France</option>
                                    <option value="<?php echo e(route('country', ['id' => 'French Guiana'])); ?>" <?php if($dataId == 'French Guiana'): ?> selected  <?php endif; ?> >French Guiana</option>
                                    <option value="<?php echo e(route('country', ['id' => 'French Polynesia'])); ?>" <?php if($dataId == 'French Polynesia'): ?> selected  <?php endif; ?> >French Polynesia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'French Southern Territories'])); ?>" <?php if($dataId == 'French Southern Territories'): ?> selected  <?php endif; ?> >
                                        French Southern Territories
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Gabon'])); ?>" <?php if($dataId == 'Gabon'): ?> selected  <?php endif; ?> >Gabon</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Gambia'])); ?>" <?php if($dataId == 'Gambia'): ?> selected  <?php endif; ?> >Gambia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Georgia'])); ?>" <?php if($dataId == 'Georgia'): ?> selected  <?php endif; ?> >Georgia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Germany'])); ?>" <?php if($dataId == 'Germany'): ?> selected  <?php endif; ?> >Germany</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Ghana'])); ?>" <?php if($dataId == 'Ghana'): ?> selected  <?php endif; ?> >Ghana</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Gibraltar'])); ?>" <?php if($dataId == 'Gibraltar'): ?> selected  <?php endif; ?> >Gibraltar</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Greece'])); ?>" <?php if($dataId == 'Greece'): ?> selected  <?php endif; ?> >Greece</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Greenland'])); ?>" <?php if($dataId == 'Greenland'): ?> selected  <?php endif; ?> >Greenland</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Grenada'])); ?>" <?php if($dataId == 'Grenada'): ?> selected  <?php endif; ?> >Grenada</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Guadeloupe'])); ?>" <?php if($dataId == 'Guadeloupe'): ?> selected  <?php endif; ?> >Guadeloupe</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Guam'])); ?>" <?php if($dataId == 'Guam'): ?> selected  <?php endif; ?> >Guam</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Guatemala'])); ?>" <?php if($dataId == 'Guatemala'): ?> selected  <?php endif; ?> >Guatemala</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Guernsey'])); ?>" <?php if($dataId == 'Guernsey'): ?> selected  <?php endif; ?> >Guernsey</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Guinea'])); ?>" <?php if($dataId == 'Guinea'): ?> selected  <?php endif; ?> >Guinea</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Guinea-bissau'])); ?>" <?php if($dataId == 'Guinea-bissau'): ?> selected  <?php endif; ?> >Guinea-bissau</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Guyana'])); ?>" <?php if($dataId == 'Guyana'): ?> selected  <?php endif; ?> >Guyana</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Haiti'])); ?>" <?php if($dataId == 'Haiti'): ?> selected  <?php endif; ?> >Haiti</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Heard Island and Mcdonald Islands'])); ?>" <?php if($dataId == 'Heard Island and Mcdonald Islands'): ?> selected  <?php endif; ?> >
                                        Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Holy See (Vatican City State)'])); ?>" <?php if($dataId == 'Holy See (Vatican City State)'): ?> selected  <?php endif; ?> >
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Honduras'])); ?>" <?php if($dataId == 'Honduras'): ?> selected  <?php endif; ?> >Honduras</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Hong Kong'])); ?>" <?php if($dataId == 'Hong Kong'): ?> selected  <?php endif; ?> >Hong Kong</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Hungary'])); ?>" <?php if($dataId == 'Hungary'): ?> selected  <?php endif; ?> >Hungary</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Iceland'])); ?>" <?php if($dataId == 'Iceland'): ?> selected  <?php endif; ?> >Iceland</option>
                                    <option value="<?php echo e(route('country', ['id' => 'India'])); ?>" <?php if($dataId == 'India'): ?> selected  <?php endif; ?> >India</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Indonesia'])); ?>" <?php if($dataId == 'Indonesia'): ?> selected  <?php endif; ?> >Indonesia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Iran, Islamic Republic of'])); ?>" <?php if($dataId == 'Iran, Islamic Republic of'): ?> selected  <?php endif; ?> >
                                        Iran, Islamic Republic of
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Iraq'])); ?>" <?php if($dataId == 'Iraq'): ?> selected  <?php endif; ?> >Iraq</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Ireland'])); ?>" <?php if($dataId == 'Ireland'): ?> selected  <?php endif; ?> >Ireland</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Isle of Man'])); ?>" <?php if($dataId == 'Isle of Man'): ?> selected  <?php endif; ?> >Isle of Man</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Israel'])); ?>" <?php if($dataId == 'Israel'): ?> selected  <?php endif; ?> >Israel</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Italy'])); ?>" <?php if($dataId == 'Italy'): ?> selected  <?php endif; ?> >Italy</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Jamaica'])); ?>" <?php if($dataId == 'Jamaica'): ?> selected  <?php endif; ?> >Jamaica</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Japan'])); ?>" <?php if($dataId == 'Japan'): ?> selected  <?php endif; ?> >Japan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Jersey'])); ?>" <?php if($dataId == 'Jersey'): ?> selected  <?php endif; ?> >Jersey</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Jordan'])); ?>" <?php if($dataId == 'Jordan'): ?> selected  <?php endif; ?> >Jordan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Kazakhstan'])); ?>" <?php if($dataId == 'Kazakhstan'): ?> selected  <?php endif; ?> >Kazakhstan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Kenya'])); ?>" <?php if($dataId == 'Kenya'): ?> selected  <?php endif; ?> >Kenya</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Kiribati'])); ?>" <?php if($dataId == 'Kiribati'): ?> selected  <?php endif; ?> >Kiribati</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Korea, Democratic Peoples Republic of'])); ?>" <?php if($dataId == 'Korea, Democratic Peoples Republic of'): ?> selected  <?php endif; ?> >
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Korea, Republic of'])); ?>" <?php if($dataId == 'Korea, Republic of'): ?> selected  <?php endif; ?> >
                                        Korea, Republic of
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Kuwait'])); ?>" <?php if($dataId == 'Kuwait'): ?> selected  <?php endif; ?> >Kuwait</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Kyrgyzstan'])); ?>" <?php if($dataId == 'Kyrgyzstan'): ?> selected  <?php endif; ?> >Kyrgyzstan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Lao Peoples Democratic Republic'])); ?>" <?php if($dataId == 'Lao Peoples Democratic Republic'): ?> selected  <?php endif; ?> >
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Latvia'])); ?>" <?php if($dataId == 'Latvia'): ?> selected  <?php endif; ?> >Latvia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Lebanon'])); ?>" <?php if($dataId == 'Lebanon'): ?> selected  <?php endif; ?> >Lebanon</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Lesotho'])); ?>" <?php if($dataId == 'Lesotho'): ?> selected  <?php endif; ?> >Lesotho</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Liberia'])); ?>" <?php if($dataId == 'Liberia'): ?> selected  <?php endif; ?> >Liberia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Libyan Arab Jamahiriya'])); ?>" <?php if($dataId == 'Libyan Arab Jamahiriya'): ?> selected  <?php endif; ?> >
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Liechtenstein'])); ?>" <?php if($dataId == 'Liechtenstein'): ?> selected  <?php endif; ?> >Liechtenstein</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Lithuania'])); ?>" <?php if($dataId == 'Lithuania'): ?> selected  <?php endif; ?> >Lithuania</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Luxembourg'])); ?>" <?php if($dataId == 'Luxembourg'): ?> selected  <?php endif; ?> >Luxembourg</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Macao'])); ?>" <?php if($dataId == 'Macao'): ?> selected  <?php endif; ?> >Macao</option>
                                    <option
                                        value="<?php echo e(route('country', ['id' => 'Macedonia, The Former Yugoslav Republic of'])); ?>" <?php if($dataId == 'Macedonia, The Former Yugoslav Republic of'): ?> selected  <?php endif; ?>
                                    >
                                        Macedonia, The Former Yugoslav Republic of
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Madagascar'])); ?>" <?php if($dataId == 'Madagascar'): ?> selected  <?php endif; ?> >Madagascar</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Malawi'])); ?>" <?php if($dataId == 'Malawi'): ?> selected  <?php endif; ?> >Malawi</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Malaysia'])); ?>" <?php if($dataId == 'Malaysia'): ?> selected  <?php endif; ?> >Malaysia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Maldives'])); ?>" <?php if($dataId == 'Maldives'): ?> selected  <?php endif; ?> >Maldives</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Mali'])); ?>" <?php if($dataId == 'Mali'): ?> selected  <?php endif; ?> >Mali</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Malta'])); ?>" <?php if($dataId == 'Malta'): ?> selected  <?php endif; ?> >Malta</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Marshall Islands'])); ?>" <?php if($dataId == 'Marshall Islands'): ?> selected  <?php endif; ?> >Marshall Islands</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Martinique'])); ?>" <?php if($dataId == 'Martinique'): ?> selected  <?php endif; ?> >Martinique</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Mauritania'])); ?>" <?php if($dataId == 'Mauritania'): ?> selected  <?php endif; ?> >Mauritania</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Mauritius'])); ?>" <?php if($dataId == 'Mauritius'): ?> selected  <?php endif; ?> >Mauritius</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Mayotte'])); ?>" <?php if($dataId == 'Mayotte'): ?> selected  <?php endif; ?> >Mayotte</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Mexico'])); ?>" <?php if($dataId == 'Mexico'): ?> selected  <?php endif; ?> >Mexico</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Micronesia, Federated States of'])); ?>" <?php if($dataId == 'Micronesia, Federated States of'): ?> selected  <?php endif; ?> >
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Moldova, Republic of'])); ?>" <?php if($dataId == 'Moldova, Republic of'): ?> selected  <?php endif; ?> >
                                        Moldova, Republic of
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Monaco'])); ?>" <?php if($dataId == 'Monaco'): ?> selected  <?php endif; ?> >Monaco</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Mongolia'])); ?>" <?php if($dataId == 'Mongolia'): ?> selected  <?php endif; ?> >Mongolia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Montenegro'])); ?>" <?php if($dataId == 'Montenegro'): ?> selected  <?php endif; ?> >Montenegro</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Montserrat'])); ?>" <?php if($dataId == 'Montserrat'): ?> selected  <?php endif; ?> >Montserrat</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Morocco'])); ?>" <?php if($dataId == 'Morocco'): ?> selected  <?php endif; ?> >Morocco</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Mozambique'])); ?>" <?php if($dataId == 'Mozambique'): ?> selected  <?php endif; ?> >Mozambique</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Myanmar'])); ?>" <?php if($dataId == 'Myanmar'): ?> selected  <?php endif; ?> >Myanmar</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Namibia'])); ?>" <?php if($dataId == 'Namibia'): ?> selected  <?php endif; ?> >Namibia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Nauru'])); ?>" <?php if($dataId == 'Nauru'): ?> selected  <?php endif; ?> >Nauru</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Nepal'])); ?>" <?php if($dataId == 'Nepal'): ?> selected  <?php endif; ?> >Nepal</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Netherlands'])); ?>" <?php if($dataId == 'Netherlands'): ?> selected  <?php endif; ?> >Netherlands</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Netherlands Antilles'])); ?>" <?php if($dataId == 'Netherlands Antilles'): ?> selected  <?php endif; ?> >
                                        Netherlands Antilles
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'New Caledonia'])); ?>" <?php if($dataId == 'New Caledonia'): ?> selected  <?php endif; ?> >New Caledonia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'New Zealand'])); ?>" <?php if($dataId == 'New Zealand'): ?> selected  <?php endif; ?> >New Zealand</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Nicaragua'])); ?>" <?php if($dataId == 'Nicaragua'): ?> selected  <?php endif; ?> >Nicaragua</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Niger'])); ?>" <?php if($dataId == 'Niger'): ?> selected  <?php endif; ?> >Niger</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Nigeria'])); ?>" <?php if($dataId == 'Nigeria'): ?> selected  <?php endif; ?> >Nigeria</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Niue'])); ?>" <?php if($dataId == 'Niue'): ?> selected  <?php endif; ?> >Niue</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Norfolk Island'])); ?>" <?php if($dataId == 'Norfolk Island'): ?> selected  <?php endif; ?> >Norfolk Island</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Northern Mariana Islands'])); ?>" <?php if($dataId == 'Northern Mariana Islands'): ?> selected  <?php endif; ?> >
                                        Northern Mariana Islands
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Norway'])); ?>" <?php if($dataId == 'Norway'): ?> selected  <?php endif; ?> >Norway</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Oman'])); ?>" <?php if($dataId == 'Oman'): ?> selected  <?php endif; ?> >Oman</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Pakistan'])); ?>" <?php if($dataId == 'Pakistan'): ?> selected  <?php endif; ?> >Pakistan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Palau'])); ?>" <?php if($dataId == 'Palau'): ?> selected  <?php endif; ?> >Palau</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Palestinian Territory, Occupied'])); ?>" <?php if($dataId == 'Palestinian Territory, Occupied'): ?> selected  <?php endif; ?> >
                                        Palestinian Territory, Occupied
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Panama'])); ?>" <?php if($dataId == 'Panama'): ?> selected  <?php endif; ?> >Panama</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Papua New Guinea'])); ?>" <?php if($dataId == 'Papua New Guinea'): ?> selected  <?php endif; ?> >Papua New Guinea</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Paraguay'])); ?>" <?php if($dataId == 'Paraguay'): ?> selected  <?php endif; ?> >Paraguay</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Peru'])); ?>" <?php if($dataId == 'Peru'): ?> selected  <?php endif; ?> >Peru</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Philippines'])); ?>" <?php if($dataId == 'Philippines'): ?> selected  <?php endif; ?> >Philippines</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Pitcairn'])); ?>" <?php if($dataId == 'Pitcairn'): ?> selected  <?php endif; ?> >Pitcairn</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Poland'])); ?>" <?php if($dataId == 'Poland'): ?> selected  <?php endif; ?> >Poland</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Portugal'])); ?>" <?php if($dataId == 'Portugal'): ?> selected  <?php endif; ?> >Portugal</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Puerto Rico'])); ?>" <?php if($dataId == 'Puerto Rico'): ?> selected  <?php endif; ?> >Puerto Rico</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Qatar'])); ?>" <?php if($dataId == 'Qatar'): ?> selected  <?php endif; ?> >Qatar</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Reunion'])); ?>" <?php if($dataId == 'Reunion'): ?> selected  <?php endif; ?> >Reunion</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Romania'])); ?>" <?php if($dataId == 'Romania'): ?> selected  <?php endif; ?> >Romania</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Russian Federation'])); ?>" <?php if($dataId == 'Russian Federation'): ?> selected  <?php endif; ?> >
                                        Russian Federation
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Rwanda'])); ?>" <?php if($dataId == 'Rwanda'): ?> selected  <?php endif; ?> >Rwanda</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Saint Helena'])); ?>" <?php if($dataId == 'Saint Helena'): ?> selected  <?php endif; ?> >Saint Helena</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Saint Kitts and Nevis'])); ?>" <?php if($dataId == 'Saint Kitts and Nevis'): ?> selected  <?php endif; ?> >
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Saint Lucia'])); ?>" <?php if($dataId == 'Saint Lucia'): ?> selected  <?php endif; ?> >Saint Lucia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Saint Pierre and Miquelon'])); ?>" <?php if($dataId == 'Saint Pierre and Miquelon'): ?> selected  <?php endif; ?> >
                                        Saint Pierre and Miquelon
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Saint Vincent and The Grenadines'])); ?>" <?php if($dataId == 'Saint Vincent and The Grenadines'): ?> selected  <?php endif; ?> >
                                        Saint Vincent and The Grenadines
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Samoa'])); ?>" <?php if($dataId == 'Samoa'): ?> selected  <?php endif; ?> >Samoa</option>
                                    <option value="<?php echo e(route('country', ['id' => 'San Marino'])); ?>" <?php if($dataId == 'San Marino'): ?> selected  <?php endif; ?> >San Marino</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Sao Tome and Principe'])); ?>" <?php if($dataId == 'Sao Tome and Principe'): ?> selected  <?php endif; ?> >
                                        Sao Tome and Principe
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Saudi Arabia'])); ?>" <?php if($dataId == 'Saudi Arabia'): ?> selected  <?php endif; ?> >Saudi Arabia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Senegal'])); ?>" <?php if($dataId == 'Senegal'): ?> selected  <?php endif; ?> >Senegal</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Serbia'])); ?>" <?php if($dataId == 'Serbia'): ?> selected  <?php endif; ?> >Serbia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Seychelles'])); ?>" <?php if($dataId == 'Seychelles'): ?> selected  <?php endif; ?> >Seychelles</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Sierra Leone'])); ?>" <?php if($dataId == 'Sierra Leone'): ?> selected  <?php endif; ?> >Sierra Leone</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Singapore'])); ?>" <?php if($dataId == 'Singapore'): ?> selected  <?php endif; ?> >Singapore</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Slovakia'])); ?>" <?php if($dataId == 'Slovakia'): ?> selected  <?php endif; ?> >Slovakia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Slovenia'])); ?>" <?php if($dataId == 'Slovenia'): ?> selected  <?php endif; ?> >Slovenia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Solomon Islands'])); ?>" <?php if($dataId == 'Solomon Islands'): ?> selected  <?php endif; ?> >Solomon Islands</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Somalia'])); ?>" <?php if($dataId == 'Somalia'): ?> selected  <?php endif; ?> >Somalia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'South Africa'])); ?>" <?php if($dataId == 'South Africa'): ?> selected  <?php endif; ?> >South Africa</option>
                                    <option
                                        value="<?php echo e(route('country', ['id' => 'South Georgia and The South Sandwich Islands'])); ?>" <?php if($dataId == 'South Georgia and The South Sandwich Islands'): ?> selected  <?php endif; ?>
                                    >
                                        South Georgia and The South Sandwich Islands
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Spain'])); ?>" <?php if($dataId == 'Spain'): ?> selected  <?php endif; ?> >Spain</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Sri Lanka'])); ?>" <?php if($dataId == 'Sri Lanka'): ?> selected  <?php endif; ?> >Sri Lanka</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Sudan'])); ?>" <?php if($dataId == 'Sudan'): ?> selected  <?php endif; ?> >Sudan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Suriname'])); ?>" <?php if($dataId == 'Suriname'): ?> selected  <?php endif; ?> >Suriname</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Svalbard and Jan Mayen'])); ?>" <?php if($dataId == 'Svalbard and Jan Mayen'): ?> selected  <?php endif; ?> >
                                        Svalbard and Jan Mayen
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Swaziland'])); ?>" <?php if($dataId == 'Swaziland'): ?> selected  <?php endif; ?> >Swaziland</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Sweden'])); ?>" <?php if($dataId == 'Sweden'): ?> selected  <?php endif; ?> >Sweden</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Switzerland'])); ?>" <?php if($dataId == 'Switzerland'): ?> selected  <?php endif; ?> >Switzerland</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Syrian Arab Republic'])); ?>" <?php if($dataId == 'Syrian Arab Republic'): ?> selected  <?php endif; ?> >
                                        Syrian Arab Republic
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Taiwan'])); ?>" <?php if($dataId == 'Taiwan'): ?> selected  <?php endif; ?> >Taiwan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Tajikistan'])); ?>" <?php if($dataId == 'Tajikistan'): ?> selected  <?php endif; ?> >Tajikistan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Tanzania, United Republic of'])); ?>" <?php if($dataId == 'Tanzania, United Republic of'): ?> selected  <?php endif; ?> >
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Thailand'])); ?>" <?php if($dataId == 'Thailand'): ?> selected  <?php endif; ?> >Thailand</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Timor-leste'])); ?>" <?php if($dataId == 'Timor-leste'): ?> selected  <?php endif; ?> >Timor-leste</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Togo'])); ?>" <?php if($dataId == 'Togo'): ?> selected  <?php endif; ?> >Togo</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Tokelau'])); ?>" <?php if($dataId == 'Tokelau'): ?> selected  <?php endif; ?> >Tokelau</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Tonga'])); ?>" <?php if($dataId == 'Tonga'): ?> selected  <?php endif; ?> >Tonga</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Trinidad and Tobago'])); ?>" <?php if($dataId == 'Trinidad and Tobago'): ?> selected  <?php endif; ?> >
                                        Trinidad and Tobago
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Tunisia'])); ?>" <?php if($dataId == 'Tunisia'): ?> selected  <?php endif; ?> >Tunisia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Turkey'])); ?>" <?php if($dataId == 'Turkey'): ?> selected  <?php endif; ?> >Turkey</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Turkmenistan'])); ?>" <?php if($dataId == 'Turkmenistan'): ?> selected  <?php endif; ?> >Turkmenistan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Turks and Caicos Islands'])); ?>" <?php if($dataId == 'Turks and Caicos Islands'): ?> selected  <?php endif; ?> >
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Tuvalu'])); ?>" <?php if($dataId == 'Tuvalu'): ?> selected  <?php endif; ?> >Tuvalu</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Uganda'])); ?>" <?php if($dataId == 'Uganda'): ?> selected  <?php endif; ?> >Uganda</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Ukraine'])); ?>" <?php if($dataId == 'Ukraine'): ?> selected  <?php endif; ?> >Ukraine</option>
                                    <option value="<?php echo e(route('country', ['id' => 'United Arab Emirates'])); ?>" <?php if($dataId == 'United Arab Emirates'): ?> selected  <?php endif; ?> >
                                        United Arab Emirates
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'United Kingdom'])); ?>" <?php if($dataId == 'United Kingdom'): ?> selected  <?php endif; ?> >United Kingdom</option>
                                    <option value="<?php echo e(route('country', ['id' => 'United States'])); ?>" <?php if($dataId == 'United States'): ?> selected  <?php endif; ?> >United States</option>
                                    <option value="<?php echo e(route('country', ['id' => 'United States Minor Outlying Islands'])); ?>" <?php if($dataId == 'United States Minor Outlying Islands'): ?> selected  <?php endif; ?> >
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Uruguay'])); ?>" <?php if($dataId == 'Uruguay'): ?> selected  <?php endif; ?> >Uruguay</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Uzbekistan'])); ?>" <?php if($dataId == 'Uzbekistan'): ?> selected  <?php endif; ?> >Uzbekistan</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Vanuatu'])); ?>" <?php if($dataId == 'Vanuatu'): ?> selected  <?php endif; ?> >Vanuatu</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Venezuela'])); ?>" <?php if($dataId == 'Venezuela'): ?> selected  <?php endif; ?> >Venezuela</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Viet Nam'])); ?>" <?php if($dataId == 'Viet Nam'): ?> selected  <?php endif; ?> >Viet Nam</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Virgin Islands, British'])); ?>" <?php if($dataId == 'Virgin Islands, British'): ?> selected  <?php endif; ?> >
                                        Virgin Islands, British
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Virgin Islands, U.S.'])); ?>" <?php if($dataId == 'Virgin Islands, U.S.'): ?> selected  <?php endif; ?> >
                                        Virgin Islands, U.S.
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Wallis and Futuna'])); ?>" <?php if($dataId == 'Wallis and Futuna'): ?> selected  <?php endif; ?> >
                                        Wallis and Futuna
                                    </option>
                                    <option value="<?php echo e(route('country', ['id' => 'Western Sahara'])); ?>" <?php if($dataId == 'Western Sahara'): ?> selected  <?php endif; ?> >Western Sahara</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Yemen'])); ?>" <?php if($dataId == 'Yemen'): ?> selected  <?php endif; ?> >Yemen</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Zambia'])); ?>" <?php if($dataId == 'Zambia'): ?> selected  <?php endif; ?> >Zambia</option>
                                    <option value="<?php echo e(route('country', ['id' => 'Zimbabwe'])); ?>" <?php if($dataId == 'Zimbabwe'): ?> selected  <?php endif; ?> >Zimbabwe</option>
                                </select>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-5">
                    <div class="card bg-transparent u-border-radius h-100">
                        <div class="card-body d-flex align-items-center p-5 mx-lg-5">
                            <div class="col-4 pe-lg-5 pe-4">
                                <img src="<?php echo e(asset('/')); ?>adminAsset/assets/images/data.svg" class="img-fluid" alt="illustration" />
                            </div>
                            <div class="col-md-8">
                                <h2 class="heading--sub mb-4">
                                    Reach your target contacts faster with Phone Number List
                                    </h1>
                                    <a href="<?php echo e(route('/phonelistUserRegister')); ?>" type="button" class="btn btn-grad px-4">
                                        Sign Up For Free
                                    </a>
                                </h2>
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
                            <h2 class="card-text no-data d-none">
                                No Person pages found for:
                                <span class="text-secondary">A</span>
                            </h2>
                            <p class="card-text">
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a href="<?php echo e(route('user', ['id' => $countryData->id])); ?>" class="user-link">
                                        <?php echo e($countryData->first_name." ".$countryData->last_name); ?>

                                    </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <h2 class="card-text no-data">
                                    No Person pages found for :
                                    <span class="text-secondary"> <?php echo e($dataId); ?></span>
                                </h2>
                                <?php endif; ?>
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
                                                <div class="d-flex justify-content-center">
                                                    <?php echo $data->links(); ?>

                                                </div>
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

<?php $__env->stopSection(); ?>


<script>
    function handleName(e){
        if(e.key === "Enter"){
            //alert("Enter was just pressed.");
        }

        return false;
    }
</script>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PhoneList\resources\views/front/country/country.blade.php ENDPATH**/ ?>
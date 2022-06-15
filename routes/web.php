<?php

use App\Http\Controllers\UserAuth\ForgotPasswordController;
use App\Http\Controllers\User\Searching\TypeaheadController;
use App\Http\Controllers\User\SocialController;
use App\Http\Controllers\Front\LidataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/add-lidata',[LidataController::class,'addLidata']);
Route::get('/admin-dashboard',[LidataController::class,'importForm']);
Route::post('/import',[LidataController::class,'import'])->name('employee.import');
                 // end update

                //  Start people page Show data & Delete  
Route::get('/lidata',[LidataController::class,'getLidata']);
Route::get('/delete_post/{id}',[LidataController::class,'deletePost']);
                //  End people page Show data & Delete 

                // Start Company Page
Route::get('lidata_company',[LidataController::class,'companyLidata']);
Route::get('/delete_lidata/{id}',[LidataController::class,'deletePost_company']);
                // end Company Page




            //Admin Dashboard
Route::get('/adminDashboard',[
    'uses' => 'App\Http\Controllers\AdminController@index',
    'as' => '/adminDashboard',
]);




                // home page


Route::get('/',[
        'uses' => 'App\Http\Controllers\Front\LidataController@index',
        'as' => '/',
        ]);




// route carrer

Route::get('/career',[
    'uses' => '\App\Http\Controllers\Front\LidataController@careers_us',
    'as'   => 'career',
    ]);

// route category

Route::get('/category-company/{id}',[
    'uses' => '\App\Http\Controllers\Front\LidataController@category_company',
    'as'   => 'category-company',
    ]);

Route::get('/category/{id}',[
    'uses' => '\App\Http\Controllers\Front\LidataController@category',
    'as'   => 'category',
    ]);

Route::get('/userSearch',[
    'uses' => '\App\Http\Controllers\Front\LidataController@userSearch',
    'as'   => 'userSearch',
    ]);

Route::get('/Company_Search',[
    'uses' => '\App\Http\Controllers\Front\LidataController@COmpany_Search',
    'as'   => 'Company_Search',
    ]);

Route::get('/user/{id}',[
    'uses' => '\App\Http\Controllers\Front\LidataController@user',
    'as'   => 'user',
    ]);

Route::get('/user-company/{id}',[
    'uses' => '\App\Http\Controllers\Front\LidataController@company_user',
    'as'   => 'user-company',
        ]);

Route::get('/autocomplete-search', [LidataController::class, 'autocompleteSearch']);
Route::get('/autocomplete-company-search', [LidataController::class, 'autocompletecompanySearch']);




    // route term of service

    Route::get('/terms-of-service',[
        'uses' => '\App\Http\Controllers\Front\LidataController@terms_of_service_us',
        'as'   => 'terms-of-service',
        ]);

    // route privecy police

Route::get('/privacy-policy',[
    'uses' => '\App\Http\Controllers\Front\LidataController@privacy_policy_us',
    'as'   => 'privacy-policy',
    ]);





// route product

Route::get('/product',[
    'uses' => '\App\Http\Controllers\Front\LidataController@product_us',
    'as'   => 'product',
    ]);

// route about
Route::get('/about',[
        'uses' => '\App\Http\Controllers\Front\LidataController@about_us',
        'as'   => 'about',
        ]);

// route contact

Route::get('/contact',[
    'uses' => '\App\Http\Controllers\Front\LidataController@contact_us',
    'as'   => 'contact',
    ]);

// route refound

Route::get('/refund',[
    'uses' => '\App\Http\Controllers\Front\LidataController@refund_us',
    'as'   => 'refund',
        ]);





Route::get('/user-register',[
    'uses' => 'App\Http\Controllers\User\UserController@userRegister',
    'as' => 'user.register',
]);
Route::post('/add-new-user',[
    'uses' => 'App\Http\Controllers\User\UserController@newUser',
    'as' => 'add.new.user',
]);
Route::get('/user-login',[
    'uses' => 'App\Http\Controllers\User\UserController@userLogin',
    'as' => 'user.login',
]);
Route::post('/user-login-auth',[
    'uses' => 'App\Http\Controllers\User\UserController@userAuth',
    'as' => 'user.login.auth',
]);
/** terms and services*/
// Route::get('/terms-of-service',[
//     'uses' => 'App\Http\Controllers\User\FooterController@termsAndServices',
//     'as' => 'termsAndServices',
// ]);
/** privacy policy*/
// Route::get('/privacy_policy',[
//     'uses' => 'App\Http\Controllers\User\FooterController@privacyPolicy',
//     'as' => 'privacyPolicy',
// ]);
/** refund policy*/
// Route::get('/refund',[
//     'uses' => 'App\Http\Controllers\User\FooterController@refund',
//     'as' => 'refund',
// ]);





/** Google OAuth routes */
Route::get('/auth/google',[
    'uses' => 'App\Http\Controllers\User\GoogleController@handleGoogleRedirect',
    'as' => '/auth/google',
]);
Route::get('user/google/callback',[
    'uses' => 'App\Http\Controllers\User\GoogleController@handleGoogleCallback',
    'as' => 'user/google/callback',
]);
Route::get('/loginWithGoogle{id}',[
    'uses' => 'App\Http\Controllers\User\GoogleController@handleGoogleCallbackRegister',
    'as' => '/loginWithGoogle',
]);

/** Email OAuth routes */
Route::post('/user/email/callback',[
    'uses' => 'App\Http\Controllers\User\EmailController@handleEmailCallback',
    'as' => '/user/email/callback',
]);


/** Facebook OAuth routes */
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

/** search routes */
// Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);

// Route::get('searchPeople{id}',[
//     'uses' => 'App\Http\Controllers\User\Searching\TypeaheadController@searchPeople',
//     'as'   => 'searchPeople',
// ]);

            //import-export Admin Dashboard


// Route::get('/welcome',[
//     'uses' => 'App\Http\Controllers\PublicController@index',
//     'as' => 'public.Dashboard',
// ]);
// Route::get('/file-import-export', [
//     'uses' => '\App\Http\Controllers\AdminController@fileImportExport',
//     'as' => 'file-import-export'
//     ]);
 Route::post('/file-import', [
     'uses' => '\App\Http\Controllers\AdminController@fileImport',
    'as' => 'file-import'
 ]);
Route::get('/file-export', [
    'uses' => '\App\Http\Controllers\AdminController@fileExport',
    'as' => 'file-export'
]);
Route::get('/customExport', [
    'uses' => '\App\Http\Controllers\AdminController@customExport',
    'as' => 'customExport'
]);

Route::get('/cumpanyExport', [
    'uses' => '\App\Http\Controllers\AdminController@cumpanyExport',
    'as' => 'cumpanyExport'
]);

Route::get('/selected-file-export{id}', [
    'uses' => '\App\Http\Controllers\AdminController@selectedfileExport',
    'as' => 'selected-file-export'
]);

// Route::get('/convert-to-json', function () {
//     return App\Models\PhoneList::paginate(5);
// });


            //view all phoneList data from admin dashboard
            //manage edit update delete


 Route::get('/view-all',[
     'uses' => '\App\Http\Controllers\AdminController@manageData',
     'as'   => 'view-all',
 ]);
// Route::get('/edit-data/{id}',[
//     'uses' => '\App\Http\Controllers\AdminController@editData',
//     'as'   => 'edit-data',
// ]);
//Route::get('/edit-data/{id}','\App\Http\Controllers\AdminController@editData');
// Route::post('/update-data',[
//     'uses' => '\App\Http\Controllers\AdminController@updateData',
//     'as'   => 'update-data',
// ]);
// Route::get('/delete-data/{id}',[
//     'uses' => '\App\Http\Controllers\AdminController@deleteData',
//     'as'   => 'delete-data',
// ]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');
// Route::get('admin/home', '\App\Http\Controllers\HomeController@handleAdmin')->name('admin.route')->middleware('admin');



/** reset password */
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


/** product page */
// Route::get('/product',[
//     'uses' => '\App\Http\Controllers\Product\ProductController@product',
//     'as'   => 'product',
// ]);
/** packages page */
Route::get('/pricing/packages',[
    'uses' => '\App\Http\Controllers\Packages\PackagesController@packages',
    'as'   => 'packages',
]);
/** careers page */
// Route::get('/careers',[
//     'uses' => '\App\Http\Controllers\Careers\CareersController@careers',
//     'as'   => 'careers',
// ]);
/** contact page */
// Route::get('/contact',[
//     'uses' => '\App\Http\Controllers\Contact\ContactController@contact',
//     'as'   => 'contact',
// ]);
/** about us page */
// Route::get('/aboutUS',[
//     'uses' => '\App\Http\Controllers\Contact\ContactController@aboutUS',
//     'as'   => 'about',
// ]);


/** user Dashboard */
Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){


    Route::get('loggedInUser',[
        'uses' => '\App\Http\Controllers\User\UserController@dashboard',
        'as'   => 'loggedInUser',
    ]);

    Route::get('people',[
        'uses' => '\App\Http\Controllers\User\UserController@people',
        'as'   => 'people',
    ]);


    //searching people


    Route::get('peopleSearch',[
        'uses' => '\App\Http\Controllers\User\UserController@peopleSearch',
        'as'   => 'peopleSearch',
    ]);
    Route::get('genderSearch',[
        'uses' => '\App\Http\Controllers\User\UserController@genderSearch',
        'as'   => 'genderSearch',
    ]);
    Route::get('relationshipSearch',[
        'uses' => '\App\Http\Controllers\User\UserController@relationshipSearch',
        'as'   => 'relationshipSearch',
    ]);
    Route::get('locationSearch',[
        'uses' => '\App\Http\Controllers\User\UserController@locationSearch',
        'as'   => 'locationSearch',
    ]);
    Route::get('hometownSearch',[
        'uses' => '\App\Http\Controllers\User\UserController@hometownSearch',
        'as'   => 'hometownSearch',
    ]);
    Route::get('countrySearch',[
        'uses' => '\App\Http\Controllers\User\UserController@countrySearch',
        'as'   => 'countrySearch',
    ]);
    Route::get('industrySearch',[
        'uses' => '\App\Http\Controllers\User\UserController@industrySearch',
        'as'   => 'industrySearch',
    ]);


//searching company

   Route::get('companySearch',[
    'uses' => '\App\Http\Controllers\User\UserController@companySearch',
    'as'   => 'companySearch',
   ]);
   Route::get('citySearch',[
    'uses' => '\App\Http\Controllers\User\UserController@citySearch',
    'as'   => 'citySearch',
    ]);

   Route::get('stateSearch',[
    'uses' => '\App\Http\Controllers\User\UserController@stateSearch',
    'as'   => 'stateSearch',
   ]);
   Route::get('country_companySearch',[
    'uses' => '\App\Http\Controllers\User\UserController@country_companySearch',
    'as'   => 'country_companySearch',
   ]);
  Route::get('industry_companySearch',[
    'uses' => '\App\Http\Controllers\User\UserController@industry_companySearch',
    'as'   => 'industry_companySearch',
  ]);



Route::get('/settings/account',[
    'uses' => '\App\Http\Controllers\User\UserController@account',
    'as'   => 'account',
]);
Route::get('/settings/plans',[
    'uses' => '\App\Http\Controllers\User\UserController@managePlan',
    'as'   => 'managePlan',
]);
Route::get('/settings/billing',[
    'uses' => '\App\Http\Controllers\User\UserController@billing',
    'as'   => 'billing',
]);
Route::get('/settings/billing/{id}',[
    'uses' => '\App\Http\Controllers\User\UserController@billingRequest',
    'as'   => 'billingRequest',
]);



    // start custom export and import in User Dashboarrd


    Route::get('/settings/imports&exports/exports',[
        'uses' => '\App\Http\Controllers\User\UserController@exports',
        'as'   => 'exports',
    ]);
    Route::get('/settings/imports&exports/csv-export-settings',[
        'uses' => '\App\Http\Controllers\User\UserController@csvExportSettings',
        'as'   => 'csv-export-settings',
    ]);
    Route::get('reDownloadFile/{file_name}', [
        'uses' => '\App\Http\Controllers\User\UserController@reDownloadFile',
        'as' => 'reDownloadFile'
    ]);

    Route::get('/settings/imports&exports/accounts',[
        'uses' => '\App\Http\Controllers\User\UserController@accounts',
        'as'   => 'accounts',
    ]);
    Route::get('/settings/imports&exports/contacts',[
        'uses' => '\App\Http\Controllers\User\UserController@contacts',
        'as'   => 'contacts',
    ]);
    Route::post('/contactimport',[LidataController::class,'contactimport'])->name('employee.contactimport');


    // end custom export in User Dashboard



    // start Update User Info
    Route::post('/settings/updateUserFirstName/{id}',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserFirstName',
        'as'   => 'updateUserFirstName',
    ]);
    Route::post('/settings/updateUserLastName/{id}',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserLastName',
        'as'   => 'updateUserLastName',
    ]);
    Route::post('/settings/updateUserTitle',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserTitle',
        'as'   => 'updateUserTitle',
    ]);
    Route::post('/settings/updateUserPhone/{id}',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserPhone',
        'as'   => 'updateUserPhone',
    ]);
    Route::post('/settings/updateUserAddress',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserAddress',
        'as'   => 'updateUserAddress',
    ]);
    Route::get('/settings/updateUserCountry/{id}',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserCountry',
        'as'   => 'updateUserCountry',
    ]);
    Route::post('/settings/updateUserEmail/{id}',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserEmail',
        'as'   => 'updateUserEmail',
    ]);

    Route::get('/settings/updateUserInfo/{array}',[
        'uses' => '\App\Http\Controllers\User\UserController@updateUserInfo',
        'as'   => 'updateUserInfo',
    ]);
    // end Update User Info


    Route::get('/settings/credits/current',[
        'uses' => '\App\Http\Controllers\User\UserController@current',
        'as'   => 'current',
    ]);
    Route::get('/settings/credits/history',[
        'uses' => '\App\Http\Controllers\User\UserController@history',
        'as'   => 'history',
    ]);


    Route::get('/settings/upgrade',[
        'uses' => '\App\Http\Controllers\User\UserController@upgradeUser',
        'as'   => 'upgrade',
    ]);


});
Route::post('/settings/updateUserPassword/{id}',[
    'uses' => '\App\Http\Controllers\User\UserController@updateUserPassword',
    'as'   => 'updateUserPassword',
]);

Route::get('userLogout',[
    'uses' => '\App\Http\Controllers\User\UserController@logout',
    'as'   => 'userLogout',
]);







    // route company

    Route::get('company',[
        'uses' => '\App\Http\Controllers\User\UserController@company',
        'as'   => 'company',
    ]);






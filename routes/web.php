<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\UserCheck;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//User Controller

//sending to 404
Route::get('/404', [UserController::class, 'not_found'])->name('not_found');

//User Signup
Route::get('/signup', [UserController::class, 'signupForm'])->name('UserSignupForm');
Route::post('/signup', [UserController::class, 'signup'])->name('UserSignup');

//User login
Route::get('/login', [UserController::class, 'loginForm'])->name('UserLoginForm');
Route::post('/login', [UserController::class, 'login'])->name('UserLogin');

//user logout
Route::get('/logout', [UserController::class, 'logout'])->name('UserLogout');

//User home
Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/hero', [UserController::class, 'userHome'])->name('userHome');


Route::get('/aboutus', [UserController::class, 'aboutus'])->name('aboutus');

Route::get('/services', [UserController::class, 'services'])->name('services');

Route::get('/contactus', [UserController::class, 'contactus'])->name('contactus');

Route::post('/sendemail/send', [EmailController::class, 'basic_email'])->name('basic_email');

Route::get('/service', [UserController::class, 'single_service'])->name('single_service');

Route::get('/blogs', [UserController::class, 'list_blogs'])->name('list_blogs');

Route::get('/blog', [UserController::class, 'single_blog'])->name('single_blog');

Route::get('/lodge-in-person', [UserController::class, 'lodge_in_person'])->name('lodge_in_persion');

Route::get('/online', [UserController::class, 'online'])->name('online');

Route::get('/tax-review', [UserController::class, 'tax_review'])->name('tax_review');
Route::get('/small-business', [UserController::class, 'small_business'])->name('small_business');
Route::get('/bas', [UserController::class, 'bas'])->name('bas');

Route::get('/company-accounting', [UserController::class, 'company_accounting'])->name('company_accounting');
Route::get('/bookkeeping', [UserController::class, 'bookkeeping'])->name('bookkeeping');
Route::get('/tax-return', [UserController::class, 'tax_return'])->name('tax_return');
Route::get('/business-services', [UserController::class, 'business_services'])->name('business_services');
Route::get('/financial-services', [UserController::class, 'financial_services'])->name('financial_services');
Route::get('/smsf', [UserController::class, 'smsf'])->name('smsf');
Route::get('/financial-planning', [UserController::class, 'financial_planning'])->name('financial_planning');



Route::get('/resources', [UserController::class, 'resources'])->name('resources');

Route::get('/tax-calculator', [UserController::class, 'tax_calculator'])->name('tax_calculator');
Route::get('/tax-checklist', [UserController::class, 'tax_checklist'])->name('tax_checklist');










//showing properties in various ways
Route::get('/property/category/{cate}', [UserController::class, 'show_category'])->name('show_category');
Route::get('/property/city/{city}', [UserController::class, 'show_city'])->name('show_city');
Route::get('/property/purpose/{purpose}', [UserController::class, 'show_purpose'])->name('show_purpose');
Route::get('/property', [UserController::class, 'show'])->name('show');

//property search and filter by ajax
Route::get('/property/ajaxFilter', [UserController::class, 'ajaxFilter'])->name('ajaxFilter');
Route::get('/property/{pro}', [UserController::class, 'show_pro'])->name('show_pro');
Route::post('/property/propSearch', [UserController::class, 'propSearch'])->name('propSearch');

//AboutUs Page
Route::get('/about', [UserController::class, 'show_about'])->name('show_about');
Route::get('/faq', [UserController::class, 'show_faq'])->name('show_faq');
Route::get('/terms', [UserController::class, 'show_terms'])->name('show_terms');

//checking user is loggged in
Route::middleware([UserCheck::class])->group(function () {
    //paths only for logged in users

    //User profile
    Route::get('/user/profile', [UserController::class, 'userprofile'])->name('UserProfile');
    Route::get('/user/profile/edit', [UserController::class, 'edituserprofile'])->name('editUserProfile');
    Route::post('/user/profile/edit', [UserController::class, 'editeduserprofile'])->name('editedUserProfile');
    Route::get('/user/profile/del_profile_img', [UserController::class, 'del_profile_img'])->name('del_profile_img');

    //Saving Property
    Route::get('user/save/property/{pro}/{id}', [UserController::class, 'save_pro'])->name('save_pro_ajax');
    //show saved Property
    Route::get('/user/saved', [UserController::class, 'show_saved_pro'])->name('show_saved_pro');

    //add_Review in Property
    Route::post('/user/review', [UserController::class, 'add_review'])->name('add_review');
    Route::get('/user/review/delete/{id?}', [UserController::class, 'del_review'])->name('del_review');

    //Change User Password
    Route::get('/user/chng-password', [UserController::class, 'user_chng_password'])->name('user_chng_password');
    Route::post('/user/chng-password', [UserController::class, 'user_save_password'])->name('user_save_password');
});

//User Section Ends Here

//AdminPanel starts here

//admin login
Route::get('/admin/login', [AdminController::class, 'loginPage'])->name('AdminLoginPage');
Route::post('/admin/login', [AdminController::class, 'login'])->name('AdminLogin');

//All Admin routes are here

//checking admin is logged
Route::middleware(AuthCheck::class)->group(function () {
    //paths only for logged in admins

    //Admin dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('AdminHome');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('AdminLogout');

    //Category
    Route::get('/admin/category', [AdminController::class, 'list_category'])->name('list_category');
    Route::get('/admin/category/add', [AdminController::class, 'add_category'])->name('add_category');
    Route::post('/admin/category/add', [AdminController::class, 'category_added'])->name('category_added');

    Route::get('/admin/category/{id}/del', [AdminController::class, 'del_category'])->name('del_category');
    Route::get('/admin/category/{id}/edit', [AdminController::class, 'edit_category'])->name('edit_category');
    Route::post('/admin/category/{id}/edit', [AdminController::class, 'category_edited'])->name('category_edited');
    //End Category

    //cities starts
    Route::get('/admin/cities', [AdminController::class, 'list_cities'])->name('list_cities');
    Route::get('/admin/cities/add', [AdminController::class, 'add_cities'])->name('add_cities');
    Route::post('/admin/cities/add', [AdminController::class, 'cities_added'])->name('cities_added');

    Route::get('/admin/cities/{id}/del', [AdminController::class, 'del_cities'])->name('del_cities');
    Route::get('/admin/cities/{id}/edit', [AdminController::class, 'edit_cities'])->name('edit_cities');
    Route::post('/admin/cities/{id}/edit', [AdminController::class, 'cities_edited'])->name('cities_edited');
    //cities ends

    //Facilities starts
    Route::get('/admin/facilities', [AdminController::class, 'list_facilities'])->name('list_facilities');
    Route::get('/admin/facilities/add', [AdminController::class, 'add_facilities'])->name('add_facilities');
    Route::post('/admin/facilities/add', [AdminController::class, 'facilities_added'])->name('facilities_added');

    Route::get('/admin/facilities/{id}/del', [AdminController::class, 'del_facilities'])->name('del_facilities');
    Route::get('/admin/facilities/{id}/edit', [AdminController::class, 'edit_facilities'])->name('edit_facilities');
    Route::post('/admin/facilities/{id}/edit', [AdminController::class, 'facilities_edited'])->name('facilities_edited');
    //Facilities ends

    //Property starts
    Route::get('/admin/properties', [AdminController::class, 'list_properties'])->name('list_properties');
    Route::get('/admin/properties/add', [AdminController::class, 'add_properties'])->name('add_properties');
    Route::post('/admin/properties/add', [AdminController::class, 'properties_added'])->name('properties_added');

    Route::get('/admin/properties/{id}/del', [AdminController::class, 'del_properties'])->name('del_properties');
    Route::get('/admin/properties/{id}/edit', [AdminController::class, 'edit_properties'])->name('edit_properties');
    Route::post('/admin/properties/{id}/edit', [AdminController::class, 'properties_edited'])->name('properties_edited');
    //Property ends

    //Gallary starts
    Route::get('/admin/gallary', [AdminController::class, 'list_gallary'])->name('list_gallary');
    Route::get('/admin/gallary/add', [AdminController::class, 'add_gallary'])->name('add_gallary');
    Route::post('/admin/gallary/add', [AdminController::class, 'gallary_added'])->name('gallary_added');

    Route::get('/admin/gallary/{id}/del', [AdminController::class, 'del_gallary'])->name('del_gallary');
    Route::get('/admin/gallary/{id}/edit', [AdminController::class, 'edit_gallary'])->name('edit_gallary');
    Route::post('/admin/gallary/{id}/edit', [AdminController::class, 'gallary_edited'])->name('gallary_edited');
    //Gallary ends


    //Services starts
    Route::get('/admin/service', [AdminController::class, 'list_service'])->name('list_service');
    Route::get('/admin/service/add', [AdminController::class, 'add_service'])->name('add_service');
    Route::post('/admin/service/add', [AdminController::class, 'service_added'])->name('service_added');

    Route::get('/admin/service/{id}/del', [AdminController::class, 'del_service'])->name('del_service');
    Route::get('/admin/service/{id}/edit', [AdminController::class, 'edit_service'])->name('edit_service');
    Route::post('/admin/service/{id}/edit', [AdminController::class, 'service_edited'])->name('service_edited');
    //Services ends

    //reviews starts
    Route::get('/admin/reviews', [AdminController::class, 'list_reviews'])->name('list_reviews');
    Route::get('/admin/properties/{id}/reviews', [AdminController::class, 'get_reviews'])->name('get_reviews');
    Route::get('/admin/reviews/del/{rid}', [AdminController::class, 'del_reviews'])->name('del_reviews');
    //reviews ends

    //Users starts
    Route::get('/admin/users', [AdminController::class, 'list_users'])->name('list_users');
    Route::get('/admin/users/{id}/del', [AdminController::class, 'del_users'])->name('del_users');
    Route::post('/admin/users/type', [AdminController::class, 'type_users'])->name('type_users');
    //Users Ends

    //Site Settings Starts
    Route::get('/admin/sitesettings', [SiteController::class, 'list_settings'])->name('list_settings');
    Route::post('/admin/sitesettings', [SiteController::class, 'save_settings'])->name('save_settings');
    Route::post('/admin/sitesettings/ajaxDelete', [SiteController::class, 'ajaxDelete'])->name('ajaxDelete');
    //Site Settings Ends

    //Site Settings Starts

    //CMS starts
    Route::get('/admin/cms', [SiteController::class, 'list_cms'])->name('list_cms');
    Route::post('/admin/cms', [SiteController::class, 'save_cms'])->name('save_cms');
    Route::post('/admin/cms/ajaxDelete', [SiteController::class, 'cmsajaxDelete'])->name('cmsajaxDelete');
    //CMS ends

    //Change Password Starts
    Route::get('/admin/chng-password', [AdminController::class, 'chng_password'])->name('chng_password');
    Route::post('/admin/chng-password', [AdminController::class, 'save_password'])->name('save_password');
    //Change Password Ends

    //Uploads

    Route::get('/admin/upload', [AdminController::class, 'showForm'])->name('showForm');
    Route::post('/admin/upload', [AdminController::class, 'upload'])->name('upload');





    //post

    Route::get('/admin/post', [AdminController::class, 'list_post'])->name('list_post');
    Route::get('/admin/post/add', [AdminController::class, 'add_post'])->name('add_post');
    Route::post('/admin/post/add', [AdminController::class, 'post_added'])->name('post_added');

    Route::get('/admin/post/{id}/del', [AdminController::class, 'del_post'])->name('del_post');
    Route::get('/admin/post/{id}/edit', [AdminController::class, 'edit_post'])->name('edit_post');
    Route::post('/admin/post/{id}/edit', [AdminController::class, 'post_edited'])->name('post_edited');



});

//if none of above route is used then sended to 404
Route::get('/{any}', [UserController::class, 'not_found'])->where('any', '.*');




//BLOG


// frontend pages
/*Route::get('/', 'PageController@index')->name('home');
Route::get('/admin/post', 'PageController@post')->name('post');
Route::get('/post/{post}', 'PageController@showPost')->name('post.view');
Route::get('/category/{category}', 'PageController@showCategory')->name('categories.view');*/

/*// admin pages
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::resource('post','PostController');
    Route::resource('categories','CategoryController')->except('show');
});*/

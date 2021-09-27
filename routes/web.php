<?php

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

Route::get('/', 'Website\MainController@homepage');
Route::get('/Web-login', 'Website\MainController@login');
Route::get('/Web-register', 'Website\MainController@register');
Route::post('/Register-submit', 'Website\MainController@register_submit');
Route::post('/Login-submit', 'Website\MainController@login_submit');
Route::get('/profie', 'Website\MainController@profile');
Route::get('/PagePost', 'Website\MainController@index');
Route::get('/viewpost/{id}', 'Website\MainController@view_post');
Route::get('/PagePost/{tab}', 'Website\MainController@getPostByTab');
Route::get('logout', 'QovexController@logout');
Route::get('/Student-register', 'Student\StudentController@register');
Route::get('/emailverify/{email}/{token}', 'Website\MainController@verify_email');
// Route::get('/Web-home', 'Website\MainController@homepage');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    echo "clear cache";
});


Route::middleware(['auth','User'])->group(function() {
    Route::get('UserDashboard', 'User\UserController@dashboard')->name('UserDashboard');
    Route::get('/My-profile', 'Website\MainController@profile');
    Route::get('/Edit-profile/{id}', 'Website\MainController@edit_profile');
    Route::post('Profile-submit', 'Website\MainController@submit_profile');
    Route::get('social-share', 'Website\SocialShareController@index');
    Route::post('post-submit', 'Website\MainController@post_submit');
    Route::post('user-like-post', 'Website\MainController@user_like_post');    
    Route::post('comment-submit', 'Website\MainController@comments_submit');
    Route::get('delete-post/{id}', 'Website\MainController@delete_post');
    Route::get('edit-post/{id}', 'Website\MainController@edit_post');
   
});


Auth::routes();
Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('admin', 'Admin\AdminController@admin_list')->name('Admin');
    Route::get('admin-list', 'Admin\AdminController@admin_list');
    Route::get('user-list', 'Admin\AdminController@user_list');
    Route::get('status-student/{id}/{status}', 'Admin\AdminController@status_student');

    // Route::get('/home', 'HomeController@index')->name('home'); 
    Route::get('view-category', 'Admin\AdminController@view_category');
    Route::get('add-category', 'Admin\AdminController@add_category');
    Route::post('submit-category', 'Admin\AdminController@submit_category');
    Route::get('edit-category/{id}', 'Admin\AdminController@edit_category');
    Route::get('delete-category/{id}', 'Admin\AdminController@delete_category');
    Route::get('update-category/{id}/{status}', 'Admin\AdminController@update_category_status');


    Route::get('view-tabs', 'Admin\AdminController@view_tabs');
    Route::get('add-tabs', 'Admin\AdminController@add_tabs');
    Route::post('submit-tabs', 'Admin\AdminController@submit_tabs');
    Route::get('edit-tabs/{id}', 'Admin\AdminController@edit_tabs');
    Route::get('delete-tabs/{id}', 'Admin\AdminController@delete_tabs');
    Route::get('update-tabs/{id}/{status}', 'Admin\AdminController@update_tab_status');

    Route::get('view-plans', 'Admin\AdminController@view_plans');
    Route::get('add-plans', 'Admin\AdminController@add_plans');
    Route::post('submit-plans', 'Admin\AdminController@submit_plans');
    Route::get('edit-plans/{id}', 'Admin\AdminController@edit_plans');
    Route::get('delete-plans/{id}', 'Admin\AdminController@delete_plans');
    Route::get('update-plans/{id}/{status}', 'Admin\AdminController@update_plan_status');


    Route::get('view-blogs', 'Admin\AdminController@view_blogs');
    Route::get('add-blogs', 'Admin\AdminController@add_blogs');
    Route::post('submit-blogs', 'Admin\AdminController@submit_blogs');
    Route::get('edit-blogs/{id}', 'Admin\AdminController@edit_blogs');
    Route::get('delete-blogs/{id}', 'Admin\AdminController@delete_blogs');
    Route::get('update-blogs/{id}/{status}', 'Admin\AdminController@update_tab_status');

    Route::get('view-banner', 'Admin\AdminController@view_banner');
    Route::get('add-banner', 'Admin\AdminController@add_banner');
    Route::post('submit-banner', 'Admin\AdminController@submit_banner');
    Route::get('edit-banner/{id}', 'Admin\AdminController@edit_banner');
    Route::get('delete-banner/{id}', 'Admin\AdminController@delete_banner');
    Route::get('update-banner/{id}/{status}', 'Admin\AdminController@update_tab_status');

    Route::get('view-main-section', 'Admin\PagesController@view_main_section');
    Route::get('add-main-section', 'Admin\PagesController@add_main_section');
    Route::post('submit-main-section', 'Admin\PagesController@submit_main_section');
    Route::get('edit-main-section/{id}', 'Admin\PagesController@edit_main_section');
    Route::get('delete-main-section/{id}', 'Admin\PagesController@delete_main_section');

    Route::get('view-sub-section', 'Admin\PagesController@view_sub_section');
    Route::get('add-sub-section', 'Admin\PagesController@add_sub_section');
    Route::post('submit-sub-section', 'Admin\PagesController@submit_sub_section');
    Route::get('edit-sub-section/{id}', 'Admin\PagesController@edit_sub_section');
    Route::get('delete-sub-section/{id}', 'Admin\PagesController@delete_sub_section');

    Route::get('view-home-what-is-section', 'Admin\PagesController@view_home_what_is_section');
    Route::get('add-home-what-is-section', 'Admin\PagesController@add_home_what_is_section');
    Route::post('submit-home-what-is-section', 'Admin\PagesController@submit_home_what_is_section');
    Route::get('edit-home-what-is-section/{id}', 'Admin\PagesController@edit_home_what_is_section');
    Route::get('delete-home-what-is-section/{id}', 'Admin\PagesController@delete_home_what_is_section');


    Route::get('view-footer-banner', 'Admin\PagesController@view_footer_banner');
    Route::get('add-footer-banner', 'Admin\PagesController@add_footer_banner');
    Route::post('submit-footer-banner', 'Admin\PagesController@submit_footer_banner');
    Route::get('edit-footer-banner/{id}', 'Admin\PagesController@edit_footer_banner');
    Route::get('delete-footer-banner/{id}', 'Admin\PagesController@delete_footer_banner');

    Route::get('view-footer-slider', 'Admin\PagesController@view_footer_slider');
    Route::get('add-footer-slider', 'Admin\PagesController@add_footer_slider');
    Route::post('submit-footer-slider', 'Admin\PagesController@submit_footer_slider');
    Route::get('edit-footer-slider/{id}', 'Admin\PagesController@edit_footer_slider');
    Route::get('delete-footer-slider/{id}', 'Admin\PagesController@delete_footer_slider');
});
Route::get('{any}', 'Website\MainController@homepage');



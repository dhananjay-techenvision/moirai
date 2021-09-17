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


Route::get('/Web-login', 'Website\MainController@login');
Route::get('/Web-register', 'Website\MainController@login');
Route::post('/Register-submit', 'Website\MainController@register_submit');
Route::post('/Login-submit', 'Website\MainController@login_submit');
Route::get('/profie', 'Website\MainController@profile');

Route::get('/', 'Website\MainController@index');
Route::get('logout', 'QovexController@logout');
/*   Student login Registration      */
// Route::get('/Student-login', 'Student\StudentController@index');
Route::get('/Student-register', 'Student\StudentController@register');

Route::middleware(['auth','User'])->group(function() {
    // Route::get('/', 'Student\StudentController@index');
    Route::get('UserDashboard', 'User\UserController@dashboard')->name('UserDashboard');
    Route::get('/Web-home', 'Website\MainController@homepage');
    Route::get('/My-profile', 'Website\MainController@profile');
    Route::get('/Edit-profile/{id}', 'Website\MainController@edit_profile');
    Route::post('Profile-submit', 'Website\MainController@submit_profile');
    Route::get('social-share', 'Website\SocialShareController@index');
   
});

Auth::routes();




// You can also use auth middleware to prevent unauthenticated users
Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/', 'Website\MainController@index');    
    

    
});

Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('admin', 'Admin\AdminController@admin_list')->name('Admin');
    Route::get('admin-list', 'Admin\AdminController@admin_list');
    Route::get('user-list', 'Admin\AdminController@user_list');
    Route::get('status-student/{id}/{status}', 'Admin\AdminController@status_student');

    Route::get('/home', 'HomeController@index')->name('home'); 

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


    Route::get('{any}', 'QovexController@index');
 
});



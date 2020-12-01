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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//backend
//profile
Route::get('profiles', 'PagesController@profile')->name('profiles');  
Route::post('store/profile', 'PagesController@storeprofile')->name('store.profile'); 
Route::get('delete/profile/{id}','PagesController@Deleteprofile');
Route::get('edit/profile/{id}','PagesController@Editprofile'); 
Route::post('update/profile/{id}','PagesController@Updateprofile');

// About
Route::get('add/about', 'PagesController@create')->name('add.about'); 
Route::post('store/about', 'PagesController@store')->name('store.about');
Route::get('about/all', 'PagesController@index')->name('all.about');
Route::get('delete/about/{id}','PagesController@Deleteabout');
Route::get('edit/about/{id}','PagesController@Editabout'); 
Route::post('update/about/{id}','PagesController@Updateabout');

// resume
Route::get('add/resume', 'PagesController@resume')->name('add.resume'); 
Route::post('store/resume', 'PagesController@storeresume')->name('store.resume');
Route::get('resume/all', 'PagesController@indexresume')->name('all.resume');
Route::get('delete/resume/{id}','PagesController@Deleteresume');
Route::get('edit/resume/{id}','PagesController@Editresume');
Route::post('update/resume/{id}','PagesController@Updateresume');


// post
Route::get('add/post', 'PostController@create')->name('add.post'); 
Route::post('store/post', 'PostController@store')->name('store.post');
Route::get('post/all', 'PostController@index')->name('all.post');
Route::get('delete/post/{id}','PostController@Deletepost');
Route::get('edit/post/{id}','PostController@Editpost');
Route::post('update/post/{id}','PostController@Updatepost');



// service
Route::get('add/service', 'ServiceController@create')->name('add.service'); 
Route::post('store/service', 'ServiceController@store')->name('store.service');
Route::get('service/all', 'ServiceController@index')->name('all.service');
Route::get('delete/service/{id}','ServiceController@Deleteservice');
Route::get('edit/service/{id}','ServiceController@Editservice');
Route::post('update/service/{id}','ServiceController@Updateservice');




// portfolio

Route::get('portfolio', 'PortfolioController@portfolio')->name('portfolio');  
Route::post('store/portfolio', 'PortfolioController@storeportfolio')->name('store.portfolio'); 
Route::get('delete/portfolio/{id}','PortfolioController@Deleteportfolio');
Route::get('edit/portfolio/{id}','PortfolioController@Editportfolio'); 
Route::post('update/portfolio/{id}','PortfolioController@Updateportfolio');




// skills

Route::get('skills', 'SkillsController@skills')->name('skills');  
Route::post('store/skills', 'SkillsController@storeskills')->name('store.skills'); 
Route::get('delete/skills/{id}','SkillsController@Deleteskills');
Route::get('edit/skills/{id}','SkillsController@Editskills'); 
Route::post('update/skills/{id}','SkillsController@Updateskills');

// settings

Route::get('settings', 'SettingController@settings')->name('settings'); 
Route::post('store/settings', 'SettingController@storesettings')->name('store.setting'); 
Route::get('delete/settings/{id}','SettingController@Deletesettings');
Route::get('edit/settings/{id}','SettingController@Editsettings'); 
Route::post('update/settings/{id}','SettingController@Updatesettings');




// contact   forntend
Route::post('store/contact', 'HomeController@storecontact')->name('store.contact'); 
Route::get('/blogpost', 'HomeController@blogpost')->name('blogpost');
Route::get('blogpost/bolg_details/{id}', 'HomeController@blogdetails');


//comment
// Route::post('store/comment', 'HomeController@storecomment')->name('store.comment'); 



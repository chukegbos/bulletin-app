<?php

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

Auth::routes();
Route::get('/', 'LiveController@index')->name('index');

Route::get('/about', 'LiveController@about')->name('about');
Route::get('/startup', 'LiveController@startup')->name('startuplink');
Route::get('/service', 'LiveController@service')->name('service');
Route::get('/program', 'LiveController@program')->name('program');
Route::get('/startups', 'LiveController@startups')->name('startups');
Route::get('/contact', 'LiveController@contact')->name('contact');
Route::get('/event', 'LiveController@event')->name('event');
Route::get('/events', 'LiveController@events')->name('events');
Route::get('/gallery', 'LiveController@gallery')->name('livegallery');

Route::get('/serviceview', 'LiveController@serviceview')->name('serviceview');
Route::get('/productview', 'LiveController@productview')->name('productview');
Route::get('/board', 'LiveController@board')->name('board');

Route::get('/media', 'LiveController@media')->name('media');
Route::get('/publications', 'LiveController@news')->name('news');
Route::get('/activity', 'LiveController@activity')->name('activity');



Route::get('/{slug}', 'LiveController@newsfeed')->name('newsfeed');

Route::prefix('admin')->group( function (){
	Route::get('/', 'HomeController@index')->name('admin.home');
	Route::get('/index', 'HomeController@index')->name('admin.home');

	//Service Begins
	Route::get('/addservice', 'HomeController@addservice')->name('addservice');
	Route::get('/service', 'HomeController@service')->name('service');
	Route::post('/service', 'HomeController@storeservice');
	Route::post('/editservice', 'HomeController@editservice');
	Route::put('/editservice', 'HomeController@editservice');
	Route::delete('/destroyservice/{id}', 'HomeController@destroyservice');
	Route::get('/manageservice', 'HomeController@product')->name('product');
	//Service Ends

	//product Starts
	Route::get('/startup', 'HomeController@startup')->name('startup');
	Route::post('/product', 'HomeController@storeproduct');
	Route::delete('/destroyproduct/{id}', 'HomeController@destroyproduct');
	Route::post('/editproduct', 'HomeController@editproduct');
	Route::put('/editproduct', 'HomeController@editproduct');
	//product Ends

	//Branch Begins
	Route::get('/branch', 'HomeController@branch')->name('branch');
	Route::post('/branch', 'HomeController@storebranch');
	Route::post('/editbranch', 'HomeController@editbranch');
	Route::put('/editbranch', 'HomeController@editbranch');
	Route::delete('/destroybranch/{id}', 'HomeController@destroybranch');
	//branch Ends
	

	Route::get('/addadmin', 'AdminController@addadmin')->name('admin');
	Route::post('/addadmin', 'AdminController@addadmins');
	Route::get('/alladmin', 'AdminController@alladmin');
	Route::delete('/alladmin/{id}', 'AdminController@destroyadmin');

	Route::get('/setting', 'AdminController@settings');
	Route::post('/setting', 'AdminController@storesettings');
	Route::post('/setting1/{id}', 'AdminController@updatesettings');
	Route::put('/setting1/{id}', 'AdminController@updatesettings');

	Route::get('/admin/logo/1', 'AdminController@logo');
	Route::post('/admin/logo/{id}', 'AdminController@logo1');
	Route::put('/admin/logo/{id}', 'AdminController@logo1');

	//slider Begins
	Route::get('/slider', 'HomeController@slider')->name('slider');
	Route::post('/slider', 'HomeController@storeslider');
	Route::post('/editslider', 'HomeController@editslider');
	Route::put('/editslider', 'HomeController@editslider');
	Route::delete('/destroyslider/{id}', 'HomeController@destroyslider');
	//slider Ends	

	//board Begins
	Route::get('/board', 'HomeController@board')->name('board');
	Route::post('/board', 'HomeController@storeboard');
	Route::post('/editboard', 'HomeController@editboard');
	Route::put('/editboard', 'HomeController@editboard');
	Route::delete('/destroyboard/{id}', 'HomeController@destroyboard');
	//board Ends

	//management Begins
	Route::get('/management', 'HomeController@management')->name('management');
	Route::post('/management', 'HomeController@storemanagement');
	Route::post('/editmanagement', 'HomeController@editmanagement');
	Route::put('/editmanagement', 'HomeController@editmanagement');
	Route::delete('/destroymanagement/{id}', 'HomeController@destroymanagement');
	//management Ends

	//category
	Route::get('/category', 'HomeController@category');
	Route::post('/category', 'HomeController@storecategory');
	Route::get('/editcategory/{id}', 'HomeController@editcategory');

	Route::post('/editcategory/{id}', 'HomeController@updatetcategory');
	Route::put('/editcategory/{id}', 'HomeController@updatecategory');
	Route::delete('/deletecategory/{id}', 'HomeController@destroycategory');
	Route::delete('/deletesubcategory/{id}', 'HomeController@destroysubcategory');
	//end of category

	//Tag
	Route::get('/tag', 'HomeController@tag');
	Route::post('/tag', 'HomeController@storetag');
	Route::delete('/deletetag/{id}', 'HomeController@destroytag');
	//end of Tag

	//Post
	Route::get('/newpost', 'HomeController@newpost')->name('newpost');
	Route::post('/newpost', 'HomeController@storepost');
	Route::get('/allpost', 'HomeController@allpost');
	Route::get('/editpost', 'HomeController@geteditpost');
	Route::post('/editpost/{id}', 'HomeController@editpost');
	Route::put('/editpost/{id}', 'HomeController@editpost');
	Route::delete('/deletepost/{id}', 'HomeController@destroypost');
	//end of Post

	//Post
	Route::get('/newevent', 'HomeController@newevent')->name('newevent');
	Route::post('/newevent', 'HomeController@storeevent');
	Route::get('/allevent', 'HomeController@allevent');
	Route::get('/editevent', 'HomeController@geteditevent');
	Route::post('/editevent/{id}', 'HomeController@editevent');
	Route::put('/editevent/{id}', 'HomeController@editevent');

	Route::delete('/deleteevent/{id}', 'HomeController@destroyevent');
	Route::get('/gallery', 'HomeController@gallery')->name('gallery');
	Route::post('/gallery', 'HomeController@storegallery')->name('addgallery');
	Route::delete('/destroygallery/{id}', 'HomeController@destroygallery');

	Route::get('/admin', 'HomeController@addadmin')->name('admin');

	Route::post('/addadmin', 'HomeController@addadmins');
	Route::delete('/destroyagent/{id}', 'HomeController@destroyadmin');

	Route::get('/setting', 'HomeController@settings')->name('settings');
	Route::post('/setting', 'HomeController@updatesettings');

	Route::get('/logo', 'HomeController@logo');
	Route::post('/logo', 'HomeController@logo1');
	Route::put('/logo', 'HomeController@logo1');
	//end of Post
});
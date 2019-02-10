<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::group(['prefix' => 'backend'],function(){
        // Route::get('/','LoginController@getLogin');
        // Route::post('/','LoginController@postLogin');
        // Route::get('logout','LoginController@getLogout');
        // Route::get('home','HomeBackendController@getHome');
        // //api slide
        // Route::get('listslide','SlideController@index');
        // Route::get('addslide','SlideController@create')->name('addsli');
        //  // Route::group(['prefix'=>'category'],function(){

        //  // });
        //  // api  category
        // Route::get('listcategory','CategoryController@index');
        // Route::get('addcategory','CategoryController@create')->name('addcate');

        // // api post
        // Route::get('listpost','PostController@index');
        // Route::get('addpost','PostController@create')->name('addpost');

        //api user
         // Route::get('listuser','');
    });
    // Route::get('master','homeController@getMaster');
    // Route::get('photo', 'homeController@getIndex');
    // Route::get('detail/{id}', 'homeController@getDetail');






// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//
//
Route::get('/','categoryVue@home');
Route::resource('category','categoryVue');

Route::resource('/slide','SlideVueController');

Route::resource('/post','postVue');

Route::get('/admin', 'ProfileController@index')->name('profile');
Route::get('/admin/{any}', 'ProfileController@index')->where('any', '.*');


Route::get('/admin',function(){
        return view('admin.index');
})->name('admin.index');

Route::resource('role','RoleController');


// Route::get('database','homeController@getDatabase');
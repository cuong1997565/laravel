<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::get('listslide','SlideController@index');
 Route::post('addslide','SlideController@store')->name('post.addslide');
 Route::get('editslide/{id}','SlideController@show')->name('post.edit');
 Route::post('editslide/{id}','SlideController@update')->name('post.update');
 Route::get('delete/{id}','SlideController@destroy')->name('post.delete');

//category
 Route::get('listcategory','CategoryController@index');
 Route::post('addcategory','CategoryController@store')->name('addcategory');
 Route::get('editcategory/{id}','CategoryController@show')->name('idcategory');
 Route::post('editcategory/{id}','CategoryController@update')->name('updatecategory');
 Route::get('deletecategory/{id}','CategoryController@destroy')->name('deletecate');

 ///post
 Route::resource('listpost','PostController');
 Route::post('addpost','PostController@store')->name('addpostapi');
 Route::get('editpost/{id}','PostController@show')->name('findpost');
 Route::post('editpost/{id}','PostController@update')->name('updatepost');
Route::get('deletepost/{id}','PostController@destroy')->name('delete');
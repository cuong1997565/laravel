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
 Route::put('editslide/{id}','SlideController@update')->name('post.update');
 Route::delete('deleteslide/{id}','SlideController@destroy')->name('post.delete');

//category
 Route::get('listcategory','CategoryController@index');
 Route::post('addcategory','CategoryController@store')->name('addcate');
 Route::get('editcategory/{id}','CategoryController@show')->name('idcategory');
 Route::put('editcategory/{id}','CategoryController@update')->name('updatecategory');
 Route::delete('deletecategory/{id}','CategoryController@destroy')->name('deletecate');

 ///post
 Route::resource('listpost','PostController');
 Route::post('addpost','PostController@store')->name('addpostapi');
 Route::get('editpost/{id}','PostController@show')->name('findpost');
 Route::put('editpost/{id}','PostController@update')->name('updatepost');
Route::delete('deletepost/{id}','PostController@destroy')->name('delete');
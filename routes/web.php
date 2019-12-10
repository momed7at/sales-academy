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

use App\Script;
Auth::routes();
Route::group(['middleware'=>'auth:web'],function(){


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

// Categories Pages
// show categories

Route::get('/categories','Ac_categoryController@index')->name('category');
Route::get('/categories/create','Ac_categoryController@create')->name('category.create');
Route::post('/categories','Ac_categoryController@store')->name('category.store');
//Users
Route::get('/users','UserController@index')->name('users.index');
Route::get('/users/{id}/edit','UserController@edit')->name('users.edit');
Route::post('/users/{id}/update','UserController@update')->name('users.update');



Route::get('/videos', 'VideosController@index')->name('videos.index');
// Videos
// posts create route
Route::get('/videos/create','VideosController@create')->name('videos.create');
Route::post('/videos','VideosController@store')->name('videos.store');

Route::get('/videos/{id}','VideosController@show')->name('videos.show');

// Dounload script
Route::get('/download/{id}','VideosController@download')->name('download.script');

Route::get('videos/save/{id}',[
    'as' => 'script.download', 'uses' => 'BookController@downloadImage']);
Route::resource('books','BookController');
});

// Route::get('/videos/{id}','ScriptController@show')->name('downloadfile');
// Route::get('/videos/show','ScriptController@show')->name('downloadfile');

// Route::get('/videos/show',' VideosController@show')->name('videos.show');
// Route::get('/videos/show',' VideosController@show')->name('videos.show');

// Route::get('/download', function($id){
//     $filehashname = Script::find($id);
//     $file=public_path()."/storage/scripts/".$filehashname;
//     $headers = array(
//         'Content-Type: application/pdf',
//     );
//     return response()->download($file, "Script-file.pdf",$headers);
// });

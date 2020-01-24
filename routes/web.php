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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/register', function () {
    return redirect('/login');
});

Route::get('/password/reset', function () {
    return redirect('/login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/data', function () {
    return redirect('/home');
});
Route::get('/data/{cat_id}','DataController@showResort');
Route::get('/data/{cat_id}/{res_id}','DataController@showDetail');

Route::group(['middleware' => ['is_admin']], function () {
    Route::get('/users','UserController@index')->name('admin.user');
    Route::post('/users','UserController@add')->name('admin.user.add');

    Route::get('/category','HomeController@category')->name('admin.category');
    Route::post('/category','HomeController@addCategory')->name('admin.category.add');
    Route::post('/category/del/{id}','HomeController@deleteCategory')->name('admin.category.delete');

    Route::get('/resort','HomeController@sector')->name('admin.sector');
    Route::post('/resort','HomeController@addSector')->name('admin.sector.add');
    Route::post('/resort/del/{id}','HomeController@deleteSector')->name('admin.sector.delete');


});


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

Route::group(["prefix"=> "admin"],function (){
    Route::group(["prefix"=> "sukien"],function (){
       // admin/sukien/danhsach
        Route::get('/danhsach', 'SukienController@Danhsach');

        Route::get('/xoa/{id}',"SukienController@Xoa");
        Route::get('/sua/{id}', 'SukienController@getSua');
        Route::post('/sua/{id}',"SukienController@postSua");

        Route::get('/them', 'SukienController@Them');
        Route::post('/them',"SukienController@Luusukien");


    });
    Route::group(["prefix"=> "chiendich"],function (){
           // admin/chiendich/danhsach
            Route::get('/danhsach', 'ChiendichController@Danhsach');

            Route::get('/sua', 'ChiendichController@Sua');

            Route::get('/them', 'ChiendichController@Them');
            Route::post('/them', 'ChiendichController@Luuchiendich');



        });

    Route::get('/index', 'SukienController@index')->name('index');

    // phân trang
    Route::get('/sukien','PhantrangController@getSukien');

    Route::get('/chiendich','PhantrangController@getChiendich');






});

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('master');
});
Route::get('/barang', 'BarangController@index');
// Route::get('/barang', function () {

// 	$data=
// 	[
     
//     	'id' => 'oke sip',
//     	'nama' => 'Dimas Alamsyah' 
     
//     ];

//     $namaaja="aaa";

//     //return view::make('templates/master/barang',$data);
//     return view('templates/master/barang', compact('namaaja'));
// });

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


/////Admin Untuk Memilih Web Antrian////
Route::get('/', function () {
    return view('welcome');
});

////// Monitor Melihat Daftar Antrian//////
Route::get('/monitor', function () {
    return view('monitor1');
});


/////Admin Call SPKT/////
Route::get('/skck', 'CallController@skck');
Route::get('/next/skck', 'PageController@nextskck');
Route::get('/recall/skck', 'PageController@recallskck');

Route::get('/sktlk', 'CallController@sktlk');
Route::get('/next/sktlk', 'PageController@nextsktlk');
Route::get('/recall/sktlk', 'PageController@recallsktlk');


Route::get('/lp', 'CallController@lp');
Route::get('/next/lp', 'PageController@nextlp');
Route::get('/recall/lp', 'PageController@recalllp');

Route::get('/sp2hp', 'CallController@sp2hp');
Route::get('/next/sp2hp', 'PageController@nextsp2hp');
Route::get('/recall/sp2hp', 'PageController@recallsp2hp');

Route::get('/sttp', 'CallController@sttp');
Route::get('/next/sttp', 'PageController@nextsttp');
Route::get('/recall/sttp', 'PageController@recallsttp');


Route::get('/sttlp', 'CallController@sttlp');
Route::get('/next/sttlp', 'PageController@nextsttlp');
Route::get('/recall/sttlp', 'PageController@recallsttlp');


Route::get('/skld', 'CallController@skld');
Route::get('/next/skld', 'PageController@nextskld');
Route::get('/recall/skld', 'PageController@recallskld');

///// Next ///////


///////load nomor antrian di monitor with JSON/AJAX//////////
Route::get('/monitor/layar', 'PageController@loadnoantrian');



// Route::delete('/call/done/{id}', ['uses'=>'CallController@destroy', 'as'=>'done-delete']);

///// Tampilan Antrian Untuk Cetak SPKT ///////
Route::get('/antrian','CallController@next');


Route::get('/call/show', 'CallController@monitor');


Route::get('/antrian', 'PageController@index');

Route::post('/store', 'PageController@store');
Route::post('/print', 'PageController@print');


Auth::routes();
// Route::post('/store', 'AntrianController@print');
// Route::get('/print', 'AntrianController@index');

// Route::get('/cetak', 'CetakController@index');


///////////Untuk Login Admin Mengganti Video Monitor Antrian/////
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){



    Route::get('/video', 'VideoController@upload');
    Route::post('/video/proses', 'VideoController@proses_upload');




});

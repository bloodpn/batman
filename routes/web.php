<?php

Route::get('/', 'HomeController@index');

Route::get('/login', 'LoginController@index');

Route::get('/about', 'AboutController@index');

Route::get('/cektiket', 'ChecktiketController@index');

Route::get('/carijadwal', 'ReservasiController@index');

Route::get('/pilihjadwal', 'PilihjadwalController@index');

Route::get('/datapenumpang', 'DatapenumpangController@index');

Route::get('/pilihkursi', 'PilihkursiController@index');

Route::get('/metodepembayaran', 'PilihpembayaranController@index');

Route::get('/invoice', 'InvoiceController@index');

Route::get('/reservasi', 'ReservasiController@index');

Route::get('/mastercustomer', 'MastercustomerController@index');

Route::get('/masterkendaraan', 'MasterkendaraanController@index');

Route::get('/masterseat', 'MasterseatController@index');

Route::get('/masterjadwal', 'ScheduleController@index');
Route::post('/createjadwal', 'ScheduleController@insert');

Route::get('/mastersupir', 'MastersupirController@index');

Route::get('/paket', 'Paketcontroller@index');

Route::get('/datapaket', 'DatapaketController@index');

Route::get('/ubahjadwal', 'UbahjadwalController@index');

Route::get('/ubahkursi', 'UbahkursiController@index');

Route::get('/checkinpaket', 'CheckinpaketController@index');

Route::get('/cso', 'CsoController@index');
Route::get('/searchDestination', 'CsoController@search');

Route::get('/mastercabang', 'MastercabangController@index');

Route::get('/masterjurusan', 'MasterjurusanController@index');

Route::get('/masteruser', 'MasteruserController@index');

Route::get('/masterarea', 'MasterareaController@index');

Route::get('/masterkomputer', 'MasterkomputerController@index');

Route::get('/masterasuransi', 'MasterasuransiController@index');

Route::get('/mastercabang/edit/{id}', 'MastercabangController@edit');

Route::get('/mastersupir/edit/{id}', 'MastersupirController@edit');

Route::get('/masterseat/edit/{id}', 'MasterseatController@edit');

Route::get('/masterkendaraan/edit/{id}', 'MasterkendaraanController@edit');

Route::get('/masterarea/edit/{id}', 'MasterareaController@edit');

/* post */
Route::post('/mastersupir', 'MastersupirController@store');

Route::post('/mastercabang', 'MastercabangController@store');

Route::post('/masterkendaraan', 'MasterkendaraanController@store');

Route::post('/masterseat', 'MasterseatController@store');

Route::post('/masterarea', 'MasterareaController@store');

/* Put */
Route::put('/editmastercabang/{id}', 'MastercabangController@update');

Route::put('/editmastersupir/{id}', 'MastersupirController@update');

Route::put('/editmasterseat/{id}', 'MasterseatController@update');

Route::put('/editmasterkendaraan/{id}', 'MasterkendaraanController@update');

Route::put('/editmasterarea/{id}', 'MasterareaController@update');
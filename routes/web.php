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

Route::get('/masterjadwal', 'MasterjadwalController@index');

Route::get('/mastersupir', 'MastersupirController@index');

Route::get('/paket', 'Paketcontroller@index');

Route::get('/datapaket', 'DatapaketController@index');

Route::get('/ubahjadwal', 'UbahjadwalController@index');

Route::get('/ubahkursi', 'UbahkursiController@index');

Route::get('/checkinpaket', 'CheckinpaketController@index');

Route::get('/cso', 'CsoController@index');

Route::get('/mastercabang', 'MastercabangController@index');

Route::get('/masterjurusan', 'MasterjurusanController@index');
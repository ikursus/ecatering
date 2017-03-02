<?php

// Halaman untuk authentication
Auth::routes();
// Halaman ahli (selepas login)
Route::get('/home', 'HomeController@index');
// Halaman utama aplikasi
Route::get('/', 'PagesController@homepage');
// Halaman contact us
Route::get('contact-us', 'PagesController@showContactForm');
Route::post('contact-us', 'PagesController@postContactForm');
Route::get('pakej', 'PagesController@senaraiPakej');
// Paparkan senarai users bagi alamat web http://localhost/catering/public/senarai-users
Route::get('senarai-users', 'UsersController@index');

// Proses penambahan rekod user baru
Route::get('users/add', 'UsersController@paparBorangTambahUser');
Route::post('users/add', 'UsersController@simpanRekodUserBaru');
// Proses kemaskini rekod user lama
Route::get('users/{id}', 'UsersController@paparBorangKemaskiniUser');
Route::patch('users/{id}', 'UsersController@simpanRekodUserLama');

// Route to delete user
Route::delete('users/{id}', 'UsersController@destroy');


// routing untuk users
Route::get('profile/{username?}', function( $username = null ) {

  return 'Username: ' . $username;

});

Route::get('sales/{pakej}', function( $pakej ) {

  return 'Pakej: ' . $pakej;

});

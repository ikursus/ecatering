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




// routing untuk users
Route::get('profile/{username?}', function( $username = null ) {

  return 'Username: ' . $username;

});

Route::get('sales/{pakej}', function( $pakej ) {

  return 'Pakej: ' . $pakej;

});

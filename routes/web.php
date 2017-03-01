<?php

// Halaman untuk authentication
Auth::routes();
// Halaman ahli (selepas login)
Route::get('/home', 'HomeController@index');

// Halaman utama aplikasi
Route::get('/', function () {
    return view('welcome');
});

// Halaman contact us
Route::get('contact-us', 'PagesController@showContactForm');

Route::post('contact-us', function() {

  return 'Borang telah berjaya dihantar!';

});


// routing untuk users
Route::get('profile/{username?}', function( $username = null ) {

  return 'Username: ' . $username;

});

Route::get('sales/{pakej}', function( $pakej ) {

  return 'Pakej: ' . $pakej;

});

Route::get('google', function() {
  return redirect('https://google.com');
});

Route::get('pakej', function() {

  $senarai_pakej = [
    'breakfast' => 'Sardin Roll',
    'lunch' => 'Ayam Masak Merah',
    'teabreak' => 'Kuew Tiaw Goreng'
  ];

  return view('pakej/template_pilihan_pakej', compact('senarai_pakej') );
});

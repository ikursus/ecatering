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

// Paparkan senarai products bagi alamat web http://localhost/catering/public/products
Route::get('products', 'ProductsController@index')->name('showProducts');
// Proses penambahan rekod product baru
Route::get('products/add', 'ProductsController@create')->name('addProduct');
Route::post('products/add', 'ProductsController@store')->name('storeProduct');
// Proses kemaskini rekod product lama
Route::get('products/{id}', 'ProductsController@edit')->name('editProduct');
Route::patch('products/{id}', 'ProductsController@update')->name('updateProduct');
// Route to product user
Route::delete('products/{id}', 'ProductsController@destroy')->name('deleteProduct');

// Paparkan senarai order bagi produk yang dipilih
Route::get('products/{id}/orders', 'ProductsController@senaraiOrders')->name('senaraiOrders');


// Paparkan senarai users bagi alamat web http://localhost/catering/public/senarai-users
Route::get('senarai-users', 'UsersController@index');
// Proses penambahan rekod user baru
Route::get('users/add', 'UsersController@paparBorangTambahUser');
Route::post('users/add', 'UsersController@simpanRekodUserBaru')->name('storeUser');
// Proses kemaskini rekod user lama
Route::get('users/{id}', 'UsersController@paparBorangKemaskiniUser');
Route::patch('users/{id}', 'UsersController@simpanRekodUserLama')->name('updateUser');
// Route to delete user
Route::delete('users/{id}', 'UsersController@destroy');


// Halaman tempahan
Route::get('tempahan', 'OrdersController@borangTempahan');
Route::post('tempahan', 'OrdersController@simpanRekodTempahan')->name('simpanRekodTempahan');
// Halaman semakan tempahan
Route::get('status-tempahan', 'OrdersController@borangStatusTempahan');
Route::post('status-tempahan', 'OrdersController@paparStatusTempahan')->name('paparStatusTempahan');

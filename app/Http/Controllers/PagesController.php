<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  public function homepage()
  {
      return view('welcome');
  }
  public function showContactForm()
  {

    $page_title = 'Halaman Hubungi';

    $tarikh = date('d-M-Y');

    // resources/views/template_contact.php
    return view('template_contact', compact('page_title', 'tarikh') );

  }

  public function postContactForm( Request $request )
  {
    // Fungsi untuk validate data daripada request
    $this->validate( $request, array(
      'customer_name' => 'required|min:3|string',
      'customer_email' => 'required|email',
      'customer_message' => 'required'
    ) );



    // Untuk dapatkan 1 data daripada ruangan input yang dipilih
    // $request->input('customer_name');
    // Untuk terima data dari senarai input yang dipilih
    // $request->only(['customer_name', 'customer_email']);
    // Untuk terima data dari semua senarai input kecuali yang dinyatakan
    // $request->except(['customer_message']);
    // Untuk terima SEMUA input daripada borang yang dikirimkan
    $request->all();

    // Tetapkan variable untuk request all
    $data = $request->all();
    // Paparkan data
    return $data;

  }

  public function senaraiPakej() {

    $senarai_pakej = [
      'breakfast' => 'Sardin Roll',
      'lunch' => 'Ayam Masak Merah',
      'teabreak' => 'Kuew Tiaw Goreng'
    ];

    return view('pakej/template_pilihan_pakej', compact('senarai_pakej') );
  }

}

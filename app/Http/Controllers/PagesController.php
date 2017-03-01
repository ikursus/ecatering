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

    $customer_name = $request->all();

    return $customer_name;

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

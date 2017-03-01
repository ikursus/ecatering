<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  public function showContactForm()
  {

    $page_title = '<u>Halaman Hubungi</u>';

    $tarikh = date('d-M-Y');

    // resources/views/template_contact.php
    return view('template_contact', compact('page_title', 'tarikh') );

  }

}

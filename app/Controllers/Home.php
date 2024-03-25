<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    if (session('magicLogin')) {
      session()->removeTempdata('magicLogin');
      return $this->render('auth.reset-password');
    }
    return $this->render('welcome_message');
  }
}

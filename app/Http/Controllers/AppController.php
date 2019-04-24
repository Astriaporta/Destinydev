<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Social;
use App\Skills;

class AppController extends Controller
{
  public function index()
  {
    $services = Services::getList();
    $social = Social::getList();
    $skills = Skills::getList();

    return view('layouts.master')->with([
      'services' => $services,
      'links' => $social,
      'skills' => $skills,
    ]);
  }
}

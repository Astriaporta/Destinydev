<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Social;
use App\Skills;
use SEO;

class AppController extends Controller
{
  public function index()
  {
    SEO::setTitle(config('app.name', ''));
    SEO::setDescription('Développeur web Back-end et Front-end vivant en région parisienne. Spécialisé dans la cration de site avec laravel et VueJS');
    SEO::opengraph()->addProperty('locale', 'fr-fr');
    SEO::opengraph()->setType('website');
    $services = Services::get();
    $social = Social::get();
    $skills = Skills::get();

    return view('layouts.master')->with([
      'services' => $services,
      'links' => $social,
      'skills' => $skills,
    ]);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Social;
use App\Skills;
use SEO;
use Artesaos\SEOTools\Facades\TwitterCard;

class AppController extends Controller
{
  public function index()
  {
    SEO::setTitle('Développeur Web Laravel & VueJS - ' . config('app.name', ''));
    SEO::setDescription('Développeur web Back-end et Front-end vivant en région parisienne. Spécialisé dans la création de site avec laravel et VueJS');
    SEO::opengraph()->addProperty('locale', 'fr-fr');
    SEO::opengraph()->setType('website');
    SEO::jsonLd()->setType('Website');
    // SEO::twitter()->setSite('@Astriaporta');

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

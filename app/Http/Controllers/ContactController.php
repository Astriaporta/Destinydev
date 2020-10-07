<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\KryptoniteFound;
use App\Http\Requests\ContactValidationRules;

// @link https://github.com/anhskohbo/no-captcha

class ContactController extends Controller
{
    public function store(ContactValidationRules $request)
    {
      Mail::to(config('mail.from.address'))
        ->send(new KryptoniteFound($request));
    }
}

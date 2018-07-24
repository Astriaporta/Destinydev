<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\KryptoniteFound;
use App\Http\Requests\ContactValidationRules;

class ContactController extends Controller
{
    public function store(ContactValidationRules $request)
    {
      Mail::to(config('mail.to.address'), config('mail.to.name'))
        ->send(new KryptoniteFound($request));
    }
}

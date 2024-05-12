<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';

        Mail::to('eneadasulaj@gmail.com')->send(new WelcomeMail($title, $body));

        return "Email sent successfully!";
    }
}

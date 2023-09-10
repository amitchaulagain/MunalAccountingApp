<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function basic_email()
    {
        $recipientEmail = 'achaulagain123@gmail.com';

        Mail::to($recipientEmail)->send(new MyEmail());

        return 'Email sent successfully';
    }
}

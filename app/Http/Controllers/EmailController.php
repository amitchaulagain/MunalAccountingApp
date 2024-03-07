<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class EmailController extends Controller
{

    public function basic_email(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'subject' => 'nullable',
            'message' => 'required'
        ]);


        $recipientEmail = 'contact@munaltax.com';

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to($recipientEmail)->send(new MyEmail($data));


        $request->session()->flash('success', 'Message has been sent successfully !');

        return redirect()->back();
    }
}

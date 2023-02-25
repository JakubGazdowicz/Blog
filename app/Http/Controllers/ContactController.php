<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function mail(Request $request)
    {
        Mail::send('emails.sendMail', ['message' => $request->message] ,function ($m) use ($request) {
            $m->to($request->email, $request->name)->subject($request->subject);
        });
    }
}

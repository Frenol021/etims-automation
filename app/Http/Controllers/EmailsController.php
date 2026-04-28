<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class EmailsController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        //validate data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        Mail::to('defrenol021@gmail.com')->send(new ContactMail($data));
        return redirect()->back()->with('success', 'Email sent successfully');
    }
}

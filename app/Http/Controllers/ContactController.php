<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contacts()
    {
        return view('contacts');
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to($email)->send(new ContactMail($name, $surname, $email, $message));

        return redirect()->route('contatti')->with('mailInviata', 'mail inviata con successo, sarai ricontattato al più presto');
    }
}

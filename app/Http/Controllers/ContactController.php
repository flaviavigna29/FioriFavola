<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contacts()
    {
        return view('contacts');
    }

    public function submit(ContactRequest $request)
    {
        // dd($request->all());
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to($email)->send(new ContactMail($name, $surname, $email, $message));

        return redirect()->route('contatti')->with('message', "E-mail inviata con successo, $name $surname sarai ricontattato al più presto");
    }
}

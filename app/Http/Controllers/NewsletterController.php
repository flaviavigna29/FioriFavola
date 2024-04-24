<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Mail\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function submit(NewsletterRequest $request)
    {
        $email = $request->input('email');

        Letter::create([
            'email'=> $email
        ]);
        
        Mail::to($email)->send(new Newsletter($email));
      
        return redirect()->back()->with('message', "Grazie per esserti iscritto alla Newsletter!");
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        $email = $request->email;
        
        Newsletter::create([
            'email' => $email,
        ]);
        
        return redirect()->back()->with('message', "Grazie per esserti iscritto alla Newsletter!");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Logic to send email would go here.
        // For now, we'll just simulate it and redirect back with a success message.
        
        // Mail::raw($request->message, function ($message) use ($request) {
        //     $message->to('ater_alnada@gmail.com')
        //             ->subject('New Contact Message from ' . $request->name);
        // });

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}

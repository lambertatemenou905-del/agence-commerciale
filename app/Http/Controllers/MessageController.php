<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message envoyé avec succès ');
    }  //
}

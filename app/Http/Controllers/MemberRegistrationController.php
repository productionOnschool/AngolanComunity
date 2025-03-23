<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MemberRegistrationMail;
use Illuminate\Support\Facades\Mail;

class MemberRegistrationController extends Controller
{
    public function submit(Request $request)
    {

        return $request->all();
        // Validate incoming data
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'genero' => 'required|string|max:20',
            'estado_civil' => 'required|string|max:50',
            'data_nascimento' => 'required|date',
            'cidade' => 'required|string|max:100',
        ]);

        // Send email
        Mail::to('admin@angolancommunity.org')->send(new MemberRegistrationMail($data));

        return response()->json(['message' => 'Registration submitted and email sent!'], 200);
    }
}
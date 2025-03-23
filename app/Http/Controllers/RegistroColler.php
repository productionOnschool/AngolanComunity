<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\MemberRegistrationMail;
use Illuminate\Support\Facades\Mail;

class RegistroColler extends Controller
{
  public function submit(Request $request)
  {
    try {
      $data = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefone' => 'required|string|max:20',
        'genero' => 'required|string|max:20',
        'estado_civil' => 'required|string|max:50',
        'data_nascimento' => 'required|date',
        'cidade' => 'required|string|max:100',
        'estado' => 'required|string|max:100', // Added state validation
      ]);

      Mail::to('Info@angolancommunity.org')->send(new MemberRegistrationMail($data));

      return response()->json([
        'success' => true,
        'message' => 'Cadastro do membro enviado com sucesso!.',
      ], 200);
    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => 'An error occurred: ' . $e->getMessage(),
      ], 500);
    }
  }
}
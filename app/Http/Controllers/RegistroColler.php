<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\MemberRegistrationMail;
use Illuminate\Support\Facades\Mail;
class RegistroColler extends Controller
{
  //


  public function submit(Request $request)
  {



    // return $request->all();



    // $data = $request->validate([
    //   // 'nome' => 'required|string|max:255',
    //   // 'email' => 'required|email|max:255',
    //   // 'telefone' => 'required|string|max:20',
    //   // 'genero' => 'required|string|max:20',
    //   // 'estado_civil' => 'required|string|max:50',
    //   // 'data_nascimento' => 'required|date',
    //   // 'cidade' => 'required|string|max:100',
    // ]);

    $data = [
      'nome' => 'João Silva',
      'email' => 'joao.silva@example.com',
      'telefone' => '+244923456789',
      'genero' => 'Masculino',
      'estado_civil' => 'Solteiro',
      'data_nascimento' => '1995-08-15',
      'cidade' => 'Luanda',
    ];





    Mail::to('Info@angolancommunity.org')->send(new MemberRegistrationMail($data));

    return response()->json(['message' => 'Registration submitted and email sent!'], 200);
  }



}

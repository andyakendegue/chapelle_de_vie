<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function postRegisterMessage(Request $request)
    {

      $nom = $request->input('nom');
      $phone = $request->input('phone');
      $mail = $request->input('email-774');
      $sujet = $request->input('sujet');
      $contenu = $request->input('contenu');
      // Envoi du message

      DB::insert('insert into messages (nom, phone, email, sujet, message) values(?,?,?,?,?)',[$nom, $phone, $mail,$sujet, $contenu]);
      echo 'Votre message a bien été envoyé';

    }

}

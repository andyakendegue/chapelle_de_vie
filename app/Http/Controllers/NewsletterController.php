<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    //
    public function postRegisterMail(Request $request)
    {
      $mail = $request->input('email-639');
      // Vérifie si le mail existe déjà
      $select = DB::select('select * from newsletter where email = ?',[$mail]);
      $verify="";

      foreach ($select as $emails ) {

        if ($emails->email == $mail) {
          $verify= $emails->email;
        }

      }

      if ($verify==$mail) {
        echo 'Votre adresse email '.$mail.' existe déjà !';
      } else {
        DB::insert('insert into newsletter (email) values(?)',[$mail]);
        echo 'Votre adresse Email '.$mail.' a bien été enregistrée';
      }







    }


}

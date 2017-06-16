<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadFiles;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $posts = DB::select('select * from blog'); return view('viewPosts',['posts'=>$posts]);
    }

    public function create() {
      return view('addPost');
    }

    public function store(Request $request)
    {

      $titre = $request->input('titre');
      $contenu = $request->input('contenu');
      $auteur = $request->input('auteur');
      $statut = $request->input('statut');
      if ($request->hasFile('imgUpload')) {
        if ($request->file('imgUpload')->isValid()) {
          $image = $request->imgUpload->store('postPics');
        }
      }


      //$image="";
      //$now = DB::raw('now()');
      $now = \Carbon\Carbon::now();


      if($request->hasFile('imgUpload')) {

      // Envoi de l'article

      DB::insert('insert into blog (titre, texte, image,publication, modification, statut, auteur) values(?,?,?,?,?,?,?)',[$titre, $contenu, $image, $now, $now ,$statut, $auteur]);
      echo 'Votre message a bien été envoyé';

    } else {
      DB::insert('insert into blog (titre, texte, image,publication, modification, statut, auteur) values(?,?,?,?,?,?,?)',[$titre, $contenu, $image, $now, $now ,$statut, $auteur]);
      echo 'aucune image'.var_dump($request->all());
    }


    }


     public function show($id)
    {
        $posts = DB::select('select * from blog where id = ?',[$id]);
            return view('editPost',['posts'=>$posts]);
}
     public function edit(Request $request,$id)
    {
      $titre = $request->input('titre');
      $contenu = $request->input('contenu');
      $auteur = $request->input('auteur');
      $statut = $request->input('statut');
      //$image = $request->file('imgUpload')->store('postPics');

DB::update('update blog set titre = ? where id = ?',[$name,$id]);
echo "Record updated successfully.<br/>";
echo '<a href="/edit-records">Click Here</a> to go back.';
}

}

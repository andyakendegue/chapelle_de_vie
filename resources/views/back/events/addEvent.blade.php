@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>Nouvel évènement</H2><button class="btn btn-primary">Ajouter un évènement </button></div>

                <div class="panel-body">

                  <div id="boxalert">
                  <div class="alert alert-success alert-dismissable hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p></p>
                  </div>
                </div>



<form method="post" class="addEvent" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="auteur" value="{{ Auth::user()->name }}">
       <div class="form-group">
          <label for="titre">Titre</label><input class="form-control" id="titre" name="titre" type="text" />
       </div>
       <div class="form-group">
          <label for="titre">Organisateur</label>
          <input class="form-control" id="organisateur" name="organisateur" type="text" placeholder="Organisateur"/>
          <input class="form-control" id="phone" name="phone" type="phone" placeholder="Phone"/>
          <input class="form-control" id="email" name="email" type="email" placeholder="Email"/>
          <input class="form-control" id="website" name="website" type="website" placeholder="Website"/>
       </div>
       <div class="form-group">
          <label for="titre">Lieu</label>
          <input class="form-control" id="lieu" name="lieu" type="text" placeholder="Lieu"/>
          <input class="form-control" id="adresse" name="adresse" type="text" placeholder="Adresse"/>
          <input class="form-control" id="phone" name="phone" type="phone" placeholder="Phone"/>
       </div>
       <div class="form-group">
          <label for="titre">Détails</label>

          <input class="form-control" id="debut" name="debut" type="text" placeholder="Début" />
          <input class="form-control" id="fin" name="fin" type="text" placeholder="Fin"/>
          <input class="form-control" id="prix" name="prix" type="phone" placeholder="Prix"/>
          <input class="form-control" id="categorie" name="categorie" type="phone" placeholder="Categorie"/>
       </div>
       <div class="form-group">
          <label for="contenu">Description</label><textarea class="form-control" id="description" name="description" col="40" rows="10" ></textarea>
       </div>
       <div class="form-group">
          <label for="imgUpload">Image</label><input class="form-control" name="imgUpload" type="file" accept="image/*"/>

       </div>
       <div class="form-group">
          <label for="titre">Réseaux sociaux</label>
          <input class="form-control" id="facebook" name="facebook" type="text" placeholder="Facebook"/>
          <input class="form-control" id="twitter" name="twitter" type="text" placeholder="Twitter"/>
          <input class="form-control" id="googleplus" name="googleplus" type="text" placeholder="Google+"/>
          <input class="form-control" id="youtube" name="youtube" type="text" placeholder="Youtube"/>
          <input class="form-control" id="instagram" name="instagram" type="text" placeholder="Instagram"/>
          <input class="form-control" id="linkedin" name="linkedin" type="text" placeholder="LinkedIn"/>
       </div>
       <div class="form-group" style="margin-bottom: 0;">
                                <div id="image_preview" class="col-lg-10 col-lg-offset-2">
                                    <div class="thumbnail hidden">
                                        <img src="http://placehold.it/5" alt="">
                                        <div class="caption">
                                            <h4></h4>
                                            <p></p>
                                            <p><button type="button" class="btn btn-default btn-danger">Annuler</button></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
       <div class="selectbox form-group">
         <label for="statut">Statut</label>
         <select id="statut" name="statut">
           <option value="publier">Publier</option>
           <option value="brouillon">Brouillon</option>
         </select>


       </div>
       <div class="form-group">
       <button type="submit" class="btn btn-default">Enregistrer</button>
     </div>


     </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>Nouvel évènement</H2><button class="btn btn-primary">Ajouter un article </button></div>

                <div class="panel-body">
                  <div class="alert alert-success alert-dismissable">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>
					注意!
				</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
			</div>



<form method="post" class="editPost" enctype="application/x-www-form-urlencoded">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <input type="hidden" name="auteur" value="{{ Auth::user()->name }}">
       <div class="form-group">
         @foreach ($posts as $post)
          <label for="titre">Titre</label><input class="form-control" value="{{ $post->titre }}" id="titre" name="titre" type="text" />
       </div>
       <div class="form-group">
          <label for="contenu">Contenu</label><textarea class="form-control" value="{{ $post->texte }}" id="contenu" name="contenu" col="40" rows="10" >{{ $post->texte }}</textarea>
       </div>
       <div class="form-group">
          <label for="imgUpload">Image</label><input class="form-control" value="{{ $post->image }}" name="imgUpload" type="file" />

       </div>
       <div class="selectbox form-group">
         <label for="statut">Statut</label>
         <select id="statut" name="statut">

           @if($post->statut=="publier")

      <option value="publier" selected="selected">Publier</option>
      <option value="brouillon">Brouillon</option>
     @else
      <option value="publier">Publier</option>
      <option value="brouillon" selected="selected">Brouillon</option>

@endif


         </select>


       </div>
       <div class="form-group">
       <button type="submit" class="btn btn-default">Enregistrer</button>
     </div>

@endforeach
     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

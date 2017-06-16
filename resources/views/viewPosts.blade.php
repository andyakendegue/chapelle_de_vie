@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>Tous Vos articles</H2></div>

                <div class="panel-body">
                  <table class="table">
      <thead>
        <tr>
          <th>
            Post id
          </th>
          <th>
          Image
          </th>
          <th>
            Titre
          </th>
          <th>
            Statut
          </th>

          <th>
            auteur
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
     <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->image }}</td>
            <td>{{ $post->titre }}</td>
            <td>{{ $post->statut }}</td>
            <td>{{ $post->auteur }}</td>
<td><a href='/home/blog/edit/{{ $post->id }}'>Editer</a></td> 
<td><a href='/home/blog/delete/{{ $post->id }}'>Supprimer</a></td> </tr>
@endforeach
      </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

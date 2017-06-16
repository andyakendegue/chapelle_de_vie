@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>Toutes les inscriptions</H2></div>

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
        @foreach ($inscriptions as $inscription)
     <tr>
            <td>{{ $inscription->id }}</td>
            <td>{{ $inscription->image }}</td>
            <td>{{ $inscription->titre }}</td>
            <td>{{ $inscription->statut }}</td>
            <td>{{ $inscription->auteur }}</td>
<td><a href='/home/blog/edit/{{ $inscription->id }}'>Editer</a></td>
<td><a href='/home/blog/delete/{{ $inscription->id }}'>Supprimer</a></td> </tr>
@endforeach
      </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><H2>Tous Vos évènements</H2></div>

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
        @foreach ($events as $event)
     <tr>
            <td>{{ $event->id }}</td>
            <td>{{ $event->image }}</td>
            <td>{{ $event->titre }}</td>
            <td>{{ $event->statut }}</td>
            <td>{{ $event->auteur }}</td>
<td><a href='/home/blog/edit/{{ $event->id }}'>Editer</a></td>
<td><a href='/home/blog/delete/{{ $event->id }}'>Supprimer</a></td> </tr>
@endforeach
      </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

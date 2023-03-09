@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
        <h4>Actualités</h4>
        </div>
        <div class="card-body">
<a href="{{route('create_actualites')}}" class="btn btn-primary btn-lg">Nouveau</a>  

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Titre</th>
      <th>Photo</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($actualites as $c)
    <tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->titre}}</td>
      <td><img src="https://api.mconsulting.ml/laravel/public/uploads/images/{{ $c->logo }}"  width="100" height="100"></td>
      <td><a href="{!! route('voir_actualites', ['id' => $c->id]) !!}" class="btn btn-primary">Voir</a> <a href="{!! route('edit_actualites', ['id' => $c->id]) !!}" class="btn btn-warning">Modifier </a></td>
    </tr>
@endforeach
    
   
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
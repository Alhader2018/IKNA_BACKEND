@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
        <h4>Cours</h4>
        </div>
        <div class="card-body">
<a href="/cours/create" class="btn btn-primary btn-lg">Nouveau</a>  

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Titre</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cours as $c)
    <tr>
      <th scope="row">1</th>
      <td>{{$c->titre}}</td>
      <td><a href="/cours/{{$c->id}}" class="btn btn-primary">Voir</a> <a href="/cours/{{$c->id}}" class="btn btn-warning">Modifier </a></td>
    </tr>
@endforeach
    
   
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
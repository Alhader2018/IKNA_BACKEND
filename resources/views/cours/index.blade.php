@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
        <h4>Cours</h4>
        </div>
        <div class="card-body">
<a href="{{route('create_cours')}}" class="btn btn-primary btn-lg">Nouveau</a>  

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Titre</th>
      <th>Phot</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cours as $c)
    <tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->titre}}</td>
      <td><img src="{{$upload}}{{ $c->logo }}"  width="100" height="100"></td>
      <td><a href="{!! route('voir_cours', ['id' => $c->id]) !!}" class="btn btn-primary">Voir</a> <a href="{!! route('edit_cours', ['id' => $c->id]) !!}" class="btn btn-warning">Modifier </a></td>
    </tr>
@endforeach
    
   
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
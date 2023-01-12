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
      <th>Email</th>
      <th>Rôle</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($user as $u)
    <tr>
      <th scope="row">{{$u->name}}</th>
      <td>{{$u->email}}</td>
      <td>{{$u->role}}</td>
      <td> <a href="{!! route('edit_utilisateur', ['id' => $u->id]) !!}" class="btn btn-warning">Modifier </a></td>
    </tr>
@endforeach
    
   
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
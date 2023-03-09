@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
        <h4>Suggestions</h4>
        </div>
        <div class="card-body">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>Contenu</th>
      <th>Auteur</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($suggestions as $c)
    <tr>
        
      <td>{{$c->contenu}}</td>
      <td>{{$c->auteur}}</td>
    </tr>
@endforeach
    
   
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
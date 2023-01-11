@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">

        <div class="card-header">
        <h4>Cours</h4>
        </div>
        <div class="card-body">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
       @endif
      @foreach ($cours as $c)
        <dl class="row">
          <dt class="col-sm-3">Intitulé</dt>
          <dd class="col-sm-9">{{$cours[0]->titre}}</dd>
          <dt class="col-sm-3">Description</dt>
          <dd class="col-sm-9">{{$cours[0]->description}}</dd>
        </dl>
      @endforeach
       
        </div>
        <div class="card-footer">
            <a href="{!! route('edit_cours', ['id' => $c->id]) !!}" class="btn btn-primary">Modifier</a> <a href="" class="btn btn-danger">Supprimer</a>
        
          <a href="{{route('index_cours')}}" class="btn btn-secondary">Liste cours</a>
       
          </div>
    </div>
    <br>
  <div class="card">
     <div class="card-header bg-primary text-white">
      <h4>Ligne cours</h4>
     </div>
     <div class="card-body">
      <a href="{!! route('create_lignecours', ['cours_id' => $c->id]) !!}" class="btn btn-primary">Nouvelle ligne cours</a>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($lignecours as $l)
    <tr>
      <th scope="row">1</th>
      <td>{{$l->titre}}</td>
      <td>{{$l->description}}</td>
      <td>
        <a href="{!! route('edit_lignecours', ['id' => $l->id]) !!}" class="btn btn-warning">Modifier </a> 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
    
    
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
     </div>
</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
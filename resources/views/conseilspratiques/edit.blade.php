@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
                <div class="card-header"><h5 class="card-title">Conseils pratiques</h5></div>

                <div class="card-body">
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<form action="{{ route('conseilspratiques.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Intitulé</label>
        <input type="text" name="name" class="form-control" value="{{ $conseilpratique->name }}">
        <input type="hidden" name="id" class="form-control" value="{{ $conseilpratique->id }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control">{{ $conseilpratique->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="photo"> Photo actuelle</label>
        <img src="{{$upload}}{{ $conseilpratique->photo }}" alt="{{ $conseilpratique->name }}" width="100" height="100">
    </div>
    <div class="form-group">
        <label for="photo">Nouvelle Photo</label>
        <input type="file" name="photo" class="form-control">
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>
</div>
@endsection

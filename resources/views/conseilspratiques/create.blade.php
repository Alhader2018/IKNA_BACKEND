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
<form action="{{ route('conseilspratiques.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Intitulé</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" class="form-control">
    </div>
    <div class="form-group">
        <br><br>
         <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
   
</form>
</div>
</div>
@endsection

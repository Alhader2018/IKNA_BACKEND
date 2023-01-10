@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
        <h4>Création Cours</h4>
        </div>
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
        <form method="POST" action="/cours/create"  enctype="multipart/form-data">
                        @csrf
        <div class="form-group">
            <label for="">Image mis en avant</label>
            <input type="file" name="image" id="" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="">Intitulé du cours</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <br>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenu"></textarea>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Enregistrer">
        </div>

        </form>
        </div>
    </div>
</div>
@endsection
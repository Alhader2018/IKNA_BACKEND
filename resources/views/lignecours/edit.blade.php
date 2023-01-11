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
        <form method="POST" action="{{route('update_lignecours')}}"  enctype="multipart/form-data">
                        @csrf
        <input type="hidden" value="{{$lignecours[0]->id}}" name="id">
        <input type="hidden" value="{{$lignecours[0]->cours_id}}" name="cours_id">
        <div class="form-group">
            <label for="">Image mis en avant</label>
            <input type="file" name="image" id="" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="">Intitulé du cours</label>
            <input type="text" class="form-control" name="titre" value='{{@$lignecours[0]->titre}}'>
        </div>
        <br>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$lignecours[0]->description}}</textarea>
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
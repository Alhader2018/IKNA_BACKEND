@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        <h4>Création groupe d'utilisateurs</h4>
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
        <form method="POST" action="{{route('store_groupe')}}"  enctype="multipart/form-data">
                        @csrf
        
        <br>
        <div class="form-group">
            <label for="">Code</label>
            <input type="text" class="form-control" name="code">
        </div>
        <br>
        <div class="form-group">
            <label for="">Libellé</label>
            <input type="text" class="form-control" name="libellé">
        </div>
        <br>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Enregistrer">
        </div>

        </form>
        </div>
    </div>
</div>
@endsection
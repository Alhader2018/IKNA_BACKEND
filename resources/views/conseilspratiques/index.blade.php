@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
                <div class="card-header"><h5 class="card-title">Conseils pratiques</h5></div>

                <div class="card-body">
                    <a href="{{route('conseilspratiques.create')}}" class="btn btn-primary">Nouveau</a>
                <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($conseilspratiques as $conseilpratique)
        <tr>
            <td>{{ $conseilpratique->name }}</td>
            <td>{{ $conseilpratique->description }}</td>
            <td>
                <img src="{{$upload}}{{ $conseilpratique->photo }}" alt="{{ $conseilpratique->name }}" width="50">
            </td>
            <td>
                <a href="{{ route('conseilspratiques.edit', $conseilpratique) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('conseilspratiques.destroy', $conseilpratique->id) }}" class="btn btn-danger">Supprimer</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
   
                </div>
</div>
</div>
@endsection
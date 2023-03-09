@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Groupe d'utilisateurs</h5>
                </div>
                <div class="card-body">
                <a href="{{route('create_groupe')}}" class="btn btn-primary btn-lg">Nouveau</a>  
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th>Code</th>
                        <th>Libellé</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($groupe as $g)
                        <tr>
                        <th scope="row">{{$g->code}}</th>
                        <td>{{$g->libellé}}</td>
                        <td><a href="{!! route('voir_groupe', ['id' => $g->id]) !!}" class="btn btn-primary">Permission</a> <a href="{!! route('edit_groupe', ['id' => $g->id]) !!}" class="btn btn-warning">Modifier </a></td>
                        </tr>
                    @endforeach
                        
                    
                    </tbody>
                </table>
                </div>
            </div>
   </div>
</div>
@endsection

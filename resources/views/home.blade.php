@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('home.contenu')
            <br>
            @include('home.message')
            <br>
            @include('home.utilisateur')
        </div>
    </div>
        
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Permission du groupe :
                        {{$groupe[0]->libellé}}
                        <input type="hidden" id="groupe" value="{{$groupe[0]->code}}">
                    </h5>
                </div>
                <div class="card-body">
                <dl class="row">
                <dt class="col-sm-3">Code</dt>
                <dd class="col-sm-9">{{$groupe[0]->code}}</dd>
                <dt class="col-sm-3">Libellé</dt>
                <dd class="col-sm-9">{{$groupe[0]->libellé}}</dd>
                </dl>
                <br>
@csrf
<input type="hidden" id="groupe" value="{{$groupe[0]->code}}">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th>Page</th>
                        <th>Permission</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permission as $item)
                            @switch($item->pages)
                                @case('medecin')
                                    @include('groupe.include.medecin')
                                    @break
                                @case('user')
                                    @include('groupe.include.user')
                                    @break
                                @case('rapport')
                                    @include('groupe.include.rapport')
                                    @break
                                @case('cours')
                                    @include('groupe.include.cours')
                                    @break
                                @case('conseil')
                                    @include('groupe.include.teleconseille')
                                    @break
                                @case('suggestions')
                                    @include('groupe.include.suggestions')
                                    @break
                                @case('actualites')
                                    @include('groupe.include.actualites')
                                    @break
                            @endswitch

                        @endforeach
                        
                       
                        
                    
                    </tbody>
                </table>

                </div>
                <div class="card-footer">
                    <div class="text-right"><button class="btn btn-success">Enregistrer</a>
                </div></div>
            </div>
   </div>
</div>
<script>
     function enregistrer(val){
        // create a new FormData object
        const formData = new FormData();
        var permission=document.getElementById(val);
        var permissionValue=permission.checked;
        var groupe=document.getElementById("groupe").value;
        // add data to the form
        formData.append('page',val);
        formData.append('permission', permissionValue);
        formData.append('groupe', groupe );

        // make the POST request to the API endpoint
        fetch('/permission', {
        method: 'POST',
        body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
        });

     }



</script>
@endsection

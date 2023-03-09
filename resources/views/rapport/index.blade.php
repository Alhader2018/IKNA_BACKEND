@extends('layouts.app')

@section('content')
<div class="container">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <div class="col-md-10">
            <div class="card">
            
                <div class="card-header">{{ __('messages.Rapport') }}</div>
                <div class="row">
                    <div class="col-lg-6">
                        <div id="pie-chart"></div>
                    </div>
                    <div class="col-lg-6">
                        <div id="myDiv"></div>
                    </div>
                </div>
                    
                   
                
               
                </div>

        </div>
    </div>               

</div>
<input type="hidden">
<script>

                    var data = [{
                    values: [{!! $sexe["homme"] !!}, {!! $sexe["femme"] !!}, {!! $sexe["autres"] !!},],
                    labels: ['Femme', 'Homme', 'Autres'],
                    type: 'pie'
                    }];

                    var layout = {
                    title: 'Tranche d\'âge',
                    height: 400,
                    width: 500
                    };

                    Plotly.newPlot('pie-chart', data, layout);
                    var data = [{
                    values: [{!! $tranche["tranche10_14"] !!},{!! $tranche["tranche15_19"] !!}, {!! $tranche["tranche20_24"] !!}, {!! $tranche["tranche25_49"] !!},{!! $tranche["tranche50"] !!}],
                    labels: ['15-19 ans', '20-24 ans', '25-49','10-14 ans','50 ans et plus'],
                    type: 'pie'
                    }];

                    var layout = {
                    title: 'Tranche d\'âge',
                    height: 400,
                    width: 500
                    };

                    Plotly.newPlot('myDiv', data, layout);

</script>

</div>
@endsection

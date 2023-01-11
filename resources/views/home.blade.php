@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('messages.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('messages.You are logged in!') }}
                    <div id="root">
        <div class="container pt-5">
            <div class="row align-items-stretch">
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <i class="fa fa-envelope" style="font-size:48px;color:#2596be;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Messages
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                    </path>
                    </svg></h4>
                    <span class="hind-font caption-12 c-dashboardInfo__count">{{$stat['message']}}</span>
                    
                </div>
            </div>
            
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <a href="/cours" style="text-decoration:none">
                <i class="fa fa-graduation-cap" style="font-size:48px;color:#6c25be;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Cours</h4><span class="hind-font caption-12 c-dashboardInfo__count">{{$stat['cours']}}</span>
                    </a>
                </div>
            </div>
            
          
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <i class="fa fa-envelope-open" style="font-size:48px;color:yellowgreen;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Utilisateurs

                </h4><span class="hind-font caption-12 c-dashboardInfo__count">{{$stat['user']}}</span>
                  
                </div>
            </div>
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <i class="fa fa-user-md" style="font-size:48px;color:darkblue;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">
                    Conseils pratiques
                    <br>
                 
                </h4><span class="hind-font caption-12 c-dashboardInfo__count"></span>
                </div>
            </div>
            </div>
        </div>
        </div>

</div>
                </div>
            </div>
        </div>
        
</div>
@endsection

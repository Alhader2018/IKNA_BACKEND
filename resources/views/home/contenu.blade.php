@if (@$permissions["cours"] =="true" OR @$permissions["actualites"] =="true" OR @$permissions["conseil"] =="true" OR @$permissions["rapport"] =="true")
<div class="card">
                <div class="card-header">{{ __('messages.Content') }}</div>

                <div class="card-body">
                    <div id="root">
            <div class="row align-items-stretch">
           
            @if (@$permissions["cours"] =="true")
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <a href="/cours" style="text-decoration:none">
                <i class="fa fa-graduation-cap" style="font-size:48px;color:#6c25be;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Cours</h4>
                    </a>
                </div>
            </div>
            @endif
          
            
          
            @if (@$permissions["conseil"] =="true")
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                    <a href="{{route('conseilspratiques.index')}}" style="text-decoration:none">
                <i class="fa fa-medkit" style="font-size:48px;color:darkblue;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">
                    Conseils pratiques
                    <br>
                 
                </h4><span class="hind-font caption-12 c-dashboardInfo__count"></span>
                </a>
                </div>
            </div>
            @endif
            @if (@$permissions["actualites"] =="true")
            <div class="c-dashboardInfo col-lg-3 col-md-6">
            <a href="{{route('index_actualites')}}" style="text-decoration:none">
                <div class="wrap">
                <i class="fa fa-newspaper-o" style="font-size:48px;color:darkblue;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">
                    Actualités
                    <br>
                 
                </h4><span class="hind-font caption-12 c-dashboardInfo__count"></span>
                </div>
                </a>
            </div>
            @if (@$permissions["rapport"] =="true")
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <a href="{{route('rapport')}}" style="text-decoration:none">
                <i class="fa fa-line-chart" style="font-size:48px;color:#6c25be;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Rapport</h4>
                    </a>
                </div>
            </div>
            @endif
            </div>
            @endif
            
        </div>

</div>
                </div>
@endif
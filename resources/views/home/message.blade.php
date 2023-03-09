@if (@$permissions["suggestions"] =="true" OR @$permissions["conseil"] =="true" OR @$permissions["medecin"] =="true")
<div class="card">
                <div class="card-header">{{ __('messages.Message') }}</div>

                <div class="card-body">
                    <div id="root">
            <div class="row align-items-stretch">
            @if (@$permissions["medecin"] =="true")
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <a href="/message" style="text-decoration:none">
                <i class="fa fa-envelope" style="font-size:48px;color:#2596be;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Messages
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                    </path>
                    </svg></h4>
                </a>
                </div>
            </div>
            @endif
            @if (@$permissions["conseil"] =="true")
            <div class="c-dashboardInfo col-lg-3 col-md-6">
                <div class="wrap">
                <a href="/cours" style="text-decoration:none">
                <i class="fa fa-user-md" style="font-size:48px;color:#6c25be;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Téléconseiller</h4>
                    </a>
                </div>
            </div>
            @endif
            
            @if (@$permissions["suggestions"] =="true")
            <div class="c-dashboardInfo col-lg-3 col-md-6">
            <div class="wrap">
                <a href="/suggestions" style="text-decoration:none">
                <i class="fa fa-user" style="font-size:48px;color:yellowgreen;"></i>
                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Suggestions

                </h4>
                  
                </div>
            </a>
            </div>
            @endif
          
            </div>
        </div>

</div>
                </div>
@endif
@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('content')
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            
            @foreach ($messages as $m)
            <a href="/?id={{$m->id_expeditaire}}" style="text-decoration:none">
                <div class="chat_list">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>{{$m->id_expeditaire}} <span class="chat_date">Dec 25</span></h5>
                    <p>{{$m->contenu}}</p>
                    </div>
                </div>
                </div>
            </a>
            @endforeach
            
            
          </div>
        </div>
        <div class="mesgs">
        @foreach ($message as $m)

            @if ($m->id_expeditaire== "medecin")
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>{{$m->contenu}}</p>
                  <span class="time_date"> {{$m->created_at}} </span></div>
              </div>
            </div>
            @endif

            @if ($m->id_expeditaire != "medecin")
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>{{$m->contenu}}</p>
                <span class="time_date"> {{$m->created_at}} </span> </div>
            </div>
            @endif

        @endforeach
          
           
          <div class="type_msg">
            <form method="post" action="">
                <div class="input_msg_write">
                <input type="text" class="write_msg" name="contenu" placeholder="Type a message" />
                <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
@endsection
 
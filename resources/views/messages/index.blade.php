@extends('layouts.app')

@section('content')

<div class="container">
  <input type="hidden" id="id_utilisateur">
  <span id="h3-titre"></span>
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
          @foreach ($profil as $p)
          <div class="chat_list">
              <div class="chat_people" onclick="ajax('{{$p->pseudo}}')">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5 id="id_user">{{$p->pseudo}}<span class="chat_date"></span></h5>
              </div>
            </div>
            </div>
          @endforeach
          
            </div>
           
        </div>
        <div class="mesgs">
          <div class="msg_history">
          <div id="message"></div>
           
          </div>
          
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" id="contenu_message" placeholder="Type a message" />
              <button class="msg_send_btn" type="button" id="deleteButton"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
              <button class="msg_send_btn" type="button" id="stopRecordingButton"><i class="fa fa-stop-circle" aria-hidden="true"></i></button>
              <button class="msg_send_btn" type="button" id="envoieRecordingButton"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              <button class="msg_send_btn" type="button" id="envoie" onclick="envoyerMessageTexte()"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              <button class="msg_send_btn" type="button" id="startRecordingButton"><i class="fa fa-microphone" aria-hidden="true"></i></button>
              <button class="msg_send_btn" type="button" id="multimedia"><i class="fa fa-film" aria-hidden="true"></i></button>
            </div>
            
          <div id="timer" class="text-right">00:00:00</div>
          </div>
        </div>
      </div>
      
      
    </div>
    <script src="{{ asset('js/audio.js') }}"></script>
<script src="{{ asset('js/chrono.js') }}"></script>
<script>
   function ajax(id){
    // Make an AJAX request
    document.getElementById("id_utilisateur").value =id;
    document.getElementById("h3-titre").innerHTML ="<p>Conversation avec "+id+"</p>";


    var xhr = new XMLHttpRequest();
        xhr.open('GET', '/chat/'+id);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Update the page with the response
                document.getElementById('message').innerHTML = xhr.responseText;
            } else {
                console.log('Request failed. Returned status of ' + xhr.status);
            }
        };
        xhr.send();

   }
  
   
   function envoyerMessageTexte(){
    let formData = new FormData();
    let contenu=document.getElementById("contenu_message").value;
formData.append("type_message", "text");
formData.append("contenu", contenu);
formData.append("id_destinateur", document.getElementById("id_utilisateur").value);
formData.append("id_expeditaire","medecin");
formData.append("pseudo", document.getElementById("id_utilisateur").value);

fetch("http://localhost:8000/iknamessage", {
  method: "POST",
  body: formData
})
  .then(response => response.text())
  .then(data => {
    console.log(data);
    ajax(document.getElementById("id_utilisateur").value);
  })
  .catch(error => {
    console.error("Error:", error);
  });
   }
</script>
</div>


@endsection
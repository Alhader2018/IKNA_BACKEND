@extends('layouts.app')

@section('content')
<div class="container">

<!-- The Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Suppression !</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5>Voulez-vous vraiment supprimer cet enregistrement ?</h5> 
        <form method="POST" action="{{route('conseilspratiques.destroy')}}">
       
          <div class="mb-3">
            <input type="hidden" class="form-control" id="recipient-name" name="id" value="{{$conseilpratique[0]->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
          
      
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Oui</a>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
      </div>
    </div>
  </div>
</div>
    <div class="card">

        <div class="card-header">
        <h4>Cours</h4>
        </div>
        <div class="card-body">
        <img src="{{$upload}}{{ $conseilpratique[0]->photo }}"  width="100" height="100">
        <br>
   
        <dl class="row">
          <dt class="col-sm-3">Intitulé</dt>
          <dd class="col-sm-9">{{$conseilpratique[0]->name}}</dd>
          <dt class="col-sm-3">Description</dt>
          <dd class="col-sm-9">{{$conseilpratique[0]->description}}</dd>
        </dl>
    
       
        </div>
        <div class="card-footer">
       
          </div>
    </div>
    <br>
 



<script>
  var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  //modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
</script>
</div>
@endsection
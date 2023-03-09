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
       
          <div class="mb-3">
            
          </div>
          
      
      </div>
      <div class="modal-footer">
       <a href="{!! route('destroy_actualites', ['id' => $actualites[0]->id]) !!}" class="btn btn-primary">Oui</a>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
      </div>
    </div>
  </div>
</div>
    <div class="card">

        <div class="card-header">
        <h4>actualites</h4>
        </div>
        <div class="card-body">
       
   
        <dl class="row">
          <dt class="col-sm-3">Intitulé</dt>
          <dd class="col-sm-9">{{$actualites[0]->titre}}</dd>
          <dt class="col-sm-3">Description</dt>
          <dd class="col-sm-9">{{$actualites[0]->description}}</dd>
        </dl>
    
       
        </div>
        <div class="card-footer">
            <a href="{!! route('edit_actualites', ['id' => $actualites[0]->id]) !!}" class="btn btn-primary">Modifier</a>
             <a href="" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="actualites-{{$actualites[0]->id}}">Supprimer</a>
        
          <a href="{{route('index_actualites')}}" class="btn btn-secondary">Liste actualites</a>
       
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
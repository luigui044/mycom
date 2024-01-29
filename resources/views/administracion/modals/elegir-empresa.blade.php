 <!-- Central Modal Small -->
 <div class="modal fade" id="modalSelectEmpresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog " role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Seleccionar Empresa</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <hr>
                 <div id="campos-usuarios">
                     <form action="" method="POST">
                         @csrf
                         <select class="custom-select" multiple>
                             <option selected>Open this select menu</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                         </select>
                     </form>
                 </div>
             </div>

             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary btn-sm" data-dismiss="modal">Ingresar</button>
                 {{-- <button type="button" class="btn btn-primary btn-sm"></button> --}}
             </div>
         </div>
     </div>
 </div>
 <!-- Central Modal Small -->

 <!-- Central Modal Small -->
 <div class="modal fade" id="modalMantenimientoBancos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-lg" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Mantenimiento de bancos</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 @include('components.opciones-usuarios')
                 <hr>
                 <div id="campos-usuarios">
                     <form action="" method="POST">
                         @csrf
                         <div class="row">
                             <div class="col-md-6 form-group">
                                 <label for="noCuentaBancaria">Número de cuenta bancaria:</label>
                                 <input class="form-control form-control-sm" type="text" id="noCuentaBancaria"
                                     name="noCuentaBancaria">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label for="nombreBanco">Nombre del banco:</label>
                                 <input class="form-control form-control-sm" type="text" id="nombreBanco"
                                     name="nombreBanco">
                             </div>
                             <div class="col-md-6  form-group">
                                 <label for="cuentaCatalogo">Cuenta en el catálogo:</label>

                                 <select class="browser-default custom-select form-control-sm" id="cuentaCatalogo"
                                     name="cuentaCatalogo">
                                     <option selected>Open this select menu</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>

                             </div>


                             <div class="col-md-4 form-group">
                                 <label for="ultimoCheque">Ult. No. de Cheque emitido:</label>
                                 <input class="form-control form-control-sm" type="text" id="ultimoCheque"
                                     name="ultimoCheque">
                             </div>
                             <div class="col-md-4 form-group">
                                 <label for="saldo">Saldo según contabilidad:</label>
                                 <input class="form-control form-control-sm" type="text" id="saldo"
                                     name="saldo">
                             </div>

                             <div class="col-md-4 form-group">
                                 <label for="formatoCheque">No. formato de cheque:</label>
                                 <input class="form-control form-control-sm" type="number" id="formatoCheque"
                                     name="formatoCheque">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label for="formatoCheque">Tipo de partida a utilizar en la emisión de cheques:</label>
                                 <select class="browser-default custom-select form-control-sm" id="formatoCheque"
                                     name="formatoCheque">
                                     <option selected>Open this select menu</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>
                             </div>
                             <div class="col-md-4 form-group">
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="imprimirCheck"
                                         name="imprimirCheck">
                                     <label class="custom-control-label" for="imprimirCheck">Imprimir cheque separado
                                         del voucher</label>
                                 </div>
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-md-6 form-group">
                                 <label for="haceCheque">Nombre de la persona que hace el cheque:</label>
                                 <input class="form-control form-control-sm" type="text" id="haceCheque"
                                     name="haceCheque">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label for="haceChequeCargo">Cargo de la persona que hace el cheque:</label>
                                 <input class="form-control form-control-sm" type="text" id="haceChequeCargo"
                                     name="haceChequeCargo">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label for="revisaCheque">Nombre de la persona que revisa el cheque:</label>
                                 <input class="form-control form-control-sm" type="text" id="revisaCheque"
                                     name="revisaCheque">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label for="revisaChequeCargo">Cargo de la persona que revisa el cheque:</label>
                                 <input class="form-control form-control-sm" type="text" id="revisaChequeCargo"
                                     name="revisaChequeCargo">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label for="autorizaCheque">Nombre de la persona que autoriza el cheque:</label>
                                 <input class="form-control form-control-sm" type="text" id="autorizaCheque"
                                     name="autorizaCheque">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label for="autorizaChequeCargo">Cargo de la persona que autoriza el cheque:</label>
                                 <input class="form-control form-control-sm" type="text" id="autorizaChequeCargo"
                                     name="autorizaChequeCargo">
                             </div>
                         </div>
                     </form>
                 </div>
             </div>


         </div>
     </div>
 </div>
 <!-- Central Modal Small -->

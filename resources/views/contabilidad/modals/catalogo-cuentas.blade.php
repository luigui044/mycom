 <!-- Central Modal Small -->
 <div class="modal fade" id="modalCatalogoCuentas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-xl" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Catálgo de cuentas</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div id="opciones-usuario">
                     <a class="btn btn-primary btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Nuevo"><i class="far fa-file"></i></a>
                     <a class="btn btn-secondary btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Guardar"><i class="far fa-save"></i></i></a>
                     <a class="btn btn-warning btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Modificar"><i class="fas fa-edit"></i></a>
                     <a class="btn btn-danger btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Eliminar"><i class="far fa-trash-alt"></i></a>
                     <a class="btn btn-info btn-sm btn-rounded font-options" data-toggle="popover" data-placement="top"
                         data-trigger="hover" title="Buscar"><i class="fas fa-binoculars"></i></a>
                     <a class="btn btn-indigo btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Imprimir"><i class="fas fa-print"></i></a>
                     <a class="btn btn-elegant btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Deshacer"><i class="fas fa-undo"></i></a>
                     <a class="btn btn-mdb-color btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Primer Registro - P"><i
                             class="fas fa-step-backward"></i></a>
                     <a class="btn btn-mdb-color btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Anterior - A"><i
                             class="fas fa-caret-left"></i></a>

                     <a class="btn btn-mdb-color btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Siguiente - S"><i
                             class="fas fa-caret-right"></i>
                     </a>
                     <a class="btn btn-mdb-color btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Último Registro"><i
                             class="fas fa-step-forward"></i></a>

                 </div>
                 <hr>
                 <div id="campos-usuarios">
                     <form action="" method="POST">
                         @csrf
                         <div class="row">
                             <div class="col-md-3">
                                 <div class="form-group ">
                                     <label for="codigo">Código de Cuenta</label>
                                     <input type="text" class="form-control" id="codigo" name="codigo">
                                 </div>
                             </div>
                             <div class="col-md-9">
                                 <div class="form-group ">
                                     <label for="nCuenta">Nombre de la Cuenta</label>
                                     <input type="text" class="form-control" id="nCuenta" name="nCuenta">
                                 </div>
                             </div>
                             <div class="col-md-5">
                                 <div class="form-group ">
                                     <label for="codigoPadre">Código de cuenta padre(según nivel jerárquico)</label>
                                     <input type="text" class="form-control" id="nCuenta" name="nCuenta">
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group ">
                                     <label for="jerarquia">Nivel jerárquico</label>
                                     <input type="text" class="form-control" id="jerarquia" name="jerarquia">
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="form-group ">
                                     <label for="categoria">Cargar como cuenta de</label>
                                     <select class="custom-select" id="categoria" name="categoria">
                                         <option selected>Open this select menu</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="form-group ">
                                     <label for="tipo">Cargar como cuenta de</label>
                                     <select class="custom-select" id="tipo" name="tipo">
                                         <option selected>Open this select menu</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-8"></div>
                             <div class="col-md-3"></div>
                             <div class="col-md-6">
                                 <div class="card">
                                     <div class="card-body">
                                         <h5 class="card-title text-primary text-bold">Acumulados del ejercicio:</h5>
                                         <div class="row ">

                                             <div class="col-md-12 form-group">

                                                 <label for="saldoInicial">Saldo inicial</label>
                                                 <input type="text" class="form-control" id="saldoInicial"
                                                     name="saldoInicial">

                                             </div>
                                             <div class="col-md-12 form-group">

                                                 <label for="cargos">Cargos</label>
                                                 <input type="text" class="form-control" id="cargos"
                                                     name="cargos">

                                             </div>
                                             <div class="col-md-12 form-group">

                                                 <label for="abonos">Abonos</label>
                                                 <input type="text" class="form-control" id="abonos"
                                                     name="abonos">

                                             </div>
                                             <div class="col-md-12 form-group">

                                                 <label for="saldoFinal">Abonos</label>
                                                 <input type="text" class="form-control" id="saldoFinal"
                                                     name="saldoFinal">

                                             </div>




                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CERRAR</button>
                 {{-- <button type="button" class="btn btn-primary btn-sm"></button> --}}
             </div>
         </div>
     </div>
 </div>
 <!-- Central Modal Small -->

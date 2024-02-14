 <!-- Central Modal Small -->
 <div class="modal fade" id="modalCatalogoAfp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-lg" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Catálogo de AFP's</h4>
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
                             <div class="col-md-4 form-group">
                                 <label for="email">Nombre de la AFP:</label>
                                 <input class="form-control form-control-sm" type="text" id="nombre"
                                     name="nombre">
                             </div>
                             <div class="col-md-4 form-group">
                                 <label for="porcentajePatron">% de aporte patronal:</label>
                                 <input class="form-control form-control-sm" type="text" id="porcentajePatron"
                                     name="password">
                             </div>
                             <div class="col-md-4 form-group">
                                 <label for="porcentajeEmpleado">% de cotización laboral:</label>
                                 <input class="form-control form-control-sm" type="text" id="porcentajeEmpleado"
                                     name="porcentajeEmpleado">
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

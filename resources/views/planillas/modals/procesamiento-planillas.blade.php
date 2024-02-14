 <!-- Central Modal Small -->
 <div class="modal fade" id="modalProcesamientoPlanillas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-lg" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Cálculo de planillas 1 y 2 (Permanente y Eventual)</h4>
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
                                 <button class="btn btn-primary">Command 1</button>
                             </div>
                             <div class="col-md-6 ">
                                 <div class="form-group">
                                     <label for="fecha">Fecha de planilla:</label>
                                     <input class="form-control form-control-sm" type="date" id="fecha"
                                         name="fecha">
                                 </div>

                                 <div class="form-group">
                                     <label for="codPlanilla">Código de planilla:</label>
                                     <input class="form-control form-control-sm" type="text" id="codPlanilla"
                                         name="codPlanilla">
                                 </div>

                                 <div class="form-group">
                                     <label for="codPlanilla">Tipo de planilla a calcular:</label>
                                     <div class="form-check">
                                         <input type="radio" class="form-check-input" id="tipoBalance1"
                                             name="tipoBalance">
                                         <label class="form-check-label" for="tipoBalance1">1. Permanente</label>
                                     </div>

                                     <!-- Material checked -->
                                     <div class="form-check">
                                         <input type="radio" class="form-check-input" id="tipoBalance2"
                                             name="tipoBalance" checked>
                                         <label class="form-check-label" for="tipoBalance1">2. Eventual</label>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="codPlanilla">Tipo de tabla a aplicar para cálculo de renta:</label>
                                     <div class="form-check">
                                         <input type="radio" class="form-check-input" id="tipoBalance1"
                                             name="tipoBalance">
                                         <label class="form-check-label" for="tipoBalance1">Quincenal</label>
                                     </div>

                                     <!-- Material checked -->
                                     <div class="form-check">
                                         <input type="radio" class="form-check-input" id="tipoBalance2"
                                             name="tipoBalance" checked>
                                         <label class="form-check-label" for="tipoBalance1">Mensual</label>
                                     </div>
                                 </div>

                             </div>
                             <div class="col-md-12 text-center">
                                 <!-- Default unchecked -->
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                     <label class="custom-control-label" for="defaultUnchecked">Calcular horas extras
                                         en base al salario mínimo diario</label>
                                 </div>
                             </div>


                         </div>

                     </form>
                 </div>
             </div>

             <div class="modal-footer">
                 <button class="btn btn-success" type="submit">Aceptar</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-door-open"></i>
                     Salir</button>
                 {{-- <button type="button" class="btn btn-primary btn-sm"></button> --}}
             </div>
         </div>
     </div>
 </div>
 <!-- Central Modal Small -->

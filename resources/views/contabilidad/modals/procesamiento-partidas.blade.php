 <!-- Central Modal Small -->
 <div class="modal fade" id="modalProcesamientoPartidas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-xl" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Procesamiento de partidas</h4>
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
                     <a class="btn btn-secondary btn-sm btn-rounded font-options" data-toggle="popover"
                         data-placement="top" data-trigger="hover" title="Copiar partida"><i
                             class="fas fa-copy"></i></a>

                 </div>
                 <hr>
                 <div id="campos-usuarios">
                     <form action="" method="POST" class="form-inline ">
                         @csrf
                         <div class="row">
                             <div class="col-md-5 mb-2">
                                 <div class="form-group">
                                     <label for="codigo" class="mx-2">Fecha de la partida:</label>
                                     <input type="text" class="form-control" id="codigo" name="codigo">
                                 </div>
                             </div>
                             <div class="col-md-5 mb-2">
                                 <div class="form-group">
                                     <label for="tpartida" class="mx-2">Tipo de partida: </label>

                                     <select class="browser-default custom-select form-control-sm" id="tpartida"
                                         name="tpartida">
                                         <option selected>Open this select menu</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-5 mb-2">
                                 <div class="form-group ">
                                     <label for="nCuenta" class="mx-2">No. de la partida: </label>
                                     <input type="text" class="form-control" id="nCuenta" name="nCuenta">
                                 </div>
                             </div>
                             <div class="col-md-6 mb-2">
                                 <div class="form-group ">
                                     <label for="nCuenta" class="mx-2">No. de la partida: </label>
                                     <textarea name="conceptoPartida" id="conceptoPartida" class="form-control" cols="30" rows="3"></textarea>
                                 </div>

                             </div>
                             <div class="col-md-6">

                                 <button class="btn btn-primary btn-sm">Búsqueda de cuentas</button>

                                 <button class="btn btn-primary btn-sm">Búsqueda en transacciones</button>


                             </div>

                             <div class="col-md-6">
                                 <span class="text-primary">Ordenar por:</span>
                                 <button class="btn btn-primary btn-sm">Digitación</button>
                                 <button class="btn btn-primary btn-sm">Tipo de partida</button>
                                 <button class="btn btn-primary btn-sm">Fecha de part.</button>

                             </div>
                             <div class="col-md-12">
                                 <table class="table table-bordered table-striped text-center">
                                     <thead class="bg-dark text-white">
                                         <tr>
                                             <th>Cod. cuenta</th>
                                             <th>Concepto de la transacción</th>
                                             <th>Debe</th>
                                             <th>Haber</th>
                                         </tr>

                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>
                                                 0000000
                                             </td>
                                             <td>
                                                 concepto 1
                                             </td>
                                             <td>0.00</td>
                                             <td>0.00</td>
                                         </tr>
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                             <td class="text-danger">
                                                 <h6><b> nombre de cuenta</b></h6>
                                             </td>
                                             <td class="text-right text-primary">
                                                 <h4><b>Totales:</b></h4>
                                             </td>
                                             <td> <span class="badge badge-pill badge-danger "> 0.00
                                                 </span>

                                             </td>
                                             <td> <span class="badge badge-pill badge-success "> 0.00 </span></td>
                                         </tr>
                                         <tr>
                                             <td class="text-primary" colspan="2">

                                             </td>
                                             <td colspan="">
                                                 Diferencia:
                                             </td>
                                             <td>
                                                 0.00
                                             </td>
                                         </tr>
                                     </tfoot>
                                 </table>
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

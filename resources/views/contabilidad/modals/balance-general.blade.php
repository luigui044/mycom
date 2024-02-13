 <!-- Central Modal Small -->
 <div class="modal fade" id="modalBalanceGeneral" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-lg" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Balance de comprobación</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <div id="campos-usuarios">
                     <form action="" method="POST" class=" ">
                         @csrf
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="card">
                                     <div class="card-body">
                                         <div class="row mb-1">
                                             <div class="col-md-12">
                                                 <div class="form-group form-inline">
                                                     <label for="fecIni" class="mx-2">Mes y ejercicio para generar
                                                         saldo: </label>
                                                     <select class="browser-default custom-select form-control-sm"
                                                         id="mes" name="mes">
                                                         <option selected>Open this select menu</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                     </select>
                                                     <select class="browser-default custom-select form-control-sm"
                                                         id="anio" name="anio">
                                                         <option selected>Open this select menu</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="form-group form-inline">
                                                     <label for="titulo" class="mr-1">Nivel de impresion:
                                                     </label>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input"
                                                             id="tipoBalance1" name="tipoBalance">
                                                         <label class="form-check-label"
                                                             for="tipoBalance1">Mayor</label>
                                                     </div>

                                                     <!-- Material checked -->
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input"
                                                             id="tipoBalance2" name="tipoBalance" checked>
                                                         <label class="form-check-label"
                                                             for="tipoBalance1">Detalle</label>
                                                     </div>
                                                 </div>
                                             </div>

                                         </div>
                                         <div class="row  ">

                                             <div class="col-md-12 ">
                                                 <div class="form-group ">
                                                     <label for="titulo" class="mr-1">Tipo de balance a emitir:
                                                     </label>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input"
                                                             id="tipoBalance1" name="tipoBalance">
                                                         <label class="form-check-label" for="tipoBalance1">Basado en
                                                             saldos acumulados del ejercicio</label>
                                                     </div>

                                                     <!-- Material checked -->
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input"
                                                             id="tipoBalance2" name="tipoBalance" checked>
                                                         <label class="form-check-label" for="tipoBalance1">Basado en
                                                             saldos del mes</label>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-md-12 ">
                                                 <div class="form-group form-inline">
                                                     <label for="concepto" class="mr-1">Título de reporte:
                                                     </label>
                                                     <input type="text" class="form-control" id="concepto"
                                                         name="concepto">
                                                 </div>
                                             </div>


                                         </div>
                                     </div>
                                     <div class="card-footer">
                                         <div class="row justify-content-center">
                                             <div class="col-md-4">
                                                 <button class="btn btn-primary"><i class="fas fa-search"></i> Vista
                                                     preliminar
                                                 </button>
                                             </div>
                                             <div class="col-md-3">
                                                 <button class="btn btn-success">
                                                     <i class="fas fa-file-excel"></i> Excel
                                                 </button>
                                             </div>
                                             <div class="col-md-3">
                                                 <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                                         class="fas fa-door-open"></i>CERRAR</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>


         </div>
     </div>
 </div>
 <!-- Central Modal Small -->

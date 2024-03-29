 <!-- Central Modal Small -->
 <div class="modal fade" id="modalLibroMayor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-lg" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Libro mayor</h4>
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
                                             <div class="col-md-6">
                                                 <div class="form-group form-inline">
                                                     <label for="fecIni" class="mx-2">Fecha inicial: </label>
                                                     <input type="date" class="form-control" id="fecIni"
                                                         name="fecIni">
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="form-group form-inline">
                                                     <label for="fecFin" class="mx-2">Fecha final: </label>
                                                     <input type="date" class="form-control" id="fecFin"
                                                         name="fecFin">
                                                 </div>
                                             </div>

                                         </div>
                                         <div class="row  ">

                                             <div class="col-md-12 ">
                                                 <div class="form-group form-inline">
                                                     <label for="titulo" class="mr-1">Título del reporte:
                                                     </label>
                                                     <input type="text" class="form-control" id="titulo"
                                                         name="titulo">
                                                 </div>
                                             </div>
                                             <div class="col-md-12 ">
                                                 <div class="form-group form-inline">
                                                     <label for="concepto" class="mr-1">Concepto para cada
                                                         transacción:
                                                     </label>
                                                     <input type="text" class="form-control" id="concepto"
                                                         name="concepto">
                                                 </div>
                                             </div>
                                             <div class="col-md-12 ">
                                                 <!-- Default unchecked -->
                                                 <div class="custom-control custom-checkbox">
                                                     <input type="checkbox" class="custom-control-input" id="numerar"
                                                         name="numerar">
                                                     <label class="custom-control-label" for="numerar">
                                                         Numerar páginas</label>
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

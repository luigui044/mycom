 <!-- Central Modal Small -->
 <div class="modal fade" id="modalSistema" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-xl" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Configuración del sistema</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <div id="campos-usuarios">
                     <form action="" method="POST">
                         @csrf
                         <div class="row">
                             <div class="col-md-7 form-group">
                                 <label for="deptoCheques">Nombre de la ciudad para emisión de cheques:</label>
                                 <input class="form-control form-control-sm" type="text" id="deptoCheques"
                                     name="deptoCheques" placeholder="">
                             </div>
                             <div class="col-md-6 form-group">
                                 <!-- Default inline 1-->
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                     <label class="custom-control-label" for="defaultInline1">Permitir salir del ingreso
                                         de partidas en desbalance</label>
                                 </div>
                                 <!-- Default inline 3-->
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                     <label class="custom-control-label" for="defaultInline3">Repertir el último
                                         concepto al registrar transacciones</label>
                                 </div>
                                 <!-- Default inline 2-->
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                     <label class="custom-control-label" for="defaultInline2">Colocar el nombre de la
                                         cuenta al registrar transacciones</label>
                                 </div>


                             </div>

                             <div class="col-md-6 form-group">
                                 <!-- Default inline 2-->
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                     <label class="custom-control-label" for="defaultInline2">Permitir registrar
                                         transacciones con fecha fuera del ejercicio activo</label>
                                 </div>
                                 <!-- Default inline 1-->
                                 <div class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                     <label class="custom-control-label" for="defaultInline1">Cambiar automáticamente
                                         los precios de lista al registrar compras</label>
                                 </div>
                             </div>
                             <div class="col-md-6  ">
                                 <div class="card">
                                     <div class="card-body">
                                         <h5 class="card-title text-danger text-bold">Últimos comprobantes emitidos</h5>
                                         <div class="row ">
                                             <div class="col-md-12  custom-control custom-checkbox">
                                                 <label for="name">Punto de venta:</label>

                                                 <select class="browser-default custom-select form-control-sm"
                                                     id="modulo" name="modulo">
                                                     <option selected>Open this select menu</option>
                                                     <option value="1">One</option>
                                                     <option value="2">Two</option>
                                                     <option value="3">Three</option>
                                                 </select>

                                             </div>
                                             <div class="col-md-4">

                                             </div>
                                             <div class="col-md-4"><span class="text-danger">Prefijo</span> </div>
                                             <div class="col-md-4"><span class="text-danger">Último No.</span> </div>
                                             <div class="col-md-4"><span class="custom-text-span">Crédito fiscal:</span>
                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="prefijo" name="prefijo" placeholder="">

                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="ultimoNo" name="ultimoNo" placeholder="">

                                             </div>
                                             <div class="col-md-4"><span class="custom-text-span">Factura Cons.
                                                     Final:</span>
                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="prefijo" name="prefijo" placeholder="">

                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="ultimoNo" name="ultimoNo" placeholder="">

                                             </div>
                                             <div class="col-md-4"><span class="custom-text-span">Fact. de
                                                     Exportación:</span>
                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="prefijo" name="prefijo" placeholder="">

                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="ultimoNo" name="ultimoNo" placeholder="">

                                             </div>
                                             <div class="col-md-4"><span class="custom-text-span">Nota de
                                                     Crédito:</span>
                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="prefijo" name="prefijo" placeholder="">

                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="ultimoNo" name="ultimoNo" placeholder="">

                                             </div>
                                             <div class="col-md-4"><span class="custom-text-span">Nota de
                                                     Débito:</span>
                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="prefijo" name="prefijo" placeholder="">

                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="ultimoNo" name="ultimoNo" placeholder="">

                                             </div>
                                             <div class="col-md-4"><span class="custom-text-span">Com. de
                                                     Retención:</span>
                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="prefijo" name="prefijo" placeholder="">

                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="ultimoNo" name="ultimoNo" placeholder="">

                                             </div>
                                             <div class="col-md-4"><span class="custom-text-span">Nota de
                                                     Remisión:</span>
                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="prefijo" name="prefijo" placeholder="">

                                             </div>
                                             <div class="col-md-4">

                                                 <input class="form-control form-control-sm" type="text"
                                                     id="ultimoNo" name="ultimoNo" placeholder="">

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="row">
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Fecha límite para registrar transacciones:</label>
                                         <input class="form-control form-control-sm" type="date" id="deptoCheques"
                                             name="deptoCheques" placeholder="">
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Tipo de númeración de las partidas:</label>
                                         <select class="browser-default custom-select form-control-sm" id="modulo"
                                             name="modulo">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>
                                             <option value="2">Two</option>
                                             <option value="3">Three</option>
                                         </select>
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Bodega por defecto:</label>
                                         <select class="browser-default custom-select form-control-sm" id="modulo"
                                             name="modulo">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>
                                             <option value="2">Two</option>
                                             <option value="3">Three</option>
                                         </select>
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Tipo de moneda:</label>
                                         <select class="browser-default custom-select form-control-sm" id="modulo"
                                             name="modulo">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>
                                             <option value="2">Two</option>
                                             <option value="3">Three</option>
                                         </select>
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Fecha límite para registrar transacciones:</label>
                                         <input class="form-control form-control-sm" type="number" id="deptoCheques"
                                             name="deptoCheques">
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Porcentaje de retencion:</label>
                                         <input class="form-control form-control-sm" type="number" id="deptoCheques"
                                             name="deptoCheques">
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Tipo de precio para utilizar en las ventas:</label>
                                         <input class="form-control form-control-sm" type="number" id="deptoCheques"
                                             name="deptoCheques">
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Tipo de comprobante a utilizar en las
                                             ventas:</label>
                                         <select class="browser-default custom-select form-control-sm" id="modulo"
                                             name="modulo">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>
                                             <option value="2">Two</option>
                                             <option value="3">Three</option>
                                         </select>
                                     </div>
                                     <div class="col-md-12 form-group form-inline d-flex justify-content-between">
                                         <label for="deptoCheques">Tipo de calculo de los precios de costo:</label>
                                         <select class="browser-default custom-select form-control-sm" id="modulo"
                                             name="modulo">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>
                                             <option value="2">Two</option>
                                             <option value="3">Three</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>


                     </form>
                 </div>
             </div>
         </div>

         <div class="modal-footer">
             <button type="submit" class="btn-primary">Guardar</button>
             <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                     class="fa-solid fa-floppy-disk"></i>CERRAR</button>
             {{-- <button type="button" class="btn btn-primary btn-sm"></button> --}}
         </div>
     </div>
 </div>
 </div>

 <!-- Central Modal Small -->

 <!-- Central Modal Small -->
 <div class="modal fade" id="modalEmpresas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-xl" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Empresas</h4>
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
                             <div class="col-md-12">
                                 <!-- Classic tabs -->
                                 <div class="classic-tabs">

                                     <ul class="nav tabs-indigo" id="datosGeneralesTab" role="tablist">
                                         <li class="nav-item">
                                             <a class="nav-link  waves-light active show"
                                                 id="datosGenerales-tab-classic" data-toggle="tab"
                                                 href="#datosGenerales-classic" role="tab"
                                                 aria-controls="datosGenerales-classic" aria-selected="true">Datos
                                                 generales</a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link waves-light" id="datosFiscales-tab-classic"
                                                 data-toggle="tab" href="#datosFiscales-classic" role="tab"
                                                 aria-controls="datosFiscales-classic" aria-selected="false">Datos
                                                 Fiscales</a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link waves-light" id="otros-tab-classic" data-toggle="tab"
                                                 href="#otros-classic" role="tab" aria-controls="otros-classic"
                                                 aria-selected="false">Otros</a>
                                         </li>

                                     </ul>
                                     <div class="tab-content border-right border-bottom border-left rounded-bottom"
                                         id="datosGeneralesTabContent">
                                         <div class="tab-pane fade active show" id="datosGenerales-classic"
                                             role="tabpanel" aria-labelledby="datosGenerales-tab-classic">
                                             <div class="row">
                                                 <div class="col-md-4 form-group">
                                                     <label for="codigo">Código de empresa:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="codigo" name="codigo">
                                                 </div>
                                                 <div class="col-md-4 form-group">
                                                     <label for="nombre">Nombre de la empresa:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="nombre" name="nombre">
                                                 </div>
                                                 <div class="col-md-4 form-group">
                                                     <label for="anioFiscal">Año Fiscal:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="anioFiscal" name="anioFiscal">
                                                 </div>

                                                 <div class="col-md-3 form-group ">
                                                     <label for="firmante1">Primer firmante:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="firmante1" name="firmante1">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="cargo1">Cargo:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cargo1" name="cargo1">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="firmante2">Segundo firmante:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="firmante2" name="firmante2">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="cargo2">Cargo:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cargo2" name="cargo2">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="firmante3">Tercer firmante:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="firmante3" name="firmante3">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="cargo3">Cargo:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cargo3" name="cargo3">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="firmante4">Cuarto firmante:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="firmante4" name="firmante4">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="cargo4">Cargo:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cargo4" name="cargo4">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="firmante5">Quinto firmante:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="firmante5" name="firmante5">
                                                 </div>
                                                 <div class="col-md-3 form-group ">
                                                     <label for="cargo5">Cargo:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cargo5" name="cargo5">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="tab-pane fade" id="datosFiscales-classic" role="tabpanel"
                                             aria-labelledby="datosFiscales-tab-classic">
                                             <div class="row">
                                                 <div class="col-md-2 form-group ">
                                                     <label for="noIva">No. de Registro de IVA:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="noIva" name="noIva">
                                                 </div>
                                                 <div class="col-md-2 form-group ">
                                                     <label for="noNit">No. de NIT:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="noNit" name="noNit">
                                                 </div>
                                                 <div class="col-md-4 form-group ">
                                                     <label for="tContribuyente">Tipo contribuyente:</label><br>
                                                     <!-- Default inline 1-->
                                                     <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" class="custom-control-input"
                                                             id="tContribuyente1" name="tContribuyente">
                                                         <label class="custom-control-label"
                                                             for="tContribuyente1">Pequeño</label>
                                                     </div>

                                                     <!-- Default inline 2-->
                                                     <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" class="custom-control-input"
                                                             id="tContribuyente2" name="tContribuyente">
                                                         <label class="custom-control-label"
                                                             for="tContribuyente2">Mediano</label>
                                                     </div>

                                                     <!-- Default inline 3-->
                                                     <div class="custom-control custom-radio custom-control-inline">
                                                         <input type="radio" class="custom-control-input"
                                                             id="tContribuyente3" name="tContribuyente">
                                                         <label class="custom-control-label"
                                                             for="tContribuyente3">Grande</label>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="col-md-4 form-group ">
                                                     <label for="clocales">Cuenta para el IVA Crédito Fiscal(Compras
                                                         locales):</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="clocales" name="clocales">
                                                 </div>
                                                 <div class="col-md-4 form-group ">
                                                     <label for="cImportacion">Cuenta para el IVA Crédito
                                                         Fiscal(Importaciones):</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cImportacion" name="cImportacion">
                                                 </div>
                                                 <div class="col-md-4 form-group ">
                                                     <label for="cContribuyentes">Cuenta para el IVA Débito
                                                         Fiscal(Contribuyentes):</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cContribuyentes" name="cContribuyentes">
                                                 </div>
                                                 <div class="col-md-4 form-group">
                                                     <label for="cConsumidor">Cuenta para el IVA Débito
                                                         Fiscal(Consumidor final):</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cConsumidor" name="cConsumidor">
                                                 </div>
                                                 <div class="col-md-4 form-group">
                                                     <label for="cRetenido">Cuenta para el IVA Retenido:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cRetenido" name="cRetenido">
                                                 </div>
                                                 <div class="col-md-4 form-group">
                                                     <label for="cCodigo">Código de cuenta para IVA 2%:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cCodigo" name="cCodigo">
                                                 </div>
                                                 <div class="col-md-4 form-group">
                                                     <label for="cGeneral">Código de cuenta para la caja
                                                         General:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="cGeneral" name="cGeneral">
                                                 </div>
                                                 <div class="col-md-4 form-group">
                                                     <br>
                                                     <div class="custom-control custom-checkbox">
                                                         <input type="checkbox" class="custom-control-input"
                                                             id="agentePercepcion">
                                                         <label class="custom-control-label"
                                                             for="agentePercepcion">Agente de percepción</label>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="tab-pane fade" id="otros-classic" role="tabpanel"
                                             aria-labelledby="otros-tab-classic">
                                             <div class="row">
                                                 <div class="col-md-3 form-group">

                                                     <label for="direccion">Dirección:</label>
                                                     <textarea class="form-control rounded-0" id="direccion" name="direccion" rows="3"></textarea>

                                                 </div>
                                                 <div class="col-md-4 custom-control custom-checkbox">
                                                     <label for="name">Departamento:</label>

                                                     <select class="browser-default custom-select form-control-sm"
                                                         id="modulo" name="modulo">
                                                         <option selected>Open this select menu</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                     </select>

                                                 </div>
                                                 <div class="col-md-3  custom-control custom-checkbox">
                                                     <label for="name">Municipio:</label>

                                                     <select class="browser-default custom-select form-control-sm"
                                                         id="modulo" name="modulo">
                                                         <option selected>Open this select menu</option>
                                                         <option value="1">One</option>
                                                         <option value="2">Two</option>
                                                         <option value="3">Three</option>
                                                     </select>

                                                 </div>
                                                 <div class="col-md-3 form-group">
                                                     <label for="nPatronal">Número patronal:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="nPatronal" name="nPatronal">
                                                 </div>
                                                 <div class="col-md-3 form-group">
                                                     <label for="telefonos">Teléfonos:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="telefonos" name="telefonos">
                                                 </div>
                                                 <div class="col-md-3 form-group">
                                                     <label for="actividad">Actividad económica:</label>
                                                     <input class="form-control form-control-sm" type="text"
                                                         id="actividad" name="actividad">
                                                 </div>
                                             </div>
                                         </div>

                                     </div>

                                 </div>
                                 <!-- Classic tabs -->
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

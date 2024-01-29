 <!-- Central Modal Small -->
 <div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-lg" role="document">


         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title w-100" id="myModalLabel">Administración de Usuarios</h4>
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
                                 <label for="email">Correo del usuario:</label>
                                 <input class="form-control form-control-sm" type="email" id="email"
                                     name="email" placeholder="Correo">
                             </div>
                             <div class="col-md-4 form-group">
                                 <label for="password">Contraseña:</label>
                                 <input class="form-control form-control-sm" type="password" id="password"
                                     name="password" placeholder="Contraseña">
                             </div>
                             <div class="col-md-4 form-group">
                                 <label for="Cpassword">Confirmar contraseña:</label>
                                 <input class="form-control form-control-sm" type="password" id="Cpassword"
                                     name="Cpassword" placeholder="Contraseña">
                             </div>
                             <div class="col-md-4 form-group">
                                 <label for="name">Nombre:</label>
                                 <input class="form-control form-control-sm" type="text" id="name"
                                     name="name" placeholder="Correo">
                             </div>
                             <div class="col-md-5  custom-control custom-checkbox">
                                 <br>
                                 <input type="checkbox" class="custom-control-input" id="precioVenta"
                                     name="precioVenta">
                                 <label class="custom-control-label" for="precioVenta">Permitir cambiar precios de
                                     venta</label>

                             </div>


                             <div class="col-md-4  custom-control custom-checkbox">
                                 <label for="name">Módulo:</label>

                                 <select class="browser-default custom-select form-control-sm" id="modulo"
                                     name="modulo">
                                     <option selected>Open this select menu</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>

                             </div>

                             <div class="col-md-4  custom-control custom-checkbox">
                                 <label for="name">Ménu:</label>

                                 <select class="browser-default custom-select form-control-sm" id="modulo"
                                     name="modulo">
                                     <option selected>Open this select menu</option>
                                     <option value="1">One</option>
                                     <option value="2">Two</option>
                                     <option value="3">Three</option>
                                 </select>

                             </div>
                             <div class="col-md-12 mt-2">
                                 <table class="table table-sm table-striped">
                                     <thead class="black white-text">
                                         <tr>
                                             <th scope="col">Opción</th>
                                             <th scope="col">Acceso</th>
                                             <th scope="col">Agregar</th>
                                             <th scope="col">Modificar</th>
                                             <th scope="col">Eliminar</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>

                                             <td>Seguridad(usuarios)</td>
                                             <td>
                                                 <div class="custom-control custom-checkbox">
                                                     <input type="checkbox" class="custom-control-input"
                                                         id="defaultUnchecked">
                                                     <label class="custom-control-label"
                                                         for="defaultUnchecked"></label>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="custom-control custom-checkbox">
                                                     <input type="checkbox" class="custom-control-input"
                                                         id="defaultUnchecked">
                                                     <label class="custom-control-label"
                                                         for="defaultUnchecked"></label>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="custom-control custom-checkbox">
                                                     <input type="checkbox" class="custom-control-input"
                                                         id="defaultUnchecked">
                                                     <label class="custom-control-label"
                                                         for="defaultUnchecked"></label>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="custom-control custom-checkbox">
                                                     <input type="checkbox" class="custom-control-input"
                                                         id="defaultUnchecked">
                                                     <label class="custom-control-label"
                                                         for="defaultUnchecked"></label>
                                                 </div>
                                             </td>
                                         </tr>

                                     </tbody>
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

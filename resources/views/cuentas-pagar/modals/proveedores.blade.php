<!-- Central Modal Small -->
<div class="modal fade" id="modalCuentasPagarClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Proveedores</h4>
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
                            <div class="col-md-3 form-group">
                                <label for="codProveedor">Código del proveedor</label>
                                <input type="text" name="codProveedor" id="codProveedor"
                                    class="form-control form-control-sm">
                            </div>


                            <div class="col-md-6 form-group">
                                <label for="nombre">Nombres</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nit">Número de NIT:</label>
                                <input type="text" name="nit" id="nit"
                                    class="form-control form-control-sm ">
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="noRegistro">No.registro:</label>
                                <input type="text" name="noRegistro" id="noRegistro"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="col-md-6 form-group ">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="giro">Giro:</label>
                                <input type="text" name="giro" id="giro"
                                    class="form-control form-control-sm">
                            </div>


                            <div class="col-md-3 form-group ">
                                <label for="telefono">Teléfonos</label>
                                <input type="text" name="telefono" id="telefono"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group ">
                                <label for="fax">Número de Fax</label>
                                <input type="text" name="fax" id="fax"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group ">
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="email" id="email"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="contactos">Contáctos</label>
                                <textarea name="contactos" id="contactos" class="form-control" rows="2"></textarea>
                            </div>
                            <div class="col-md-3 form-group ">
                                <label for="ctaCatalogo">Cta. en el catálogo</label>
                                <input type="text" name="ctaCatalogo" id="ctaCatalogo"
                                    class="form-control form-control-sm">
                                <span class="text-info">
                                    Proveedores locales
                                </span>
                                <a class="btn btn-info btn-sm btn-rounded font-options" data-toggle="popover"
                                    data-placement="top" data-trigger="hover" title="Buscar"><i
                                        class="fas fa-binoculars"></i></a>
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

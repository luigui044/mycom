<!-- Central Modal Small -->
<div class="modal fade" id="modalCuentasCobroClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Clientes</h4>
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
                                <label for="codCliente">Código del cliente</label>
                                <input type="text" name="codCliente" id="codCliente"
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
                            <div class="col-md-4 form-group ">
                                <label for="giro">Giro:</label>
                                <input type="text" name="giro" id="giro"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6 form-group ">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion"
                                    class="form-control form-control-sm">
                            </div>


                            <div class="col-md-3 form-group">
                                <label for="depto">Departamento</label>
                                <select class="browser-default custom-select form-control-sm" id="depto"
                                    name="depto">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="muni">Municipio</label>
                                <select class="browser-default custom-select form-control-sm" id="muni"
                                    name="muni">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-md-3 form-group ">
                                <label for="telefono">Teléfono</label>
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
                                <label for="ctaContable">Cta. Contable</label>
                                <input type="text" name="ctaContable" id="ctaContable"
                                    class="form-control form-control-sm">
                                <span class="text-info">
                                    Cuentas por cobrar - clientes
                                </span>
                                <a class="btn btn-info btn-sm btn-rounded font-options" data-toggle="popover"
                                    data-placement="top" data-trigger="hover" title="Buscar"><i
                                        class="fas fa-binoculars"></i></a>
                            </div>

                            <div class="col-md-3 form-group ">
                                <label for="limiteCredito">Límite de crédito</label>
                                <input type="text" name="limiteCredito" id="limiteCredito"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group ">
                                <label for="saldoActual">Saldo actual</label>
                                <input type="text" name="saldoActual" id="saldoActual"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3">
                                <label for="">Modalidad de facturación:</label>
                                <!-- Default inline 1-->
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input" id="modalidadFacturación1"
                                        name="modalidadFacturación">
                                    <label class="custom-control-label" for="modalidadFacturación1">Contado</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class="custom-control custom-radio ">
                                    <input type="radio" class="custom-control-input" id="modalidadFacturación2"
                                        name="modalidadFacturación">
                                    <label class="custom-control-label" for="modalidadFacturación2">Crédito</label>
                                </div>

                            </div>
                            <div class="col-md-2 form-group ">
                                <label for="diasCredito">Días de crédito</label>
                                <input type="text" name="diasCredito" id="diasCredito"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="vendedor">Vendedor que lo atiende</label>
                                <select class="browser-default custom-select form-control-sm" id="vendedor"
                                    name="vendedor">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <div class="custom-control custom-checkbox ">
                                <input class="custom-control-input " type="checkbox" value=""
                                    id="aplicarRetencion" name="aplicarRetencion" />
                                <label class="custom-control-label" for="aplicarRetencion">Aplicar retención al
                                    facturar</label>
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

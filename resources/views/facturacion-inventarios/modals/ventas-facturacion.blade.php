<!-- Central Modal Small -->
<div class="modal fade" id="modalVentasFacturacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Ventas y Facturación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="campos-usuarios">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-3 form-group">
                                <label for="puntoVenta">Punto de venta</label>
                                <select class="browser-default custom-select form-control-sm" id="puntoVenta"
                                    name="puntoVenta    ">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label for="tipoComprobante">Tipo de Comprobante</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="tipoComprobante" name="tipoComprobante">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <input class="form-control" type="text" id="noTipoComprobante"
                                    name="noTipoComprobante" />
                            </div>
                            <div class="col-lg-3">
                                <label for="fechaComprobante">Fecha de Comprobante</label>
                                <input class="form-control" type="date" id="fechaComprobante"
                                    name="fechaComprobante" />
                            </div>
                            <div class="col-lg-4">
                                <label for="codigoCliente">Código del Cliente</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="codigoCliente" name="codigoCliente">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label for="nombreCliente">Nombre</label>
                                <input class="form-control" type="text" id="nombreCliente" name="nombreCliente" />
                            </div>
                            <div class="col-lg-3">
                                <label for="noRegistro">No. Registro</label>
                                <input class="form-control" type="text" id="noRegistro" name="noRegistro" />
                            </div>
                            <div class="col-lg-6">
                                <label for="direccionCliente">Dirección</label>
                                <input class="form-control" type="text" id="direccionCliente"
                                    name="direccionCliente" />
                            </div>
                            <div class="col-lg-3">
                                <label for="municipio">Municipio</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="municipio" name="municipio">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="departamentoCliente">Departamento</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="departamentoCliente" name="departamentoCliente">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="nitDui">NIT o DUI</label>
                                <input class="form-control" type="text" id="nitDui" name="nitDui" />
                            </div>
                            <div class="col-lg-6">
                                <label for="giro">Giro</label>
                                <input class="form-control" type="text" id="giro" name="giro" />
                            </div>
                            <div class="col-lg-3">
                                <label for="notaRemision">Notas de remisión</label>
                                <input class="form-control" type="text" id="notaRemision" name="notaRemision" />
                                <button class="btn btn-info">Obt. Nota</button>
                            </div>
                            <div class="col-lg-3">
                                <label for="formaPago">Forma de Pago</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="formaPago" name="formaPago">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="diasCredito">Días de Crédito</label>
                                <input class="form-control" type="text" id="diasCredito" name="diasCredito" />
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3">
                                <label for="noPedido">Número de pedido</label>
                                <input class="form-control" type="text" id="noPedido" name="noPedido" />
                                <button class="btn btn-info">Obt. Nota</button>
                            </div>
                            <div class="col-lg-3">
                                <label for="vendedor">Vendendor</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="vendedor" name="vendedor">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="tipoVenta">Tipo de venta</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="tipoVenta" name="tipoVenta">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-3">

                            </div>
                            <div class="col-lg-3">
                                <label for="bodega">Bodega</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="bodega" name="bodega">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Código</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">T/P</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">P/venta</th>
                                            <th scope="col">%Descto</th>
                                            <th scope="col">Precio Unitario</th>
                                            <th scope="col">V. Excenta</th>
                                            <th scope="col">V. Afecta</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>%0</td>
                                            <td>Testing</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value=""
                                        id="retencion" name="retencion" />
                                    <label class="custom-control-label" for="retencion">Aplicar retención</label>
                                </div>
                            </div>

                            <div class="col-md-12 form-group form-inline justify-content-end">

                                <label for="descuentoTotal">descuento:</label>
                                <input type="number" name="descuentoTotal" id="descuentoTotal"
                                    class="form-control form-control-sm mx-2">
                                <br>
                                <label for="nit">Sub-total:</label>
                                <input type="text" name="subTotalExcento" id="subTotalExcento"
                                    class="form-control form-control-sm mx-2">
                                <input type="text" name="subTotalGravado" id="subTotalGravado"
                                    class="form-control form-control-sm">


                            </div>
                            <div class="col-md-12 form-group form-inline justify-content-end">
                                <label for="iva">IVA:</label>
                                <input type="text" name="iva" id="iva"
                                    class="form-control form-control-sm mx-2">

                            </div>
                            <div class="col-md-12 form-group form-inline justify-content-end">
                                <label for="iva">Total:</label>
                                <input type="text" name="iva" id="iva"
                                    class="form-control form-control-sm mx-2">

                            </div>
                            <div class="col-md-12 form-inline">
                                <button class="btn btn-indigo  btn-rounded mx-2"><i class="far fa-sticky-note"></i>
                                    Guardar e Imprimir</button>
                                <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal"><i
                                        class="fas fa-door-open"></i>
                                    Salir</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

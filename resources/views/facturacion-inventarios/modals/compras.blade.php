<!-- Central Modal Small -->
<div class="modal fade" id="modalCompras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Compras (cargar inventario)</h4>
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
                                <label for="noComprobante">No. comprobante</label>
                                <input type="text" name="noComprobante" id="noComprobante"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="fechaCompra">Fecha compra</label>
                                <input type="date" name="fechaCompra" id="fechaCompra"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="fechaLibro">Fecha del libro</label>
                                <input type="date" name="fechaLibro" id="fechaLibro"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <div class="custom-control custom-checkbox ">
                                    <input class="custom-control-input " type="checkbox" value=""
                                        id="inventariado" name="inventariado" />
                                    <label class="custom-control-label" for="inventariado">Aplicada al
                                        inventariado</label>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="codProveedor">Cod del proveedor:</label>
                                <input type="text" name="codProveedor" id="codProveedor"
                                    class="form-control form-control-sm ">
                                <a class="btn btn-sm btn-rounded btn-blue"> <i class="fas fa-binoculars"></i></a>
                            </div>
                            <div class="col-md-6 form-group ">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6 form-group ">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="noRegistro">No.registro:</label>
                                <input type="text" name="noRegistro" id="noRegistro"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="tipoCompra">Tipo de compra</label>
                                <select class="browser-default custom-select form-control-sm" id="tipoCompra"
                                    name="tipoCompra">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="origenCompra">Origen de compra</label>
                                <select class="browser-default custom-select form-control-sm" id="origenCompra"
                                    name="origenCompra">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="nit">Nit:</label>
                                <input type="text" name="nit" id="nit"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="formaPago">Forma de pago</label>
                                <select class="browser-default custom-select form-control-sm" id="formaPago"
                                    name="formaPago">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="fechaVencimiento">Fecha de vencimiento</label>
                                <input type="text" name="fechaVencimiento" id="fechaVencimiento"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox ">
                                    <input class="custom-control-input " type="checkbox" value=""
                                        id="percecpcion" name="percecpcion" />
                                    <label class="custom-control-label" for="percecpcion">Aplicar percepción</label>

                                </div>
                                <div class="custom-control custom-checkbox ">
                                    <input class="custom-control-input " type="checkbox" value=""
                                        id="excluirCompra" name="excluirCompra" />
                                    <label class="custom-control-label" for="excluirCompra">Excluir del libro de
                                        compras</label>

                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="bodega">Bodega</label>
                                <select class="browser-default custom-select form-control-sm" id="bodega"
                                    name="bodega">
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
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Precio Unitario</th>
                                            <th scope="col">Total Excento</th>
                                            <th scope="col">Total Grabado</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>Testing</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-12 form-group form-inline justify-content-end">
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
                                    Crear Producto</button>
                                <button class="btn btn-danger   btn-rounded mx-2"><i class="fas fa-trash"></i>
                                    Eliminar Item...</button>
                                <button class="btn btn-indigo  btn-rounded mx-2">Aplicar al Inventario</button>
                                <button class="btn btn-indigo  btn-rounded mx-2">Revertir Aplicación...</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

<!-- Central Modal Small -->
<div class="modal fade" id="modalPedidosMercaderia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Pedidos de mercadería(de clientes)</h4>
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
                        <div class="row mb-4">
                            <div class="col-lg-3 form-group">
                                <label for="noPedido">No Pedido</label>
                                <input class="form-control" type="text" id="noPedido" name="noPedido" />
                            </div>
                            <div class="col-lg-3 form-group">
                                <label for="fecha">Fecha</label>
                                <input class="form-control" type="date" id="fecha" name="fecha" />

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
                                <label for="direccionCliente">Dirección de cliente</label>
                                <input class="form-control" type="text" id="direccionCliente"
                                    name="direccionCliente" />
                            </div>


                            <div class="col-lg-3">
                                <label for="nitDui">Orden de compra</label>
                                <input class="form-control" type="text" id="nitDui" name="nitDui" />
                            </div>



                            <div class="col-md-12">
                                <button class="btn-info btn btn-rounded">
                                    Agregar detalle...
                                </button>
                                <button class="btn btn-info btn-rounded">
                                    Buscar producto...
                                </button>
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

                                            <th scope="col">%Descto</th>
                                            <th scope="col">Precio Unitario</th>
                                            <th scope="col">Precio total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>

                                            <td>%0</td>
                                            <td>Testing</td>
                                            <td>0.00</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>



                            <div class="col-md-12 form-group form-inline justify-content-end">
                                <label for="iva">Total:</label>
                                <input type="text" name="iva" id="iva"
                                    class="form-control form-control-sm mx-2">

                            </div>


                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

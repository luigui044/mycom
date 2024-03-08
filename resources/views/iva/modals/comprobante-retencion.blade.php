<!-- Central Modal Small -->
<div class="modal fade" id="modalComprobanteRetencion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Comprobante de retención</h4>
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
                                <label for="fechaCompra">Fecha de la compra</label>
                                <input type="date" name="fechaCompra" id="fechaCompra"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="fechaLibro">Fecha para libro</label>
                                <input type="date" name="fechaLibro" id="fechaLibro"
                                    class="form-control form-control-sm">
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



                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Total Excento</th>
                                            <th scope="col">Total Grabado</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>0</td>
                                            <td>test</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <td></td>
                                        <th>
                                            <h5><b>Total:</b></h5>
                                        </th>
                                        <th>
                                            <h5><b>$0.00</b></h5>
                                        </th>
                                        <th>
                                            <h5><b>$0.00</b></h5>
                                        </th>

                                    </tfoot>
                                </table>
                            </div>


                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

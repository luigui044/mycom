<!-- Central Modal Small -->
<div class="modal fade" id="modalQuedans" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Registro de quedan</h4>
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
                                <label for="codProveedor">No. QUEDAN</label>
                                <input type="text" name="codProveedor" id="codProveedor"
                                    class="form-control form-control-sm">
                            </div>


                            <div class="col-md-3 form-group">
                                <label for="fechaQuedan">Fecha de QUEDAN</label>
                                <input type="text" name="fechaQuedan" id="fechaQuedan"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="codProveedor">Código del proveedor</label>
                                <input type="text" name="codProveedor" id="codProveedor"
                                    class="form-control form-control-sm">
                                <a class="btn btn-info btn-sm btn-rounded font-options" data-toggle="popover"
                                    data-placement="top" data-trigger="hover" title="Buscar"><i
                                        class="fas fa-binoculars"></i></a>
                                <a class="btn btn-info btn-sm btn-rounded font-options" data-toggle="popover"
                                    data-placement="top" data-trigger="hover" title="Buscar">Crear proveedor</a>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="col-md-4 form-group ">
                                <label for="noRegistro">No.registro:</label>
                                <input type="text" name="noRegistro" id="noRegistro"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="fechPago">Fecha de pago</label>
                                <input type="text" name="fechPago" id="fechPago"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="col-md-6 form-group ">
                                <label for="concepto">Concepto</label>
                                <input type="text" name="concepto" id="concepto"
                                    class="form-control form-control-sm">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th scope="col">No. Comprobante</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Valor</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>


                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>Total:</td>
                                            <td class="text-danger font-weight-bold">$0.00</td>

                                        </tr>

                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-success"><i class="fas fa-plus"></i> Agregar Compra</button>
                                <button class="btn btn-danger"><i class="fas fa-minus"></i> Eliminar Compra</button>

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

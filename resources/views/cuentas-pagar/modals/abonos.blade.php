<!-- Central Modal Small -->
<div class="modal fade" id="modalIngresoAbonosProveedores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Ingreso de abonos(pagos a proveedores)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="campos-usuarios">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-4">


                            <div class="col-lg-3">
                                <label for="noRecibo">No. de Recibo</label>
                                <input class="form-control" type="date" id="noRecibo" name="noRecibo" />
                            </div>

                            <div class="col-lg-5">
                                <label for="fechaAbono">Fecha de abono</label>
                                <input class="form-control" type="date" id="fechaAbono" name="fechaAbono" />
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="codProveedor">Proveedor</label>
                                <input type="text" name="codProveedor" id="codProveedor"
                                    class="form-control form-control-sm">
                                <a class="btn btn-info btn-sm btn-rounded font-options" data-toggle="popover"
                                    data-placement="top" data-trigger="hover" title="Buscar"><i
                                        class="fas fa-binoculars"></i></a>
                            </div>


                            <div class="col-md-6 form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="col-lg-3">
                                <label for="noRegistro">NRC</label>
                                <input class="form-control" type="text" id="noRegistro" name="noRegistro" />
                            </div>
                            <div class="col-lg-3">
                                <label for="ejecutivoCobro">Ejecutivo de cobro</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="ejecutivoCobro" name="ejecutivoCobro">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-lg-3">
                                <label for="mora">Recargo por mora</label>
                                <input class="form-control" type="text" id="mora" name="mora" />
                            </div>
                            <div class="col-lg-3">
                                <label for="commision">% de comisión</label>
                                <input class="form-control" type="text" id="commision" name="commision" />
                            </div>
                            <div class="col-lg-3">
                                <label for="montoAbonar">Monto a abonar</label>
                                <input class="form-control" type="text" id="montoAbonar" name="montoAbonar" />

                            </div>

                            <div class="col-lg-6">
                                <label for="diasCredito">Concepto</label>
                                <input class="form-control" type="text" id="diasCredito" name="diasCredito" />
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Abonar?</th>
                                            <th scope="col">No. Comprobante</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Fecha Comp.</th>
                                            <th scope="col">Fecha Vencto.</th>
                                            <th scope="col">Total Comprob.</th>
                                            <th scope="col">Saldo Comprob.</th>
                                            <th scope="col">Monto a abonar</th>


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

                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"></td>
                                            <td>Total:</td>
                                            <td class="text-danger font-weight-bold">$0.00</td>
                                            <td class="text-danger font-weight-bold">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td>Pendiente de aplicar</td>
                                            <td class="text-danger font-weight-bold">$0.00</td>

                                        </tr>
                                    </tfoot>
                                </table>

                            </div>


                            <div class="col-md-12 form-inline">
                                <button class="btn btn-indigo  btn-rounded mx-2"><i class="fas fa-check"></i>
                                    Aplicar</button>
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

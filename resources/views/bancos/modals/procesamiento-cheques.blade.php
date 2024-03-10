<!-- Central Modal Small -->
<div class="modal fade" id="modalProcesamientoCheques" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                @include('components.opciones-usuarios')
                <hr>
                <div id="campos-usuarios">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-4">


                            <div class="col-md-6">
                                <label for="banco">Banco</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="banco" name="banco">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label for="noCheque">Número de cheque</label>
                                <input class="form-control" type="text" id="noCheque" name="noCheque" />
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="nombreCheque">A nombre de</label>
                                <input type="text" name="nombreCheque" id="nombreCheque"
                                    class="form-control form-control-sm">
                                <a class="btn btn-info btn-sm btn-rounded font-options" data-toggle="popover"
                                    data-placement="top" data-trigger="hover" title="Buscar"><i
                                        class="fas fa-binoculars"></i></a>
                            </div>

                            <div class="col-lg-5">
                                <label for="fechaCheque">Fecha de cheque</label>
                                <input class="form-control" type="date" id="fechaCheque" name="fechaCheque" />
                            </div>
                            <div class="col-lg-3">
                                <label for="conceptoCheque">Concepto de cheque</label>

                                <textarea name="conceptoCheque" class="form-control" id="conceptoCheque" cols="30" rows="2"></textarea>
                            </div>

                            <div class="col-lg-3">
                                <label for="valorCheque">Valor del cheque</label>
                                <input class="form-control" type="text" id="valorCheque" name="valorCheque" />
                            </div>
                            <div class="col-lg-2">
                                <label for="noPartida">No. Partida</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="noPartida" name="noPartida">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <input class="form-control" type="text" id="noPartida2" name="noPartida2" />

                            </div>


                            <div class="col-md-12">
                                <button class="btn-info  btn">
                                    Ver Cuentas
                                </button>
                            </div>




                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Cod. cuenta</th>
                                            <th scope="col">Concepto de la transacción</th>
                                            <th scope="col">Debe</th>
                                            <th scope="col">Haber</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>


                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="1"></td>
                                            <td class="text-right">Totales:</td>
                                            <td class="text-danger font-weight-bold">$0.00</td>
                                            <td class="text-danger font-weight-bold">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td class="text-right">Diferencia</td>
                                            <td class="text-danger font-weight-bold">$0.00</td>

                                        </tr>
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

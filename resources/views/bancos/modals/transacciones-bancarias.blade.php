<!-- Central Modal Small -->
<div class="modal fade" id="modalTransaccionesBancarias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">

        <div class="col-md-12 text-right">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="contabilizar" name="contabilizar">
                <label class="custom-control-label" for="contabilizar">Contabilizar</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="conciliacion" name="conciliacion">
                <label class="custom-control-label" for="conciliacion">Incluir en conciliación</label>
            </div>
        </div>
        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Procesamiento de cheques</h4>
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
                            <div class="col-lg-3">
                                <label for="tipoTransaccion">Tipo de transacción</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="tipoTransaccion" name="tipoTransaccion">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="concepto">Concepto </label>

                                <textarea name="concepto" class="form-control" id="concepto" cols="30" rows="2"></textarea>
                            </div>
                            <div class="col-lg-3">
                                <label for="fechaTransaccion">Fecha de transaccion</label>
                                <input class="form-control" type="date" id="fechaTransaccion"
                                    name="fechaTransaccion" />
                            </div>


                            <div class="col-lg-3">
                                <label for="valorCheque">Monto de la transacción</label>
                                <input class="form-control" type="text" id="valorCheque" name="valorCheque" />
                            </div>
                            <div class="col-lg-8 form-group form-inline mt-2">
                                <label for="noPartida" class="mx-2">No. Partida</label>
                                <select class="browser-default custom-select form-control mx-2 " id="noPartida"
                                    name="noPartida">
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
                            <div class="col-md-11">
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

                            <div class="col-md-1">
                                <button class="btn-info btn btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

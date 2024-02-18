<!-- Central Modal Small -->
<div class="modal fade" id="modalDepreciacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Depreciación individual</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="campos-usuarios">
                    <form action="" method="POST">
                        @csrf
                        <div class="row ">
                            <div class="col-md-6 form-group">
                                <label for="cuentaReal">Clase de Activo:</label>
                                <select class="browser-default custom-select form-control-sm"
                                    id="cuentaGastoDepreciación" name="cuentaGastoDepreciación">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-12 ">
                                <table class="table table-sm table-bordered table-striped text-center table-editable"
                                    id="table-ubicaciones">
                                    <thead class="bg-primary text-white ">
                                        <tr>
                                            <th class="font-weight-bold">Cód. Activo</th>
                                            <th class="font-weight-bold">Descripción</th>
                                            <th class="font-weight-bold">Fecha Adquisición</th>
                                            <th class="font-weight-bold">Valor Adquisición</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nombre de prueba ubicación 1</td>
                                            <td>Nombre de prueba ubicación 2</td>
                                            <td>Nombre de prueba ubicación 3</td>
                                            <td>Nombre de prueba ubicación 4</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tipo de Depreciación:</label>
                                <!-- Default inline 1-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="tipoDepreciacion1"
                                        name="tipoDepreciacion">
                                    <label class="custom-control-label" for="tipoDepreciacion1">Mensual</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="tipoDepreciacion2"
                                        name="tipoDepreciacion">
                                    <label class="custom-control-label" for="tipoDepreciacion2">Anual</label>
                                </div>

                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button class="btn btn-primary">
                                    <i class="fas fa-search"></i> Vista preliminar
                                </button>
                                <button class="btn btn-success">
                                    <i class="fas fa-file-excel"></i> Excel
                                </button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                        class="fas fa-door-open"></i> CERRAR</button>
                {{-- <button type="button" class="btn btn-primary btn-sm"></button> --}}
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->

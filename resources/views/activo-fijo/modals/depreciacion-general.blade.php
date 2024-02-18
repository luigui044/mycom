<!-- Central Modal Small -->
<div class="modal fade" id="modalDepreciacionGeneral" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                        <div class="row justify-content-center">


                            <div class="col-md-7 form-group">
                                <label for="telefono">Generar Depreciación hasta:</label>
                                <input class="form-control form-control-sm" type="date" id="fecDepre"
                                    name="fecDepre">
                            </div>

                            <div class="col-md-7 form-group">
                                <label for="claseActivo">Clase de Activo:</label>
                                <select class="browser-default custom-select form-control-sm" id="claseActivo"
                                    name="claseActivo">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-7 form-group">
                                <label for="codigoGasto">Código de gasto:</label>
                                <select class="browser-default custom-select form-control-sm" id="codigoGasto"
                                    name="codigoGasto">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-7 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="activosDepreciados"
                                        name="activosDepreciados">
                                    <label class="custom-control-label" for="activosDepreciados">Incluir activos
                                        depreciados</label>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary">
                                    <i class="fas fa-search"></i> Vista preliminar
                                </button>
                                <button class="btn btn-success">
                                    <i class="fas fa-file-excel"></i> Excel
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                        class="fas fa-door-open"></i> Salir</button>
                            </div>




                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

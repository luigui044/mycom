<!-- Central Modal Small -->
<div class="modal fade" id="modalLibroBancos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Libro de bancos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="campos-usuarios">
                    <form action="" method="POST" class=" ">
                        @csrf
                        <div class="row">
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
                            <div class="col-md-3">
                                <label for="mes">Mes</label>
                                <select class="browser-default custom-select form-control form-control-sm mb-2"
                                    id="mes" name="mes">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-3">

                                <label for="anio">Año</label>
                                <input class="form-control" type="number" id="anio" name="anio" />

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <button class="btn btn-primary"><i class="fas fa-search"></i> Vista
                                    preliminar
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success">
                                    <i class="fas fa-file-excel"></i> Excel
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                        class="fas fa-door-open"></i>CERRAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

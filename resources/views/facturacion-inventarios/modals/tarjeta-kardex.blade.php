<!-- Central Modal Small -->
<div class="modal fade" id="modalTarjetaKardex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Ventas y Facturación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="campos-usuarios">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-12 form-group">
                                <label for="bodega">Bodega</label>
                                <select class="browser-default custom-select form-control-sm" id="bodega"
                                    name="bodega">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="codProducto">Código de producto</label>
                                <select class="browser-default custom-select form-control-sm" id="codProducto"
                                    name="codProducto">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <span class="text-danger">* En blanco para generar todos</span>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="nombreProducto">Nombre de producto</label>
                                <input class="form-control" type="text" id="nombreProducto" name="nombreProducto"
                                    readonly />
                            </div>
                            <div class="col-lg-3 form-group">
                                <label for="fecInicio">Desde Fecha:</label>

                                <input class="form-control" type="text" id="fecInicio" name="fecInicio" />
                            </div>
                            <div class="col-lg-3 form-group">
                                <label for="fecFinal">Hasta Fecha:</label>

                                <input class="form-control" type="text" id="fecFinal" name="fecFinal" />
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

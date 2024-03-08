<!-- Central Modal Small -->
<div class="modal fade" id="modalLibroVentasContribuyentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Imprimir el libro de ventas a contribuyentes
                </h4>
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
                                <label for="puntoVenta">Punto de venta</label>
                                <select class="browser-default custom-select form-control-sm" id="puntoVenta"
                                    name="puntoVenta">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label for="mesImpreso">Mes a imprimir</label>
                                <select class="browser-default custom-select form-control-sm" id="mesImpreso"
                                    name="mesImpreso">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-lg-3 form-group">
                                <label for="anio">Año</label>
                                <input type="number" name="anio" id="anio" class="form-control">
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="custom-control custom-checkbox ">
                                    <input class="custom-control-input " type="checkbox" value=""
                                        id="incluirEncbezado" name="incluirEncbezado" />
                                    <label class="custom-control-label" for="incluirEncbezado">Incluir encabezados en el
                                        libro</label>
                                </div>
                                <div class="custom-control custom-checkbox ">
                                    <input class="custom-control-input " type="checkbox" value=""
                                        id="incluirNumeroPagina" name="incluirNumeroPagina" />
                                    <label class="custom-control-label" for="incluirNumeroPagina">Incluir número de
                                        página</label>
                                </div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <label for="inicioNumeracion">Comenzar numeración desde</label>
                                <input type="number" name="inicioNumeracion" id="inicioNumeracion"
                                    class="form-control">
                            </div>
                            <div class="col-lg-5 form-group">
                                <label for="mesImpreso">Formato de impresión</label>
                                <select class="browser-default custom-select form-control-sm" id="mesImpreso"
                                    name="mesImpreso">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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

<!-- Central Modal Small -->
<div class="modal fade" id="modalArchivos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Clasificaciones de activo fijo</h4>
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
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <label for="codigoActivo">Código del activo:</label>

                            </div>
                            <div class="col-md-3 form-group">
                                <input class="form-control form-control-sm" type="text" id="codigoActivo"
                                    name="codigoActivo">
                            </div>
                            <div class="col-md-3 form-group">
                                <input class="form-control form-control-sm" type="text" id="codigoActivo2"
                                    name="codigoActivo2">
                            </div>
                            <div class="col-md-3 ">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="despreciable"
                                        name="despreciable">
                                    <label class="custom-control-label" for="despreciable">Despreciable</label>
                                </div>
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="descCorta">Descripción corta:</label>
                                <input class="form-control form-control-sm" type="text" id="descCorta"
                                    name="desCorta">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="tipoActivo">Tipo de Activo:</label>
                                <select class="browser-default custom-select form-control-sm" id="tipoActivo"
                                    name="tipoActivo">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-8 form-group">
                                <label for="descDetallada">Descripción detallada:</label>
                                <textarea name="descDetallada" id="descDetallada" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label for="estado">Estado:</label>
                                    <select class="browser-default custom-select form-control-sm" id="estado"
                                        name="estado">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="ubicacion">Ubicación:</label>
                                    <select class="browser-default custom-select form-control-sm" id="ubicacion"
                                        name="ubicacion">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="marca">Marca:</label>
                                    <input class="form-control form-control-sm" type="text" id="marca"
                                        name="marca">
                                </div>
                                <div class="form-group">
                                    <label for="serie">No. serie:</label>
                                    <input class="form-control form-control-sm" type="text" id="serie"
                                        name="serie">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="modelo">Modelo:</label>
                                    <input class="form-control form-control-sm" type="text" id="modelo"
                                        name="modelo">
                                </div>
                                <div class="form-group">
                                    <label for="estilo">Estilo:</label>
                                    <input class="form-control form-control-sm" type="text" id="modelo"
                                        name="modelo">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="color">Color:</label>
                                    <input class="form-control form-control-sm" type="text" id="color"
                                        name="color">
                                </div>
                                <div class="form-group">
                                    <label for="anio">Año:</label>
                                    <input class="form-control form-control-sm" type="text" id="anio"
                                        name="anio">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header bg-primary text-white font-weight-bold">
                                        Adquisición
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="proveedor">Ubicación:</label>
                                                    <select class="browser-default custom-select form-control-sm"
                                                        id="proveedor" name="proveedor">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fecAdquisicion">Fecha:</label>
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="fecAdquisicion" name="fecAdquisicion">
                                                </div>
                                                <div class="form-group">
                                                    <label for="montoAdquisicion">Monto:</label>
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="montoAdquisicion" name="montoAdquisicion">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="facturaAdquisicion">Factura:</label>
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="facturaAdquisicion" name="facturaAdquisicion">
                                                </div>
                                                <div class="form-group">
                                                    <label for="noChequeAdquisicion">No.Cheque:</label>
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="noChequeAdquisicion" name="noChequeAdquisicion">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-white font-weight-bold">
                                        Depreciación
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="vidaUtil">vida util en años:</label>
                                                    <input class="form-control form-control-sm" type="number"
                                                        id="vidaUtil" name="vidaUtil">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cuotaAnual">Cuota Anual:</label>
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="cuotaAnual" name="cuotaAnual">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cuotaMensual">Cuota mensual:</label>
                                                    <input class="form-control form-control-sm" type="text"
                                                        id="cuotaMensual" name="cuotaMensual">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cuentaRealActivo">Cuenta Real del Activo:</label>
                                    <select class="browser-default custom-select form-control-sm"
                                        id="cuentaRealActivo" name="cuentaRealActivo">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cuentaGastoDepreciacion">Cuenta de Gasto o Depreciación:</label>
                                    <select class="browser-default custom-select form-control-sm"
                                        id="cuentaGastoDepreciacion" name="cuentaGastoDepreciacion">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cuentaDepreciacionAcumulada">Cuenta de Depreciación acumulada:</label>
                                    <select class="browser-default custom-select form-control-sm"
                                        id="cuentaDepreciacionAcumulada" name="cuentaDepreciacionAcumulada">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valorResidual">Valor Residual:</label>
                                    <input class="form-control form-control-sm" type="text" id="valorResidual"
                                        name="valorResidual">
                                </div>
                                <div class="form-group">
                                    <label for="fecIniDepreciacion">Fecha inicial para depreciación:</label>
                                    <input class="form-control form-control-sm" type="text"
                                        id="fecIniDepreciacion" name="fecIniDepreciacion">
                                </div>
                                <div class="form-group">
                                    <label for="vencGarantia">Vencimiento de la garantía:</label>
                                    <input class="form-control form-control-sm" type="text" id="vencGarantia"
                                        name="vencGarantia">
                                </div>
                                <div class="form-group">
                                    <label for="personaResponsable">Personal responsable:</label>
                                    <input class="form-control form-control-sm" type="text"
                                        id="personaResponsable" name="personaResponsable">
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CERRAR</button>
                {{-- <button type="button" class="btn btn-primary btn-sm"></button> --}}
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->

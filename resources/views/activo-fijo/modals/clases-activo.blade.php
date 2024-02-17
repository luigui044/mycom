<!-- Central Modal Small -->
<div class="modal fade" id="modalClaseActivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                            <div class="col-md-12 form-group">
                                <label for="descripcion">Descripción:</label>
                                <input class="form-control form-control-sm" type="text" id="descripcion"
                                    name="descripcion">
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="despreciable"
                                        name="despreciable">
                                    <label class="custom-control-label" for="despreciable">Despreciable</label>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cuentaReal">Cuenta Real del Activo:</label>
                                    <select class="browser-default custom-select form-control-sm" id="cuentaReal"
                                        name="cuentaReal">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="cuentaReal">Cuenta de Gasto o Dpreciación:</label>
                                    <select class="browser-default custom-select form-control-sm"
                                        id="cuentaGastoDepreciación" name="cuentaGastoDepreciación">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cuentaReal">Cuenta de Depreciación acumulada:</label>
                                    <select class="browser-default custom-select form-control-sm"
                                        id="cuentaDepreAcumulada" name="cuentaGastoDepreciación">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="todosActivos"
                                        name="todosActivos">
                                    <label class="custom-control-label" for="defaultUnchecked">Utilizar automáticamente
                                        cuentas para todos los activos</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">

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

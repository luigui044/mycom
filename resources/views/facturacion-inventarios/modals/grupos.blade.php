<!-- Central Modal Small -->
<div class="modal fade" id="modalGrupos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                @include('components.opciones-usuarios')
                <hr>
                <div id="campos-usuarios">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="codGrupo">Código de Grupo</label>
                                <input type="text" name="codGrupo" id="codGrupo" class="form-control">
                            </div>
                            <div class="col-md-6     form-group">
                                <label for="codGrupo">Nombre de Grupo</label>
                                <input type="text" name="nombreGrupo" id="nombreGrupo" class="form-control">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="codGrupo">porcentaje de Utilidad 1</label>
                                <input type="number" name="porcUtilidad1" id="porcUtilidad1" class="form-control">
                                <span class="text-danger font-weight-bold">(Utilizado para precio de venta 1)</span>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="codGrupo">porcentaje de Utilidad 2</label>
                                <input type="number" name="porcUtilidad2" id="porcUtilidad2" class="form-control">
                                <span class="text-danger font-weight-bold">(Utilizado para precio de venta 2)</span>

                            </div>
                            <div class="col-md-3 form-group">
                                <label for="codGrupo">porcentaje de Utilidad 3</label>
                                <input type="number" name="porcUtilidad3" id="porcUtilidad3" class="form-control">
                                <span class="text-danger font-weight-bold">(Utilizado para precio de venta 3)</span>

                            </div>
                            <div class="col-md-3 form-group">
                                <label for="codGrupo">porcentaje de Utilidad 4</label>
                                <input type="number" name="porcUtilidad4" id="porcUtilidad4" class="form-control">
                                <span class="text-danger font-weight-bold">(Utilizado para precio de venta 4)</span>

                            </div>
                            <div class="col-md-5 form-group">
                                <label for="codGrupo">Último correlativo de producto ingresado</label>
                                <input type="number" name="ultimoCorrrelativo" id="ultimoCorrrelativo"
                                    class="form-control">
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-inline">
                                    <label for="codGrupo">Cuenta contable de inventarios:</label>
                                    <input type="text" name="ultimoCorrrelativo" id="ultimoCorrrelativo"
                                        class="form-control">
                                    <a class="btn btn-sm btn-rounded btn-blue"> <i class="fas fa-binoculars"></i></a>
                                    <br>
                                    <span class="text-info font-weight-bold">(Cuenta de Inventario)</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-inline">
                                    <label for="codGrupo">Cuenta contable de ingresos:</label>
                                    <input type="text" name="ultimoCorrrelativo" id="ultimoCorrrelativo"
                                        class="form-control">
                                    <a class="btn btn-sm btn-rounded btn-blue"> <i class="fas fa-binoculars"></i></a>
                                    <br>
                                    <span class="text-info font-weight-bold">(Cuenta de Ingresos)</span>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-inline">
                                    <label for="codGrupo">Cuenta contable de costos:</label>
                                    <input type="text" name="ultimoCorrrelativo" id="ultimoCorrrelativo"
                                        class="form-control">
                                    <a class="btn btn-sm btn-rounded btn-blue"> <i class="fas fa-binoculars"></i></a>
                                    <br>
                                    <span class="text-info font-weight-bold">(Cuenta de Costos)</span>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-inline">
                                    <label for="codGrupo">Cuenta contable de descuentos/devoluciones:</label>
                                    <input type="text" name="ultimoCorrrelativo" id="ultimoCorrrelativo"
                                        class="form-control">
                                    <a class="btn btn-sm btn-rounded btn-blue"> <i class="fas fa-binoculars"></i></a>
                                    <br>
                                    <span class="text-info font-weight-bold">(Cuenta de Rebaja y Devoluciones)</span>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Central Modal Small -->

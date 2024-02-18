<!-- Central Modal Small -->
<div class="modal fade" id="modalUbicaciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
                                <table class="table table-sm table-bordered table-striped text-center table-editable"
                                    id="table-ubicaciones">
                                    <thead class="bg-primary text-white ">
                                        <tr>
                                            <th class="font-weight-bold">NOMBRE DE LA UBICACIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nombre de prueba ubicación 1</td>
                                        </tr>
                                        <tr>
                                            <td>Nombre de prueba ubicación 2</td>
                                        </tr>
                                        <tr>
                                            <td>Nombre de prueba ubicación 3</td>
                                        </tr>
                                        <tr>
                                            <td>Nombre de prueba ubicación 4</td>
                                        </tr>
                                    </tbody>
                                </table>
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

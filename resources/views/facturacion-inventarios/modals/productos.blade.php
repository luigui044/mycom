<!-- Central Modal Small -->
<div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">
            <div class="modal-header bg-primary text-white ">
                <h4 class="modal-title font-weight-bold" id="myModalLabel">Producto y/o servicio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('components.opciones-usuarios')
                <button class="btn btn-info btn-sm">
                    Producto compuesto...
                </button>
                <hr>
                <div id="campos-usuarios">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="grupo">Grupo</label>
                                <select class="browser-default custom-select form-control-sm" id="grupo"
                                    name="grupo">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="grupo">Sub-Grupo</label>

                                <select class="browser-default custom-select form-control-sm" id="subGrupo"
                                    name="subGrupo">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="codProducto">Código del producto</label>
                                <input type="text" name="codProducto" id="codProducto"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-7 form-group">
                                <label for="descProducto">Descripción del producto</label>
                                <input type="text" name="descProducto" id="descProducto"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="fechaIngreso">Fecha de ingreso</label>
                                    <input type="date" name="fechaIngreso" id="fechaIngreso"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="unidadMedida">Unidad de medida</label>
                                    <input type="text" name="unidadMedida" id="unidadMedida"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="precioCosto">Precio de costo</label>
                                    <input type="text" name="precioCosto" id="precioCosto"
                                        class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <!-- Default checkbox -->
                                <div class="custom-control custom-checkbox ">
                                    <input class="custom-control-input " type="checkbox" value=""
                                        id="inventariado" name="inventariado" />
                                    <label class="custom-control-label" for="inventariado">Inventariado</label>
                                </div>

                                <!-- Checked checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="inactivo"
                                        name="inactivo" />
                                    <label class="custom-control-label" for="inactivo">Inactivo</label>
                                </div>
                                <!-- Default checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="excento"
                                        name="excento" />
                                    <label class="custom-control-label" for="excento">Excento</label>
                                </div>

                                <!-- Checked checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value=""
                                        id="productoCompuesto" name="productoCompuesto" />
                                    <label class="custom-control-label" for="productoCompuesto">Producto
                                        Compuesto</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Precios de venta (No incluyen IVA)
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="precio1">Precio 1:</label>
                                                    <input type="number " name="precio1" id="precio1"
                                                        class="form-control form-control-sm">
                                                    <input type="text" name="precioText1" id="precioText1"
                                                        class="form-control form-control-sm">

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="precio2">Precio 2:</label>
                                                    <input type="number" name="precio2" id="precio2"
                                                        class="form-control">
                                                    <input type="text" name="precioText2" id="precioText2"
                                                        class="form-control form-control-sm">

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="precio3">Precio 3:</label>
                                                    <input type="number" name="precio3" id="precio3"
                                                        class="form-control form-control-sm">
                                                    <input type="text" name="precioText3" id="precioText3"
                                                        class="form-control form-control-sm">

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="precio4">Precio 4:</label>
                                                    <input type="number" name="precio4" id="precio4"
                                                        class="form-control  form-control-sm">
                                                    <input type="text" name="precioText4" id="precioText4"
                                                        class="form-control form-control-sm">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="existenciaMin">Existencia miníma:</label>
                                    <input type="text" name="existenciaMin" id="existenciaMin"
                                        class="form-control  form-control-sm">
                                </div>



                            </div>
                            <div class="col-md-3 form-group">
                                <label for="existenciaMax">Existencia máxima:</label>
                                <input type="text" name="existenciaMax" id="existenciaMax"
                                    class="form-control  form-control-sm">
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="existenciaActual">Existencia actual:</label>
                                <input type="text" name="existenciaActual" id="existenciaActual"
                                    class="form-control  form-control-sm">
                            </div>
                            <div class="col-md-5 form-group">
                                <label for="existenciaActual">Información Adicional:</label>
                                <textarea name="existenciaActual" id="existenciaActual" class="form-control  form-control-sm"></textarea>
                            </div>
                            <div class="col-md-4">
                                <div class="file-field">
                                    <div class="z-depth-1-half mb-4 text-center">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.webp"
                                            class="img-fluid" id="selectedImage" name='selectedImage'
                                            alt="example placeholder">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-mdb-color btn-rounded float-left">
                                            <span>Cambiar fotografía...</span>
                                            <input type="file"
                                                onchange="displaySelectedImage(event, 'selectedImage')">
                                        </div>
                                    </div>
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

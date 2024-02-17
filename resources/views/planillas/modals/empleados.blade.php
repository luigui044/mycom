 <!-- Central Modal Small -->
 <div class="modal fade" id="modalEmpleados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

     <!-- Change class .modal-sm to change the size of the modal -->
     <div class="modal-dialog modal-xl" role="document">


         <div class="modal-content">
             <div class="modal-header bg-primary text-white ">
                 <h4 class="modal-title font-weight-bold" id="myModalLabel">Empleados</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 @include('components.opciones-usuarios')
                 <div id="campos-usuarios">
                     <form action="" method="POST" class="">
                         @csrf
                         <ul class="nav nav-tabs nav-justified md-tabs grey font-weight-bold" id="myTabJust"
                             role="tablist">
                             <li class="nav-item ">
                                 <a class="nav-link active" id="datos-personales-1-tab" data-toggle="tab"
                                     href="#datos-personales-1" role="tab" aria-controls="datos-personales-1"
                                     aria-selected="true">Datos personales 1</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" id="datos-personales-2-tab" data-toggle="tab"
                                     href="#datos-personales-2" role="tab" aria-controls="datos-personales-2"
                                     aria-selected="false">Datos personales 2</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" id="datos-personales-3-tab" data-toggle="tab"
                                     href="#datos-personales-3" role="tab" aria-controls="datos-personales-3"
                                     aria-selected="false">Experiencia, Datos Laborales y Beneficiarios</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" id="datos-personales-4-tab" data-toggle="tab"
                                     href="#datos-personales-4" role="tab" aria-controls="datos-personales-4"
                                     aria-selected="false">Información Adicional</a>
                             </li>
                         </ul>
                         <div class="tab-content card pt-5" id="myTabContentJust">
                             <div class="tab-pane fade show active" id="datos-personales-1" role="tabpanel"
                                 aria-labelledby="datos-personales-1-tab">
                                 <div class="row">
                                     <div class="col-md-3 form-group">
                                         <label for="idEmpleado">Id empleado:</label>
                                         <input class="form-control form-control-sm" type="text" id="idEmpleado"
                                             name="idEmpleado">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="nombres">Nombres:</label>
                                         <input class="form-control form-control-sm" type="text" id="nombres"
                                             name="nombres">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="apellidos">Apellidos:</label>
                                         <input class="form-control form-control-sm" type="text" id="apellidos"
                                             name="apellidos">
                                     </div>
                                     <div class="col-md-6 form-group">
                                         <label for="nombreCompleto">Nombres según ISSS:</label>
                                         <input class="form-control form-control-sm" type="text" id="nombreCompleto"
                                             name="nombreCompleto">
                                     </div>
                                     <div class="col-md-12 form-group">
                                         <label for="direccion">Dirección Particular:</label>
                                         <textarea class="form-control form-control-sm" name="direccion" id="direccion" cols="30" rows="3"></textarea>

                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="telefono1">Telefóno:</label>
                                         <input class="form-control form-control-sm" type="text" id="telefono1"
                                             name="telefono1">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="telefono2">Celular:</label>
                                         <input class="form-control form-control-sm" type="text" id="telefono2"
                                             name="telefono2">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="identificacion">No. de cédula o DUI:</label>
                                         <input class="form-control form-control-sm" type="text"
                                             id="identificacion" name="identificacion">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="identificacion">Extendida en:</label>
                                         <input class="form-control form-control-sm" type="text"
                                             id="identificacion" name="identificacion">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="fecExpedicion">Fecha de expedición de DUI:</label>
                                         <input class="form-control form-control-sm" type="date"
                                             id="fecExpedicion" name="fecExpedicion">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="fecNacimiento">Fecha de expedición de nacimiento:</label>
                                         <input class="form-control form-control-sm" type="date"
                                             id="fecNacimiento" name="fecNacimiento">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="edad">Edad:</label>
                                         <input class="form-control form-control-sm" type="number" id="edad"
                                             name="edad">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="nacionalidad">Nacionalidad:</label>
                                         <input class="form-control form-control-sm" type="text" id="nacionalidad"
                                             name="nacionalidad">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="numeroDeNit">Número de NIT:</label>
                                         <input class="form-control form-control-sm" type="text" id="numeroDeNit"
                                             name="numeroDeNit">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="nivelEstudio">Nivel de estudio:</label>
                                         <input class="form-control form-control-sm" type="text" id="nivelEstudio"
                                             name="nivelEstudio">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="noLicencia">No. de licencia de conducir:</label>
                                         <input class="form-control form-control-sm" type="text" id="noLicencia"
                                             name="noLicencia">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="noIsss">Número de ISSS:</label>
                                         <input class="form-control form-control-sm" type="text" id="noIsss"
                                             name="noIsss">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="noNup">Número de NUP:</label>
                                         <input class="form-control form-control-sm" type="text" id="noNup"
                                             name="noNup">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="clase">Clase:</label>
                                         <input class="form-control form-control-sm" type="text" id="clase"
                                             name="clase">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="estatura">Estatura(m):</label>
                                         <input class="form-control form-control-sm" type="text" id="estatura"
                                             name="estatura">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="sexo">Sexo:</label>
                                         <select class="browser-default custom-select" name="sexo" id="sexo">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>

                                         </select>
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="tSangre">Tipo de sangre:</label>
                                         <input class="form-control form-control-sm" type="text" id="tSangre"
                                             name="tSangre">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="peso">Peso(lb):</label>
                                         <input class="form-control form-control-sm" type="text" id="peso"
                                             name="peso">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="profesion">Profesión y Oficio:</label>
                                         <input class="form-control form-control-sm" type="text" id="profesion"
                                             name="profesion">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="estadoCivil">Estado Civil:</label>
                                         <select class="browser-default custom-select" name="estadoCivil"
                                             id="estadoCivil">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>

                                         </select>
                                     </div>
                                 </div>

                             </div>
                             <div class="tab-pane fade" id="datos-personales-2" role="tabpanel"
                                 aria-labelledby="datos-personales-2-tab">
                                 <div class="row">
                                     <div class="col-md-5 form-group">
                                         <label for="especialSignals">Señales especiales:</label>
                                         <input class="form-control form-control-sm" type="text"
                                             id="especialSignals" name="especialSignals">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="nombreConyuge">Nombre del conyuge:</label>
                                         <input class="form-control form-control-sm" type="text"
                                             id="nombreConyuge" name="nombreConyuge">
                                     </div>
                                     <div class="col-md-5 form-group">
                                         <label for="trabajoConyuge">Lugar de trabajo del conyuge:</label>
                                         <input class="form-control form-control-sm" type="text"
                                             id="trabajoConyuge" name="trabajoConyuge">
                                     </div>
                                     <div class="col-md-4 form-group">
                                         <label for="nombrePadre">Nombre del padre:</label>
                                         <input class="form-control form-control-sm" type="text" id="nombrePadre"
                                             name="nombrePadre">
                                     </div>
                                     <div class="col-md-4 form-group">
                                         <label for="nombreMadre">Nombre de la madre:</label>
                                         <input class="form-control form-control-sm" type="text" id="nombreMadre"
                                             name="nombreMadre">
                                     </div>
                                     <div class="col-md-5 form-group">
                                         <label for="tContactos">Contactos:</label>
                                         <input class="form-control form-control-sm" type="text" id="tContactos"
                                             name="tContactos">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="fecIngreso">Fecha de Ingreso:</label>
                                         <input class="form-control form-control-sm" type="date" id="fecIngreso"
                                             name="fecIngreso">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="fecContratacion">Fecha de Contratación:</label>
                                         <input class="form-control form-control-sm" type="date"
                                             id="fecContratacion" name="fecContratacion">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="fecContratacion">Salario Ordinario(mensual):</label>
                                         <input class="form-control form-control-sm" type="text"
                                             id="fecContratacion" name="fecContratacion">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="banco">Banco en la que posee la cuenta:</label>
                                         <select class="browser-default custom-select" name="banco" id="banco">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>

                                         </select>
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="noCuentaBanco">Número de la cuenta:</label>
                                         <input class="form-control form-control-sm" type="text"
                                             id="noCuentaBanco" name="noCuentaBanco">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="afp">AFP a la que pertenece:</label>
                                         <select class="browser-default custom-select" name="afp" id="afp">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>

                                         </select>
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="porcentajeAfp">% AFP:</label>
                                         <select class="browser-default custom-select" name="porcentajeAfp"
                                             id="porcentajeAfp">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>

                                         </select>
                                         <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="descuentoISSS"
                                                 name="descuentoISSS">
                                             <label class="custom-control-label" for="descuentoISSS">Aplicar descuento
                                                 ISSS</label>
                                         </div>

                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="deptoTrabajo">Departamento:</label>
                                         <select class="browser-default custom-select" name="deptoTrabajo"
                                             id="deptoTrabajo">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>

                                         </select>
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="Cargo">Cargo:</label>
                                         <input class="form-control form-control-sm" type="text" id="Cargo"
                                             name="Cargo">
                                     </div>
                                     <div class="col-md-3 form-group">
                                         <label for="Tcontratacion">Tipo de contratación:</label>
                                         <select class="browser-default custom-select" name="Tcontratacion"
                                             id="Tcontratacion">
                                             <option selected>Open this select menu</option>
                                             <option value="1">One</option>

                                         </select>
                                     </div>

                                 </div>
                             </div>
                             <div class="tab-pane fade" id="datos-personales-3" role="tabpanel"
                                 aria-labelledby="datos-personales-3-tab">
                                 <div class="row">
                                     <div class="col-md-12 mb-2">
                                         <div class="card">
                                             <div class="card-header bg-primary text-white font-weight-bold">
                                                 Experiencia y Referencias Laborales
                                             </div>
                                             <div class="card-body">
                                                 <div class="row">
                                                     <div class="col-md-6 ">
                                                         <div class="form-group mb-1">
                                                             <label for="refEmpresa1">Empresa:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refEmpresa1" name="refEmpresa1">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refCargo1">Cargo:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refCargo1" name="refCargo1">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refJefe1">Jefe:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refJefe1" name="refJefe1">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refTiempo1">Tiempo de trabajo:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refTiempo1" name="refTiempo1">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refMotivoRetiro1">Motivo de retiro:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refMotivoRetiro1"
                                                                 name="refMotivoRetiro1">
                                                         </div>
                                                     </div>
                                                     <div class="col-md-6">
                                                         <div class="form-group mb-1">
                                                             <label for="refEmpresa2">Empresa:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refEmpresa2" name="refEmpresa2">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refCargo2">Cargo:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refCargo2" name="refCargo2">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refJefe2">Jefe:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refJefe2" name="refJefe2">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refTiempo2">Tiempo de trabajo:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refTiempo2" name="refTiempo2">
                                                         </div>
                                                         <div class="form-group mb-1">
                                                             <label for="refMotivoRetiro2">Motivo de retiro:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refMotivoRetiro2"
                                                                 name="refMotivoRetiro2">
                                                         </div>
                                                     </div>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-12 mb-2">
                                         <div class="card">
                                             <div class="card-header bg-primary text-white font-weight-bold">
                                                 Referencias Personales
                                             </div>
                                             <div class="card-body">
                                                 <div class="row">
                                                     <div class="col-md-9">
                                                         <div class="form-group mb-1">
                                                             <label for="refPersonal1">Nombre:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refPersonal1"
                                                                 name="refPersonal1">
                                                         </div>

                                                     </div>
                                                     <div class="col-md-3">
                                                         <div class="form-group mb-1">
                                                             <label for="refPersonalTel1">Teléfono:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refPersonalTel1"
                                                                 name="refPersonalTel1">
                                                         </div>
                                                     </div>
                                                     <div class="col-md-9">
                                                         <div class="form-group mb-1">
                                                             <label for="refPersonal2">Nombre:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refPersonal2"
                                                                 name="refPersonal2">
                                                         </div>

                                                     </div>
                                                     <div class="col-md-3">
                                                         <div class="form-group mb-1">
                                                             <label for="refPersonalTel2">Teléfono:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refPersonalTel2"
                                                                 name="refPersonalTel2">
                                                         </div>
                                                     </div>
                                                     <div class="col-md-9">
                                                         <div class="form-group mb-1">
                                                             <label for="refPersonal3">Nombre:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refPersonal3"
                                                                 name="refPersonal3">
                                                         </div>

                                                     </div>
                                                     <div class="col-md-3">
                                                         <div class="form-group mb-1">
                                                             <label for="refPersonalTel3">Teléfono:</label>
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="refPersonalTel3"
                                                                 name="refPersonalTel3">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-12 mb-2">
                                         <div class="card">
                                             <div class="card-header bg-primary">
                                                 Beneficiarios Seguro de Vida
                                             </div>
                                             <div class="card-body">
                                                 <div class="row">
                                                     <div class="col-md-7">
                                                         <label for="">Nombre:</label>
                                                         <div class="form-group mb-1">
                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="beneficiario1"
                                                                 name="beneficiario1">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="beneficiario2"
                                                                 name="beneficiario1">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="beneficiario3"
                                                                 name="beneficiario3">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="beneficiario4"
                                                                 name="beneficiario4">
                                                         </div>
                                                     </div>
                                                     <div class="col-md-3">
                                                         <label for="">Parentesco</label>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="parentescoBeneficiario1"
                                                                 name="parentescoBeneficiario1">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="parentescoBeneficiario2"
                                                                 name="parentescoBeneficiario2">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="parentescoBeneficiario3"
                                                                 name="parentescoBeneficiario3">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="parentescoBeneficiario4"
                                                                 name="parentescoBeneficiario4">
                                                         </div>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label for="">Porcentaje</label>

                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="porcentaBeneficiario1"
                                                                 name="porcentaBeneficiario1">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="porcentaBeneficiario2"
                                                                 name="porcentaBeneficiario2">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="porcentaBeneficiario3"
                                                                 name="porcentaBeneficiario3">
                                                         </div>
                                                         <div class="form-group mb-1">

                                                             <input class="form-control form-control-sm"
                                                                 type="text" id="porcentaBeneficiario4"
                                                                 name="porcentaBeneficiario4">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="datos-personales-4" role="tabpanel"
                                 aria-labelledby="datos-personales-4-tab">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="eventos">Eventos o apuntes al expediente:</label>
                                             <textarea class="form-control" name="eventos" id="eventos" cols="30" rows=""></textarea>
                                         </div>
                                         <div class="form-group">
                                             <label for="infoAdicional">Información adicional:</label>
                                             <textarea class="form-control" name="infoAdicional" id="infoAdicional" cols="30" rows=""></textarea>
                                         </div>
                                         <div class="form-group">
                                             <label for="situacionEmpleado">Situación del empleado:</label>
                                             <select class="browser-default custom-select" name="situacionEmpleado"
                                                 id="situacionEmpleado">
                                                 <option selected>Open this select menu</option>
                                                 <option value="1">One</option>

                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
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
                             </div>
                         </div>
                     </form>
                 </div>
             </div>


         </div>
     </div>
 </div>



 <!-- Central Modal Small -->

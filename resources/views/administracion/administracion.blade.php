@extends('layouts.master-layout')

@section('content')
    <div class="row vh-100 m-0 mt-5 justify-content-center">
        <div class="col-md-3 text-center">
            <!-- Card -->
            <div class="card indigo white-text">
                <div class="card-body pb-0">
                    <i class="fas fa-users fa-3x pb-4"></i>
                    <div class="d-flex justify-content-center">
                        <p class="mb-0 h6">Administración de usuarios</p>
                        {{-- <p class="mb-0 hour">12:15 PM</p> --}}
                    </div>
                </div>
                <hr style="color: white; background: white;">
                <div class="card-body pt-0">
                    <a id="usuariosBtn" onclick="activeModal('modalUsuarios')" class="btn btn-rounded btn-dark">Acceder</a>

                </div>
            </div>
            <!-- Card -->
        </div>
        <div class="col-md-3 text-center">
            <!-- Card -->
            <div class="card indigo white-text">
                <div class="card-body pb-0">
                    <i class="fas fa-building fa-3x pb-4"></i>
                    <div class="d-flex justify-content-center">
                        <p class="mb-0 h6">Empresas</p>
                        {{-- <p class="mb-0 hour">12:15 PM</p> --}}
                    </div>
                </div>
                <hr style="color: white; background: white;">
                <div class="card-body pt-0">
                    <a onclick="activeModal('modalEmpresas')" class="btn btn-rounded btn-dark">Acceder</a>

                </div>
            </div>
            <!-- Card -->
        </div>
        <div class="col-md-3 text-center">
            <!-- Card -->
            <div class="card indigo white-text">
                <div class="card-body pb-0">
                    <i class="fas fa-cogs fa-3x pb-4"></i>
                    <div class="d-flex justify-content-center">
                        <p class="mb-0 h6">Configuración de sistema</p>
                        {{-- <p class="mb-0 hour">12:15 PM</p> --}}
                    </div>
                </div>
                <hr style="color: white; background: white;">
                <div class="card-body pt-0">
                    <a onclick="" class="btn btn-rounded btn-dark">Acceder</a>

                </div>
            </div>
            <!-- Card -->
        </div>
        <div class="col-md-3 text-center">
            <!-- Card -->
            <div class="card indigo white-text">
                <div class="card-body pb-0">
                    <i class="fas fa-layer-group fa-3x pb-4"></i>
                    <div class="d-flex justify-content-center">
                        <p class="mb-0 h6">Seleccionar otra empresa</p>
                        {{-- <p class="mb-0 hour">12:15 PM</p> --}}
                    </div>
                </div>
                <hr style="color: white; background: white;">
                <div class="card-body pt-0">
                    <a class="btn btn-rounded btn-dark">Acceder</a>

                </div>
            </div>
            <!-- Card -->
        </div>
    </div>
@endsection
@section('modal')
    @include('administracion.modals.usuarios')

    @include('administracion.modals.empresas')
@endsection

@section('custom-scripts')
    <script>
        function activeModal(title) {

            $('#' + title).modal('toggle');
        }
    </script>
@endsection

@section('custom-styles')
    <style>
        .font-options {
            font-size: 15px !important;
            padding: 0.5rem 0.9rem !important;
        }
    </style>
@endsection

@extends('layouts.master-layout')

@section('content')
    <div class="row vh-100 m-0 mt-5 justify-content-center">
        @foreach ($subModulos as $item)
            @include('components.submodulo', [
                'icon' => $item->icon,
                'color' => $item->color,
                'title' => $item->desc,
                'link' => $item->enlace,
                'darken' => $item->darken,
            ])
        @endforeach


    </div>
@endsection
@section('modal')
    {{-- @include('administracion.modals.usuarios')

    @include('administracion.modals.configuracion-sistema')
    @include('administracion.modals.empresas')
     --}}
    @include('activo-fijo.modals.clases-activo')

    @include('administracion.modals.elegir-empresa')
@endsection


@section('custom-scripts')
    <script>
        function activeModal(title) {

            $('#' + title).modal('toggle');
        }

        function displaySelectedImage(event, elementId) {
            const selectedImage = document.getElementById(elementId);
            const fileInput = event.target;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    selectedImage.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
@endsection

@section('custom-styles')
    <style>
        .font-options {
            font-size: 15px !important;
            padding: 0.5rem 0.9rem !important;
        }

        .custom-text-span {
            font-size: 12px;
        }
    </style>
@endsection

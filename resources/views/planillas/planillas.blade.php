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

    @include('administracion.modals.empresas')
     --}}
    @include('planillas.modals.procesamiento-planillas')

    @include('planillas.modals.catalogo-bancos')

    @include('planillas.modals.catalogo-afp')

    @include('administracion.modals.elegir-empresa')
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

        .custom-text-span {
            font-size: 12px;
        }
    </style>
@endsection

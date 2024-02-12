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
    @include('administracion.modals.elegir-empresa')
@endsection
@extends('layouts.master-layout')


@section('content')
    <div class="row vh-100 m-0 justify-content-center align-items-center">

        @foreach ($modulos as $item)
            <div class="col-md-3   text-center  ">
                <!-- Card -->
                <div
                    class="card {{ $item->color }} @if ($item->darken != '0') {{ $item->darken }} @endif white-text">
                    <div class="card-body pb-0">
                        <i class="fas {{ $item->icon }} fa-3x pb-4"></i>
                        <div class="d-flex justify-content-center">
                            <p class="mb-0 h6">{{ $item->desc }}</p>
                            {{-- <p class="mb-0 hour">12:15 PM</p> --}}
                        </div>
                    </div>
                    <hr style="color: white; background: white;">
                    <div class="card-body pt-0">
                        @if ($item->desc == 'SALIR')
                            <a onclick="salir()" class="btn btn-rounded btn-dark">
                                <b>Cerrar sesión</b>
                            </a>
                        @else
                            <a href="{{ $item->enlace }}" class="btn btn-rounded btn-dark">
                                <b> Entrar a módulo</b>
                            </a>
                        @endif
                    </div>
                </div>
                <!-- Card -->
            </div>
        @endforeach


    </div>
@endsection

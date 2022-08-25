@extends('layouts/base')
@section('body')
    @include('usuario.modal_register')
    @include('usuario.modal_login')

   <div style="position: fixed;width: 100%;z-index: 1;">@include('layouts.navbarhome')</div>
   <div style="width: 100%;visibility: hidden;">@include('layouts.navbarhome')</div>

    @yield('contenido')
    @include('util.misfilesselect_modal')
@endsection

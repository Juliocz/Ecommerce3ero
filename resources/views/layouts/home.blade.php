@extends('layouts/base')
@section('body')
   <div style="position: fixed;width: 100%;z-index: 1;">@include('layouts.navbarhome')</div>
   <div style="width: 100%;visibility: hidden;">@include('layouts.navbarhome')</div>
    @yield('contenido')
@endsection
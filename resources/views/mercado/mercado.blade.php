@extends('layouts.base2nav')
@section('contenido')

{{-- <style>
   @media screen and (min-width: 300px) {
  #menu_categoria_boton_fixed {
    display: block!important;
  }
}
</style> --}}
<div id="menu_categoria_boton_fixed" class="mipoint_cursorscale" onclick="showhideLeftContaint()" style=" padding:10px;  position: fixed;bottom: 0px; right: 0px;margin: 5px; border-radius: 50%;display:flex;justify-content: center;align-items: center; background-color: #e2e605; z-index: 2">
    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
  </svg></div>

  <script>
    function showhideLeftContaint(){
        
        var cont_left=document.querySelector('#contenedor_left');
        
        if(cont_left.style.display=='none'){
            cont_left.style.display='grid';
        }else cont_left.style.display='none';
    }
  </script>
<div style="display: grid; grid-template-columns: auto 8fr;height: 100%;">
    <div id="contenedor_left" style="display:grid; grid-auto-rows: 60px;box-shadow: 5px 5px 24px 3px rgba(174,170,169,0.78);">
        @foreach ($categorias as $c)
        <button href="{{$c->url}}" onclick="window.location.href=this.getAttribute('href');" 
        {{-- @if ($loop->index==0) --}}
        @if($c==$categoria)
        class="btn btn-primary"
        @else
        class="btn btn-light"
        @endif
         id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-{{$c->id}}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">

        <div style="display: grid;grid-template-columns: 1fr auto">
        {{$c->nombre}}
        <img src="{{$c->icon_url}}" alt="" style="width: 25px; height: 25px; border-radius: 50%;object-fit: cover;">
        </div>
    </button>
        @endforeach
    </div>
    <div style="overflow-y: auto;height: 100%!important;">
        @if(count($categoria->categoria_banner)>0)
        @include('mercado/carruselbannercateogira')
        @endif

        <div style="padding: 10px;">
            <button type="button" class="btn btn-success">PUBLICAR AQUI: </button>
            <div>
            <label for="">Filtrar por: </label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Mas actuales</option>
                <option value="1">Mas antiguos</option>
                <option value="2">Mas visitados</option>
                <option value="3">Menos visitados</option>
                <option value="3">Usuarios vendedores</option>
              </select>
            </div>
        </div>

        <div style="display: flex;flex-wrap: wrap;justify-content: center; grid-gap: 
        20px">
            
            @for($i=0;$i<10;$i++)
            @foreach($productos_paged->data as $p)
                <div class="mipoint_cursorscale" style="background-color: #99bcc5; padding: 10px;border-radius: 10px; color: black; display: grid;">
                    @php
                    $url_imagen=null;
                    try{
                        $url_imagen=route('landing').$p->producto_imgs[0]->url_imagen;
                    } catch(Throwable $ex){} 
                    @endphp

                    <img src="{{$url_imagen}}" alt="" style="width: 200px; height: 200px; object-fit: cover">
                    <h5 style="text-align: center">{{$p->titulo}}</h5>
                    <div style="background-color: #e2e605">
                        {{$p->precio}} Bs.
                    </div>
                </div>
            @endforeach
            @endfor
        </div>
    </div>
</div>
@endsection

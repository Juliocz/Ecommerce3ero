
<div style="padding: 10px;">
    @include('dashboard.cruds.agregar_categoria_modal')
    {{-- @include('dashboard.cruds.agregar_usuario_modal') --}}
    {{-- SE CREA CLASE ADMIN USER REGISTRE, se muestra, se setea cuando guarde correctamente un usuario
    recargo la tabla automaticamente --}}
    <h2 style="text-align: center;">ADMINISTRAR CATEGORIAS GRALS. <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg></h2>
    <button class="miboton1_success" onclick="var am=AdminCategoriaRegister.show();am.setOnRegister(function(r){recargarCategorias();});">AGREGAR CATEGORIA</button>
    {{-- <button class="miboton1_success" onclick="recargarUsuarios();">RECARGAR TABLA</button> --}}
    <button class="miboton1_success" onclick="recargarCategorias();">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
          </svg>
    </button>

    <div class="d-flex">
        <input id="crud_input_find" class="form-control me-2" type="search" placeholder="Ingrese nombre o descripcion de cateogira" aria-label="Search">
        <button class="btn btn-outline-success"  onclick="recargarCategorias(this.parentNode.querySelector('#crud_input_find').value)">Buscar</button>
    </div>
    <table class="table table-dark table-hover" id="stable_categorias">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Imagen</th>
            <th scope="col">Banner</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
      <table class="table" style="display: none!important;">
        <thead>
        </thead>
        <tbody>
          <tr id="element_test_categoriagral" >
            <th id="index" scope="row">1</th>
            <td id="nombre">nombre</td>
            <td id="descripcion">apellido</td>
            <td id="estado">estado</td>
            <td id="imagen">...</td>
            <td id="banner">...</td>
            <td>
                <div style="display:grid;grid-template-columns: auto auto auto; align-items: center;">
                    <img src = "{{asset('res/admin_icon.svg')}}" class="admin_type filter_red" style="display:none;width: 20px;color:white;" alt="My Happy SVG"/>
                    <img src = "{{asset('res/user_icon.svg')}}" class="user_type filter_blue" style="display:none;width: 20px;" alt="My Happy SVG"/>
                <div class="mipoint_cursor" onclick="var obj=this.parentNode.parentNode.parentNode.something;var am=AdminCategoriaRegister.show();am.setItemToForm(obj);am.showFormMod();  am.setOnMod(function(r){recargarCategorias();});">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </div>
                <div class="mipoint_cursor" onclick="var tr_u=this.parentNode.parentNode.parentNode.something; iduser=tr_u.id;   showModalYesNoPersonalizado(function(){sa_eliminarCategoria(iduser,function(){recargarCategorias();})},null,'Eliminar usuario?','Esta seguro de eliminar a: '+tr_u.nombre+' '+tr_u.apellido);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                </div>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
</div>

<script>
    var stable_categoria=document.querySelector('#stable_categorias');
    var tr_example_cat=document.querySelector('#element_test_categoriagral');

    //recarga usuarios de api
    function recargarCategorias(find=null){
        var settings = {
        "url": "{{route('sadmin_get_categorias')}}?find="+find,
        xhrFields: {//para enviar credenciales coockies
            withCredentials: true
        },
        crossDomain: true,
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": "",
    };
    $.ajax(settings).done(function (response) {
        console.log("Usuarios traidos correctamente");
        console.log(response);
        loadCategoriasToTable(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert("Ocurrio un error al traer usuarios")
    });
    }

    //funcion que carga tabla con datos usuarios
    function loadCategoriasToTable(array){
        var elmBody=stable_categoria.querySelector('tbody');
        elmBody.innerHTML='';
        var index=1;
        for(var item of array){



            var tr=tr_example_cat.cloneNode(true);
            tr.querySelector('#index').innerHTML=index;
            tr.querySelector('#nombre').innerHTML=item.nombre;
            tr.querySelector('#descripcion').innerHTML=item.descripcion;
            tr.querySelector('#estado').innerHTML=item.estado;
            tr.querySelector('#imagen').innerHTML=item.icon_url;
            tr.querySelector('#banner').innerHTML=item.banner_url;

            tr.something=item;
            elmBody.appendChild(tr);

          index++;
        }

    }


    //eliminar usuario api
    function sa_eliminarCategoria(id,call_success=function(){},call_error=function(){}){
    var settings = {
        "url": "{{route('sadmin_categoria_delete')}}",
        xhrFields: {//para enviar credenciales coockies
            withCredentials: true
        },
        crossDomain: true,
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({"id":id}),
    };
    $.ajax(settings).done(function (response) {
        console.log("Se Elimino correctamente");
        console.log(response);
        showToastMsgSuccess("Se Elimino correctamente");
        call_success(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        try{
        if (typeof JSON.parse(jqXHR.responseText).message !== 'undefined') {showToastMsgError(JSON.parse(jqXHR.responseText).message);}
        }catch(ex){
        showToastMsgError('Ocurrio un error al eliminar');
        }
        call_error(jqXHR.responseText);
    });
  }


    //recargo usuarios
    recargarCategorias();
</script>


<style>
     .filter_red {
        filter: invert(13%) sepia(94%) saturate(7466%) hue-rotate(0deg) brightness(94%) contrast(115%);
    }

    .filter_purple {
        filter: invert(5%) sepia(78%) saturate(6858%) hue-rotate(276deg) brightness(97%) contrast(101%);
    }

    .filter_blue {
        filter: invert(12%) sepia(63%) saturate(6234%) hue-rotate(246deg) brightness(87%) contrast(156%);
    }
</style>
<div style="padding: 10px;">
    @include('dashboard.cruds.agregar_usuario_modal')
    {{-- SE CREA CLASE ADMIN USER REGISTRE, se muestra, se setea cuando guarde correctamente un usuario
    recargo la tabla automaticamente --}}
    <h2 style="text-align: center;">ADMINISTRAR USUARIOS <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg></h2>
    <button class="miboton1_success" onclick="var am=AdminUserRegister.showRegister();am.setOnRegister(function(r){recargarUsuarios();});">AGREGAR USUARIO</button>
    {{-- <button class="miboton1_success" onclick="recargarUsuarios();">RECARGAR TABLA</button> --}}
    <button class="miboton1_success" onclick="recargarUsuarios();">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
          </svg>
    </button>

    <div class="d-flex">
        <input id="crud_input_f_user" class="form-control me-2" type="search" placeholder="Ingrese nombre o apellido, usuario, estado,celular, tipo_usuario" aria-label="Search">
        <button class="btn btn-outline-success"  onclick="recargarUsuarios(document.querySelector('#crud_input_f_user').value)">Buscar</button>
    </div>
    <table class="table table-dark table-hover" id="stable_usuarios">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Celular</th>
            <th scope="col">Correo</th>
            <th scope="col">Estado</th>
            <th scope="col">Usuario</th>
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
          <tr id="element_test" >
            <th id="index" scope="row">1</th>
            <td id="nombre">nombre</td>
            <td id="apellido">apellido</td>
            <td id="celular">celular</td>
            <td id="correo">correo</td>
            <td id="estado">estado</td>
            <td >
                <div style="display:grid;grid-template-columns: 1fr auto">
                    <div id="usuario">usuario</div>

                </div>
            </td>
            <td>
                <div style="display:grid;grid-template-columns: auto auto auto; align-items: center;">
                    <img src = "{{asset('res/admin_icon.svg')}}" class="admin_type filter_red" style="display:none;width: 20px;color:white;" alt="My Happy SVG"/>
                    <img src = "{{asset('res/user_icon.svg')}}" class="user_type filter_blue" style="display:none;width: 20px;" alt="My Happy SVG"/>
                <div class="mipoint_cursor" onclick="var am=AdminUserRegister.showRegister();am.setUserToForm(this.parentNode.parentNode.parentNode.something);am.showFormMod();  am.setOnMod(function(r){recargarUsuarios();});">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </div>
                <div class="mipoint_cursor" onclick="var tr_u=this.parentNode.parentNode.parentNode.something; iduser=tr_u.id;   showModalYesNoPersonalizado(function(){sa_eliminarUsuario(iduser,function(){recargarUsuarios();})},null,'Eliminar usuario?','Esta seguro de eliminar a: '+tr_u.nombre+' '+tr_u.apellido);">
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
    var stable_user=document.querySelector('#stable_usuarios');
    var tr_example=document.querySelector('#element_test');

    //recarga usuarios de api
    function recargarUsuarios(find=null){
        var settings = {
        "url": "{{route('sadmin_get_usuarios')}}?find="+find,
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
        loadUsuariosToTable(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert("Ocurrio un error al traer usuarios")
    });
    }

    //funcion que carga tabla con datos usuarios
    function loadUsuariosToTable(array_users){
        var elmBody=stable_user.querySelector('tbody');
        elmBody.innerHTML='';
        var index=1;
        for(var user of array_users){
            var card=`<tr>
            <th scope="row">${index}</th>
            <td>${user.nombre}</td>
            <td>${user.apellido}</td>
            <td>${user.celular}</td>
            <td>${user.correo}</td>
            <td>${user.estado}</td>
            <td>${user.usuario}</td>
          </tr>`;


            var tr=tr_example.cloneNode(true);
            tr.querySelector('#index').innerHTML=index;
            tr.querySelector('#nombre').innerHTML=user.nombre;
            tr.querySelector('#apellido').innerHTML=user.apellido;
            tr.querySelector('#celular').innerHTML=user.celular;
            tr.querySelector('#correo').innerHTML=user.correo;
            tr.querySelector('#estado').innerHTML=user.estado;
            tr.querySelector('#usuario').innerHTML=user.usuario;
            switch(user.tipo_usuario){
                case 'super_admin':tr.querySelector('.admin_type').style.display='block'; break;
                case 'user_simple':tr.querySelector('.user_type').style.display='block';break;
            }
            tr.something=user;
            elmBody.appendChild(tr);


         /* console.log(card);
          console.log(String(card));
          var placeholder = document.createElement("div");
          placeholder.innerHTML =card;
          console.log(placeholder);
          var node = placeholder.firstElementChild;
          //var tr=document.createElement('div');
          //tr.innerHTML=card.trim();
          var elmtr=document.createRange().createContextualFragment(card);
          console.log("element");
          console.log(node);
          elmBody.appendChild(node);*/
          index++;
        }

    }

    //eliminar usuario api
    function sa_eliminarUsuario(id,call_success=function(){},call_error=function(){}){
    var settings = {
        "url": "{{route('sadmin_user_delete')}}",
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
    recargarUsuarios();
</script>


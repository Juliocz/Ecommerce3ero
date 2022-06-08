
<div>
    @include('dashboard.cruds.agregar_usuario_modal')
    {{-- SE CREA CLASE ADMIN USER REGISTRE, se muestra, se setea cuando guarde correctamente un usuario
    recargo la tabla automaticamente --}}
    <button class="miboton1_success" onclick="var am=AdminUserRegister.showRegister();am.setOnRegister(function(r){recargarUsuarios();});">AGREGAR USUARIO</button>
    <button class="miboton1_success" onclick="recargarUsuarios();">RECARGAR TABLA</button>
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
            <td id="usuario">usuario</td>
            <td>
                <div onclick="var am=AdminUserRegister.showRegister();am.setUserToForm(this.parentNode.parentNode.something);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </div>
                <div onclick="showModalYesNoPersonalizado(null,null,'Eliminar usuario?','Esta seguro de eliminar a: '+this.parentNode.parentNode.something.nombre+' '+this.parentNode.parentNode.something.apellido);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
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
    function recargarUsuarios(){
        var settings = {
        "url": "{{route('sadmin_get_usuarios')}}",
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
    //recargo usuarios
    recargarUsuarios();
</script>


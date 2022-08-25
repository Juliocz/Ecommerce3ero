<div class="modal fade" id="samodal_register_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: var(--theme1-bg-color)!important;">
          <h5 class="modal-title registerinputs" id="exampleModalLabel" style="color: var(--theme1-t-color)!important;">Registrars usuario admin</h5>
          <h5 class="modal-title modificarinputs" id="exampleModalLabel" style="color: var(--theme1-t-color)!important;">Modificar usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="uform_register" style="display: grid;grid-gap: 5px;" method="post" action="" onsubmit="return false;">
                @csrf
                <input type="text" id="id" name="id" value style="display: none;">
                <div style="display:flex;flex-wrap: wrap;justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombres:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Jose" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Apellidos:</label>
                  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Perez" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="JoseZZZ123" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Repetir contraseña:</label>
                  <input type="password" class="form-control" id="password_r" name="password_r" placeholder="*******" required>
                </div>
                <div class="form-group modificarinputs">
                    <label for="exampleInputPassword1">Modificar contraseña:</label>
                    <input type="checkbox" id="ismod_password" >

                </div>
                <div class="form-group modificarinputs">
                    <label for="exampleInputPassword1">Estado:</label>
                   <select name="estado" id="estado" class="form-control">
                       <option value="">Seleccionar:</option>
                       <option value="activo">Activo</option>
                       <option value="pendiente">Pendiente</option>
                       <option value="desactivado">Desactivado</option>
                   </select>
                </div>
                <div class="form-group modificarinputs">
                    <label for="exampleInputPassword1">Tipo de usuario:</label>
                   <select name="tipo_usuario" id="tipo_usuario" class="form-control modificarinputs">
                       <option value="">Seleccionar:</option>
                       <option value="super_admin">SuperAdmin</option>
                       <option value="user_simple">UserSimple</option>
                       <option value="user_shop_manager">TiendaManager</option>
                   </select>
                </div>
                <div>
                  <h4>Datos opcionales:</h4>

                  <div style="display: grid;grid-template-columns: 1fr 1fr">
                    <div style="display:grid;">
                          <label for="exampleInputPassword1">Departamento:</label>
                          <select name="departamento" id="departamento" class="form-control">
                              <option value="">Elejir:</option>
                              <option value="SCZ">SCZ</option>
                              <option value="BENI">BENI</option>
                              <option value="LA PAZ">LA PAZ</option>
                              <option value="ORURO">ORURO</option>
                              <option value="POTOSI">POTOSI</option>
                              <option value="CBBA">CBBA</option>
                              <option value="PANDO">PANDO</option>
                              <option value="CHUQUISACA">CHUQUISACA</option>
                              <option value="TARIJA">TARIJA</option>
                          </select>

                    </div>
                    <div style="display:grid;">
                          <label for="exampleInputPassword1">Celular: (max9dig.)</label>
                          <input type="number" class="form-control" name="celular" id="celular" placeholder="777-XXXXX">

                    </div>
                  </div>
                </div>

                {{-- <button type="submit" class="btn btn-primary">Registrarse</button> --}}
                <script>document.querySelector('#samodal_register_user').querySelector('#uform_register').submitted='Registrar';</script>
                <input onclick="this.form.submitted=this.value;" type="submit" name="boton" value="Registrar" class="miboton1_success registerinputs">
                <input onclick="this.form.submitted=this.value;" type="submit" name="boton" value="Modificar" class="miboton1_success modificarinputs">
                {{-- <input type="submit" class="miboton1_success" name="boton" value="registrar">Registrar usuario</button>
                <input type="submit" class="miboton1_success" id="button_modificar" name="boton" value="modificar">Modificar usuario</button> --}}
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
<script>

  class AdminUserRegister{
    constructor(){
        var thiss=this;
      this.element=document.querySelector('#samodal_register_user');
      this.form=this.element.querySelector('#uform_register');
      this.clearForm();
      this.showFormRegister();

        this.form.onsubmit=function(){
            //console.log(this.submitted);
        console.log(formToObject(this))
        //console.log($(this).serializeArray());
        //console.log(JSON.stringify(this));

          if(thiss.validarForm()){
            var user=thiss.getUserFromForm();
            console.log(user);
            switch(this.submitted){
                case 'Modificar': sa_modificarUsuario(user,thiss.onModSucess,thiss.onModError);break;
                case 'Registrar': sa_registrarUsuario(user,thiss.onRegisterSucess,thiss.onRegisterError);break;
                default:alert("default");break;
            }
              //try{
            //  var user=thiss.getUserFromForm();
             // console.log(user);
            //  sa_registrarUsuario(user,thiss.onRegisterSucess,thiss.onRegisterError);
              //}catch(ex){console.log(ex);}
            //var user=thiss.getUserFromForm();//obtengo usuario del formulario
            //console.log(user);
            //sa_registrarUsuario(user);

          }
        return false;
      }
      this.onRegisterSucess=function(){};
      this.onRegisterError=function(){};
      this.onModSucess=function(){};
        this.onModError=function(){};
    }

    showFormRegister(){
        $('.registerinputs').show();
      $('.modificarinputs').hide();

      this.setEnabledPasswordInput(true);
    }
    showFormMod(){
        $('.registerinputs').hide();
      $('.modificarinputs').show();
      var thiss=this;
      this.form.querySelector('#ismod_password').onchange=function(){
          thiss.setEnabledPasswordInput(this.checked);
      }
      this.setEnabledPasswordInput(false);
    }

    setEnabledPasswordInput(isActive){
        console.log(isActive)
        if(isActive){
        this.form.querySelector('#password').removeAttribute('disabled');
        this.form.querySelector('#password').setAttribute('enabled','');

        this.form.querySelector('#password_r').removeAttribute('disabled');
        this.form.querySelector('#password_r').setAttribute('enabled','');
        }else {
        this.form.querySelector('#password').removeAttribute('enabled');
        this.form.querySelector('#password').setAttribute('disabled','');

        this.form.querySelector('#password_r').removeAttribute('enabled');
        this.form.querySelector('#password_r').setAttribute('disabled','');
        }

        this.form.querySelector('#ismod_password').checked=isActive;
    }
    //asigno funciones desde afuera, cuando registre o de error correctamente
    setOnRegister(call_sucess=function(){},call_error=function(){}){
        this.onRegisterSucess=call_sucess;
        this.onRegisterError=call_error;
    };
    //asigno funciones desde afuera, cuando modifique o de error correctamente
    setOnMod(call_sucess=function(){},call_error=function(){}){
        this.onModSucess=call_sucess;
        this.onModError=call_error;
    };
    show(){$(this.element).modal('show');}
    hide(){$(this.element).modal('hide');}
    getUserFromForm(){
        var user=new Object();
        user.id=this.form.querySelector('#id').value;
        user.tipo_usuario=this.form.querySelector('#tipo_usuario').value;
        user.estado=this.form.querySelector('#estado').value;
        user.nombre=this.form.querySelector('#nombre').value;
        user.apellido=this.form.querySelector('#apellido').value;
        user.correo=this.form.querySelector('#correo').value;
        user.usuario=this.form.querySelector('#usuario').value;
        user.password=this.form.querySelector('#password').value;
        user.departamento=this.form.querySelector('#departamento').value;
        user.celular=this.form.querySelector('#celular').value;
        user.ismod_password=this.form.querySelector('#ismod_password').checked;
        return user;
    }
    setUserToForm(user){
        this.form.querySelector('#id').value=user.id;
        this.form.querySelector('#tipo_usuario').value=user.tipo_usuario;
        this.form.querySelector('#estado').value=user.estado;
        this.form.querySelector('#nombre').value=user.nombre;
        this.form.querySelector('#apellido').value=user.apellido;
        this.form.querySelector('#correo').value=user.correo;
        this.form.querySelector('#usuario').value=user.usuario;
        this.form.querySelector('#password').value=user.password;
        this.form.querySelector('#password_r').value=user.password;
        this.form.querySelector('#departamento').value=user.departamento;
        this.form.querySelector('#celular').value=user.celular;
        return user;
    }
    clearForm(){
        this.form.querySelector('#id').value='';
        this.form.querySelector('#tipo_usuario').value='';
        this.form.querySelector('#estado').value='';
        this.form.querySelector('#nombre').value='';
        this.form.querySelector('#apellido').value='';
        this.form.querySelector('#correo').value='';
        this.form.querySelector('#usuario').value='';
        this.form.querySelector('#password').value='';
        this.form.querySelector('#password_r').value='';
        this.form.querySelector('#departamento').value='';
        this.form.querySelector('#celular').value='';
    }
    validarForm(){
        if(this.form.querySelector('#password').value!=this.form.querySelector('#password_r').value){
            alert("Contraseñas no son iguales");
            return false;
        }else
        return true;
    }

    static showRegister(){var u=new AdminUserRegister();u.show();return u;}
  }

  function sa_registrarUsuario(user,call_success=function(){},call_error=function(){}){
    var settings = {
        "url": "{{route('sadmin_user_register')}}",
        xhrFields: {//para enviar credenciales coockies
            withCredentials: true
        },
        crossDomain: true,
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify(user),
    };
    $.ajax(settings).done(function (response) {
        console.log("Se registro correctamente");
        console.log(response);
        showToastMsgSuccess("Se registro correctamente");
        call_success(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert("Ocurrio un error al registra usuario");
        showToastMsgError('Ocurrio un error al registrar');
        call_error(jqXHR.responseText);
    });
  }


  function sa_modificarUsuario(user,call_success=function(){},call_error=function(){}){
    var settings = {
        "url": "{{route('sadmin_user_mod')}}",
        xhrFields: {//para enviar credenciales coockies
            withCredentials: true
        },
        crossDomain: true,
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify(user),
    };
    $.ajax(settings).done(function (response) {
        console.log("Se modifico correctamente");
        console.log(response);
        showToastMsgSuccess("Se modifico correctamente");
        call_success(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert("Ocurrio un error al modificar usuario");
        showToastMsgError('Ocurrio un error al modificar');
        call_error(jqXHR.responseText);
    });
  }


  //registra usuario en apiadmin
  /*function sa_registrarUsuario(user){
        var settings = {
        "url": "{{route('sadmin_user_register')}}",
        xhrFields: {//para enviar credenciales coockies
            withCredentials: true
        },
        crossDomain: true,
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify(user),,
    };
    $.ajax(settings).done(function (response) {
        console.log("Se registro correctamente");
        console.log(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert("Ocurrio un error al registra usuario");
    });
    }*/



</script>

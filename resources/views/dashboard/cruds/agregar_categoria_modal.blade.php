<div class="modal fade" id="samodal_agregar_categoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: var(--theme1-bg-color)!important;">
          <h5 class="modal-title categoriaRegistrarInputs" id="exampleModalLabel" style="color: var(--theme1-t-color)!important;">Agregar Categoria</h5>
          <h5 class="modal-title categoriaModificarInputs" id="exampleModalLabel" style="color: var(--theme1-t-color)!important;">Modificar Categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="uform" style="display: grid;grid-gap: 5px;" method="post" action="" onsubmit="return false;">
                @csrf
                <input type="text" id="id" name="id" value style="display: none;">
                <div style="display:flex;flex-wrap: wrap;justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                      </svg>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="font-weight: bold;">Nombres:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Instrumentos..." onkeydown="return event.key != 'Enter';" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="font-weight: bold;">Descripcion:</label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="En esta categoria.." onkeydown="return event.key != 'Enter';" required>
                </div>
                <div class="form-group categoriaModificarInputs">
                    <label for="exampleInputPassword1" style="font-weight: bold;">Estado:</label>
                   <select name="estado" id="estado" class="form-control" onkeydown="return event.key != 'Enter';">
                       <option value="">Seleccionar:</option>
                       <option value="activo">Activo</option>
                       <option value="pendiente">Pendiente</option>
                       <option value="desactivado">Desactivado</option>
                   </select>
                </div>
                <div style="display: grid;grid-template-columns: 1fr;justify-content: center;grid-gap: 10px">
                    <label for="" style="font-weight: bold;">Imagen icono:</label>
                    <input type="text" id="icon_url" name="icon_url" onkeydown="return event.key != 'Enter';">
                    <img src="" alt="" style="width: 50px;height: 50px;object-fit: cover;border-radius: 50%" id="add_categoria_icon">
                    <div class="miboton1_success" onclick="
                    var input_url=this.parentNode.querySelector('#icon_url');
                    var input_img=this.parentNode.querySelector('#add_categoria_icon');
                    var m=new ModalFilesSelect();
                    m.show();
                    m.chargeModalFilesSelect(function(){
                        //alert(this.something.name);
                        input_url.value=this.something.url;
                        input_img.src=this.something.url;
                        m.hide();
                    });
                    ">Elejir archivo:</div>

                    {{-- <input type="file" onchange="inputFileToImageSrc(this,this.parentNode.querySelector('#add_categoria_icon'))"> --}}

                    <label for="" style="font-weight: bold;">Imagen banner:</label>
                    <input type="text" id="banner_url" name="banner_url" onkeydown="return event.key != 'Enter';">
                    <img src="" alt="" style="width: 100%;height: 50px;object-fit: cover;" id="add_categoria_banner">
                    <div class="miboton1_success" onclick="
                    var input_url=this.parentNode.querySelector('#banner_url');
                    var input_img=this.parentNode.querySelector('#add_categoria_banner');
                    var m=new ModalFilesSelect();
                    m.show();
                    m.chargeModalFilesSelect(function(){
                        //alert(this.something.name);
                        input_url.value=this.something.url;
                        input_img.src=this.something.url;
                        m.hide();
                    });
                    ">Elejir archivo:</div>
                    {{-- <input type="file" onchange="inputFileToImageSrc(this,this.parentNode.querySelector('#add_categoria_banner'))"> --}}
                </div>

                {{-- <button type="submit" class="btn btn-primary">Registrarse</button> --}}
                <script>document.querySelector('#samodal_register_user').querySelector('#uform_register').submitted='Registrar';</script>
                <input onclick="this.form.submitted=this.value;" type="submit" name="boton" value="Registrar" class="miboton1_success categoriaRegistrarInputs">
                <input onclick="this.form.submitted=this.value;" type="submit" name="boton" value="Modificar" class="miboton1_success categoriaModificarInputs">
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

  class AdminCategoriaRegister{
    constructor(){
        var thiss=this;
      this.element=document.querySelector('#samodal_agregar_categoria');
      this.form=this.element.querySelector('#uform');
      this.clearForm();
      this.showFormRegister();

        this.form.onsubmit=function(){
            //console.log(this.submitted);
            var item=formToObject(this);
        console.log(item)


        try{
        if(thiss.validarForm()){
            switch(this.submitted){
                case 'Registrar': AdminCategoriaRegister.registrarCategoriaApi(item,thiss.onRegisterSucess,thiss.onRegisterError);break;
                case 'Modificar':
                AdminCategoriaRegister.modificarCategoriaApi(item,thiss.onModSucess,thiss.onModError);
                /*sa_registrarUsuario(user,thiss.onRegisterSucess,thiss.onRegisterError);*/break;
                default:alert("default");break;
            }
        }


        }catch(ex){console.log(ex);}
        //console.log($(this).serializeArray());
        //console.log(JSON.stringify(this));

         /* if(thiss.validarForm()){
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

          }*/
        return false;
      }
      this.showFormRegister();
      this.onRegisterSucess=function(){};
      this.onRegisterError=function(){};
      this.onModSucess=function(){};
      this.onModError=function(){};
    }

    showFormRegister(){
        $(this.element).find('.categoriaRegistrarInputs').show();
        $(this.element).find('.categoriaModificarInputs').hide();
    }
    showFormMod(){
        $(this.element).find('.categoriaRegistrarInputs').hide();
        $(this.element).find('.categoriaModificarInputs').show();
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
        /*user.id=this.form.querySelector('#id').value;
        user.tipo_usuario=this.form.querySelector('#tipo_usuario').value;
        user.estado=this.form.querySelector('#estado').value;
        user.nombre=this.form.querySelector('#nombre').value;
        user.apellido=this.form.querySelector('#apellido').value;
        user.correo=this.form.querySelector('#correo').value;
        user.usuario=this.form.querySelector('#usuario').value;
        user.password=this.form.querySelector('#password').value;
        user.departamento=this.form.querySelector('#departamento').value;
        user.celular=this.form.querySelector('#celular').value;*/
        return user;
    }
    setItemToForm(item){
        this.form.querySelector('#id').value=item.id;
        this.form.querySelector('#estado').value=item.estado;
        this.form.querySelector('#nombre').value=item.nombre;
        this.form.querySelector('#descripcion').value=item.descripcion;
        this.form.querySelector('#icon_url').value=item.icon_url;
        this.form.querySelector('#banner_url').value=item.banner_url;
        this.form.querySelector('#add_categoria_banner').src=item.banner_url;
        this.form.querySelector('#add_categoria_icon').src=item.icon_url;

       /* this.form.querySelector('#apellido').value=user.apellido;
        this.form.querySelector('#correo').value=user.correo;
        this.form.querySelector('#usuario').value=user.usuario;
        this.form.querySelector('#password').value=user.password;
        this.form.querySelector('#password_r').value=user.password;
        this.form.querySelector('#departamento').value=user.departamento;
        this.form.querySelector('#celular').value=user.celular;*/
        return item;
    }
    clearForm(){

        this.form.querySelector('#id').value='';
        this.form.querySelector('#estado').value='';
        this.form.querySelector('#nombre').value='';
        this.form.querySelector('#descripcion').value='';
        this.form.querySelector('#icon_url').value='';
        this.form.querySelector('#banner_url').value='';
        this.form.querySelector('#add_categoria_banner').src='';
        this.form.querySelector('#add_categoria_icon').src='';
       /* this.form.querySelector('#id').value='';
        this.form.querySelector('#tipo_usuario').value='';
        this.form.querySelector('#estado').value='';
        this.form.querySelector('#nombre').value='';
        this.form.querySelector('#apellido').value='';
        this.form.querySelector('#correo').value='';
        this.form.querySelector('#usuario').value='';
        this.form.querySelector('#password').value='';
        this.form.querySelector('#password_r').value='';
        this.form.querySelector('#departamento').value='';
        this.form.querySelector('#celular').value='';*/
    }
    validarForm(){
        /*if(this.form.querySelector('#password').value!=this.form.querySelector('#password_r').value){
            alert("Contraseñas no son iguales");
            return false;
        }else
        return true;*/

        return true;
    }

    static show(){var u=new AdminCategoriaRegister();u.show();return u;}

    static registrarCategoriaApi(item,call_success=function(){},call_error=function(){}){
    var settings = {
        "url": "{{route('sadmin_registrar_categorias')}}",
        xhrFields: {//para enviar credenciales coockies
            withCredentials: true
        },
        crossDomain: true,
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify(item),
    };
    $.ajax(settings).done(function (response) {
        console.log("Se registro correctamente");
        console.log(response);
        showToastMsgSuccess("Se registro correctamente");
        call_success(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert("Ocurrio un error al registra categoria");
        showToastMsgError('Ocurrio un error al registrar categoria');
        call_error(jqXHR.responseText);
    });

    }

    static modificarCategoriaApi(item,call_success=function(){},call_error=function(){}){
    var settings = {
        "url": "{{route('sadmin_modificar_categorias')}}",
        xhrFields: {//para enviar credenciales coockies
            withCredentials: true
        },
        crossDomain: true,
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify(item),
    };
    $.ajax(settings).done(function (response) {
        console.log("Se modifico correctamente");
        console.log(response);
        showToastMsgSuccess("Se modifico correctamente");
        call_success(response);
    }).fail(function (jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert("Ocurrio un error al modificar categoria");
        showToastMsgError('Ocurrio un error al modificar');
        call_error(jqXHR.responseText);
    });

    }
  }



/*
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
*/




</script>

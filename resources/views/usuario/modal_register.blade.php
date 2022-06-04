    {{-- REQUIERE
    usuario/modal_register.blade.php
    --}}
  <!-- Modal -->
  <div class="modal fade" id="modal_register_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: var(--theme1-bg-color)!important;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: var(--theme1-t-color)!important;">Registrarse</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form style="display: grid;grid-gap: 5px;" method="post" action="{{route('user_register')}}">
                @csrf
                <div style="display:flex;flex-wrap: wrap;justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombres:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Jose">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Apellidos:</label>
                  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Perez">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="JoseZZZ123">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Repetir contraseña:</label>
                  <input type="password" class="form-control" id="password_r" name="password_r" placeholder="*******">
                </div>
                <div>
                  <h4>Datos opcionales:</h4>

                  <div style="display: grid;grid-template-columns: 1fr 1fr">
                    <div style="display:grid;">
                          <label for="exampleInputPassword1">Departamento:</label>
                          <select name="departamento" id="" class="form-control">
                              <option value="">Elejir:</option>
                              <option value="SCZ">SCZ</option>
                              <option value="SCZ">BENI</option>
                              <option value="SCZ">LA PAZ</option>
                              <option value="SCZ">ORURO</option>
                              <option value="SCZ">POTOSI</option>
                              <option value="SCZ">CBBA</option>
                              <option value="SCZ">PANDO</option>
                              <option value="SCZ">CHUQUISACA</option>
                              <option value="SCZ">TARIZA</option>
                          </select>

                    </div>
                    <div style="display:grid;">
                          <label for="exampleInputPassword1">Celular:</label>
                          <input type="text" class="form-control" name="celular" id="apellido" placeholder="777-XXXXX">

                    </div>
                  </div>
                </div>

                {{-- <button type="submit" class="btn btn-primary">Registrarse</button> --}}
                <button type="submit" class="miboton1_success">Registrarse</button>
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

  class UserRegister{
    constructor(){
      this.element=document.querySelector('#modal_register_user');
    }
    show(){$(this.element).modal('show');}
    hide(){$(this.element).modal('hide');}

    static showRegister(){var u=new UserRegister();u.show();return u;}
  }
</script>

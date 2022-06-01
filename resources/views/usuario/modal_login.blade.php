    {{-- REQUIERE
    usuario/modal_register.blade.php
    --}}
  <!-- Modal -->
  <div class="modal fade" id="modal_login_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: var(--theme1-bg-color)!important;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: var(--theme1-t-color)!important;">Ingresar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form style="display: grid;grid-gap: 5px;">
                <div style="display:flex;flex-wrap: wrap;justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="JoseZZZ123">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                </div>



                {{-- <button type="submit" class="btn btn-primary">Registrarse</button> --}}
                <button type="submit" class="miboton1_success">Ingresar</button>
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

  class UserLogin{
    constructor(){
      this.element=document.querySelector('#modal_login_user');
    }
    show(){$(this.element).modal('show');}
    hide(){$(this.element).modal('hide');}

    static showLogin(){var u=new UserLogin();u.show();return u;}
  }
</script>

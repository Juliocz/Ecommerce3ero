<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('landing')}}">BSHOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">MI TIENDA VIRTUAL</a>
            </li>

          @if (!Auth::check())
            {{-- @if (Auth::user()->tipo_usuario=='super_admin')
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('admin_dashboard')}}">Dashboard Admin</a>
            </li>
            @endif
            @if (Auth::user()->tipo_usuario=='super_admin')
            <li><a class="dropdown-item" href="{{route('admin_dashboard')}}" >Mi dashboardAdmin</a></li>
            @endif --}}

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuario
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <li><a class="dropdown-item" href="#" onclick="UserLogin.showLogin();">Ingresar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" onclick="UserRegister.showRegister();" href="#">Registrarse</a></li>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->usuario}}-{{Auth::user()->tipo_usuario}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if (Auth::user()->tipo_usuario=='super_admin')
            <li><a class="dropdown-item" href="{{route('admin_dashboard')}}" >Mi dashboardAdmin</a></li>
            @endif
            <li><a class="dropdown-item" onclick="" href="{{route('upload_image_user')}}">Subir archivo</a></li>
            <li><a class="dropdown-item" onclick="" href="#">Editar mi informacion</a></li>
            <li><a class="dropdown-item" href="{{route('user_logout')}}" >Cerrar sesion</a></li>
            </ul>
          </li>

          @endif
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

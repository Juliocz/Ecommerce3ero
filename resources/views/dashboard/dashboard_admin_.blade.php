@extends('dashboard.dashboard_admin')
@section('contenido')
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    ABRIR DASHBOARD LATERAL
  </button>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Bienvenido <b>{{Auth::user()->nombre}} {{Auth::user()->apellido}}</b>:)</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Hola <b>{{Auth::user()->usuario}}</b>:)
      </div>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Usuarios
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body" style="padding:0px;">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" onclick="showTabBoostrapById('nav_crud_usuario'); $('#offcanvasExample').offcanvas('hide');">Administrar usuarios</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showTabBoostrapById('nav_crud_tiendas_virtuales'); $('#offcanvasExample').offcanvas('hide');">Tiendas virtuales</a>
                    <a href="#" class="list-group-item list-group-item-action">Administrar mi usuario</a>
                    {{-- <a href="#" class="list-group-item list-group-item-action">A fourth link item</a> --}}
                </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Categoria generales
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Tiendas virtuales
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
          </div>
        </div>
      </div>
    </div>
  </div>






{{-- <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-crud_usuario" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
    </div>
  </nav> --}}
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav_crud_usuario" role="tabpanel" aria-labelledby="nav-home-tab">crud usuarios</div>
    <div class="tab-pane fade" id="nav_crud_tiendas_virtuales" role="tabpanel" aria-labelledby="nav-profile-tab">tiendas virtuales</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
  </div>

@endsection


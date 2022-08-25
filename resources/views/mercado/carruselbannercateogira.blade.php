

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        
        @foreach ($categoria->categoria_banner as $b)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" class="{{($loop->index==0)?"active":''}}" aria-current="{{($loop->index==0)?"true":'false'}}" aria-label="Slide {{$loop->index==0}}"></button>
        @endforeach
      {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button> --}}
     
    </div>
    <div class="carousel-inner">
        @foreach ($categoria->categoria_banner as $b)
        <div class="carousel-item {{($loop->index==0)?"active":''}}">
            <img src="{{route('landing').$b->url_imagen}}" class="d-block w-100" alt="..." style="height: 300px;object-fit: cover">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@extends('layouts.app')

@section('content')
<div class="home-seccion1">
    <div id="home-carrusel" class="carousel slide" data-bs-ride="carousel" style="height: 500px">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3>MomentumDev</h3>
          </div>          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </a>
      </div>
      
</div>
@endsection

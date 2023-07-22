@extends('layout.AdminLayout')

@section('contenido')
<link rel="stylesheet" href="css.stilos.css">

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/BLOG-HEader.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/Cada.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/Compra.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/mega-alta.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="venta" style="height: 250px; background-color: #ff5f04;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3 col-lg-3 col-md-12 px-0 text-center">
                <h2 class="bold text-huge text-white mb-2 mb-md-0">¿Eres Cliente
                    WIN?</h2>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
    </div>
</div>

@endsection

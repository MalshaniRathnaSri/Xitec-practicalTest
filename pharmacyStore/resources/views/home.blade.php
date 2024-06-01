@extends('layout')

@section('extra-css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div>
<div id="carouselDarkVariant" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/pills-3673645_1280.jpg" class="d-block w-100 h-96 mx-auto" alt="Motorbike Smoke">
    </div>
    <div class="carousel-item">
      <img src="tablets-5620566_1280.jpg" class="d-block w-100 h-96 mx-auto" alt="Mountaintop">
    </div>
    <div class="carousel-item">
      <img src="medications-1851178_1280.jpg" class="d-block w-100 h-96 mx-auto" alt="Woman Reading a Book">
    </div>
    <div class="carousel-item">
      <img src="medicine-257349_1280.jpg" class="d-block w-100 h-96 mx-auto" alt="Woman Reading a Book">
    </div>
    <div class="carousel-item">
      <img src="medicine-2449619_1280.jpg" class="d-block w-100 h-96 mx-auto" alt="Woman Reading a Book">
    </div>
    <div class="carousel-item">
      <img src="thermometer-1539191_1280.jpg" class="d-block w-100 h-96 mx-auto" alt="Woman Reading a Book">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  var myCarousel = document.querySelector('#carouselDarkVariant')
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000, 
    wrap: true
  })
</script>
</div>

@endsection


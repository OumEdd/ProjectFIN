@extends('layouts.fix')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <link rel="stylesheet" href="css/accueil.css">
    <title>Ménara-Reclamation</title>
    <body>
    
      <!-- page content -->
       @section("content")
     <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active c-item">
         <img src="{{URL('images/menara3.png')}}" alt="menara-holding" class="d-block w-100 c-img" >  <div class="carousel-caption top-0 mt-4">
          <p class="mt-5 fs-3 text-uppercase">Discover the hidden world</p>
          <h1 class="display-1 fw-bolder text-capitalize">The Aurora Tours</h1>
          <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Book a tour</button>
        </div>
      </div>
      <div class="carousel-item c-item">
         <img src="{{URL('images/menara3.png')}}" alt="menara-holding" class="d-block w-100 c-img" >  <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">The season has arrived</p>
          <p class="display-1 fw-bolder text-capitalize">3 available tours</p>
          <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
            data-bs-target="#booking-modal">Book a tour</button>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="{{URL('images/menara3.png')}}" alt="menara-holding" class="d-block w-100 c-img" >  <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">Destination activities</p>
          <p class="display-1 fw-bolder text-capitalize">Go glacier hiking</p>
          <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
            data-bs-target="#booking-modal">Book a tour</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


    
  
     
@endsection
    </body>
    </html>
    
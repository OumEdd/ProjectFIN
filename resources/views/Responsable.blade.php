@extends('layouts.respwtfooter')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/responsable.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <script src="https://code.jquery.com/jquery-3.6.1.slim.min. js"></script>
     <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <title>Responsable</title>
</head>
<body>
    @section("content")
<!-- Section: Design Block -->
{{-- form responsable --}}

     <div class="container mt-4">
      <div class="row">

      <div class="col-md-6">
      <form class=" mx-auto">
        <h4 class="text-center">Responsable</h4>
   <div class="mb-4 mt-5">
    <label for="exampleInputEmail1" class="form-label">Adresse E_mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3">Se conneceter</button>
</form>
</div>





{{-- form administrateur --}}

      <div class="col-md-6">
    <form class="mx-auto">
     <h4 class="text-center">Administrateur</h4>
  <div class="mb-4 mt-5">
    <label for="exampleInputEmail1" class="form-label">Adresse E_mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3">Se conneceter</button>
</form>

          </div>
      </div>
    </div>
        
<!-- Section: Design Block -->
    @endsection
</body>
</html>
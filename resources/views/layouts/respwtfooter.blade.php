<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!--Styless-->
    <link rel="stylesheet" href={{ asset('css/navbar.css') }}>
    <link rel="stylesheet" href={{ asset('css/footer.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         {{-- javascript jquery --}}
         <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
          <script defer src="{{ asset('js/resnav.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <!-- header of pages -->
    <section class="header">

<nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="#"><a href=""><img src="{{URL('images/logo.png')}}" alt="menara-holding" width="250"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="propos">A Propos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Service
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Service_Reclamation">Soumettre une réclamation</a></li>
            <li><a class="dropdown-item" href="Service_Observation">Soumettre une observation</a></li>
            <li><a class="dropdown-item" href="Service_Suggestion">Soumettre une suggestion</a></li>

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clarification">FQA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="guide">Guide</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="equipe">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Responsable">Responsable</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</section>

 <main class="py-4">
            @yield('content')
        </main>






</body>
</html>

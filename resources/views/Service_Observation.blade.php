{{-- @extends('layouts.fix') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <link href="bootstrap_v/css/bootstrap.min.css" rel="stylesheet" />
	 <link rel="stylesheet" href={{ asset('css/css/styleForm.css') }}>
	<link rel="stylesheet" href={{ asset('css/navbar.css') }}>
    <link rel="stylesheet" href={{ asset('css/footer.css') }}>
	<link rel="stylesheet" href={{ asset('css/soume.css') }}>
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
          <script defer src="{{ asset('js/resnav.js') }}"></script>
		   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		{{-- <link rel="stylesheet" href="css/css/styleForm.css"> --}}
    <title>Service-Observation</title>
</head>
<body>
<header>
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
</header>
	{{-- -------------------------------------------------------------------------------- --}}

	{{-- paragraph --}}
 <section class="banner" id="banner" >

        <div class="container">
            <div class="row">
                <div class=" col-md-7 " id="partie1">
                   <h2 class="mb-4" id="h2">BIENVENUE SUR LA PLATEFORME <br><span id="span">MH-RECLAMATION</span> </h2>
                    <p id="p">Ménara Préfa est à votre écoute pour toute demande d'information, question, suggestion ou réclamation.
                        Si vous rencontrez un problème avec nos services, nous vous demandons de remplir tous les champs obligatoires avec des informations précises et détaillées
                        afin que nous puissions traiter votre demande de manière efficace. N'hésitez pas à nous contacter nos équipes n'hésiterons pas à vous apporter l'ensemble des élements de réponse dont vous avez besoin.
                    </p>
                    <a href="https://menara-holding.ma/index.html#" class="btnD1 mb-5">Voire Plus</a>
                </div>
                <div class=" col-md-5  pt-2" id="partie2">
                    <div class="hexagon" id="hexagon">
                        <div class="shape" id="shape">
                             <img src="{{URL("images/14.jpg")}}" alt="" id="img"> 
                             <div class="contents">
                                <div>
                                    <h2 class="pb-3" id="h3">MH-RECLAMATION</h2>
                                    <p id="pa"> Nous mettons tout en œuvre pour résoudre vos problèmes au plus vite possible, pour empêcher que cela ne se reproduise à l'avenir.  </p>
                                </div>
                             </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
  </section>

  

  {{-- -------------------------------------------------------------------------------- --}}

{{-- formulaire --}}

	<div class="wrapper">
            <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						{{-- <div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div> --}}
						<div class="form-content" >
							<div class="form-header">
								<h3>Formulaire de Réclamation</h3>
							</div>
							<p>Lieu de dêpots</p>

							<div class="form-row">
								<div class="form-holder">
									 <select class="form-select mb-5" aria-label="Default select example" id="ville" name="ville">
                            @foreach ($nom_ville as $data )
                                <option value="{{$data->id_ville}}">{{$data->nom_ville}}</option>
                            @endforeach
                        </select>  
								</div>
							</div>
					</div>
                </section>

				<!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
						{{-- <div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div> --}}
						<div class="form-content" >
							<div class="form-header">
								<h3>Formulaire de Réclamation</h3>
							</div>
							<p> Service</p>

							<div class="form-row">
								<div class="form-holder">
								<select class="form-select mb-5" aria-label="Default select example" id="service" name="service">
                             		 @foreach ($nom_serv as $data )
                                	<option value="{{$data->id_serv}}">{{$data->nom_serv}}</option>
                           			 @endforeach
                        			</select> 
                        </select>  
								</div>
							</div>
					</div>
                </section>


                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="form-content">
							<div class="form-header">
								<h3>Formulaire de Réclamation</h3>
							</div>
							<p>Votre Message</p>
							<div class="form-row">
								<div class="form-holder w-100">
									<textarea name="" id="" placeholder="" class="form-control" style="height: 99px;"></textarea>
								</div>
							</div>
						</div>
					</div>
                </section>
            </form>
		</div>


{{-- -------------------------------------------------------------------------------- --}}
 {{-- footer --}}


<footer class=" text-black  pt-5 pb-4" >
    <div class="container text-center text-md-left">
       <div class="row text-center text-md-left">

     <div class="col-md-3 col-lg-3  col-xl-3 mx-auto mt-3">
       <h4 class="text-uppercase mb-4 font-weight-bold">Ménara Préfa</h4>
       <p>
        Ménara Préfa, filiale de Ménara Holding, compte  trois domaines d’activités, comme  les bordures de trottoirs et les agglos, la production de béton prêt à l’emploi selon le besoin... </p>
    </div>
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 font-weight-bold " >Produit</h4>
        <p>
            <a href="https://menaraprefa.ma/agglos.php"  style="text-decoration:none;"> les bordures de trottoirs et les agglos</a>
        </p>
         <p>
            <a href="https://menaraprefa.ma/bordures-et-caniveaux.php"  style="text-decoration:none;"> les bordures de trottoirs et les agglos</a>
        </p>

    </div>
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 font-weight-bold ">Service</h4>
         <p>
            <a href="Service_Reclamation"  style="text-decoration:none;">Réclamation</a>
        </p>
         <p>
            <a href="Service_Observation"  style="text-decoration:none;">Observation</a>
        </p>
         <p>
            <a href="Service_Suggestion"  style="text-decoration:none;">Suggestion</a>
        </p>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h4 class="text-uppercase mb-4 font-weight-bold " >Contact</h4>
        <p>
            <i class="fas fa-home mr-3"></i>  Marjane Rte Agadir, 40150
        </p>
         <p>
          <i class="fas fa-envelope mr-3"></i>  infomarrakech@menara-prefa.com
        </p>
         <p>
        <i class="fas fa-phone mr-3" ></i>  +212 (0)5 24 34 10 48
        </p>
    </div>
       </div>
       <hr class="mb-4">
       <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
            <p>Copyright ©2023 tous droits réservés par
            <a href="" style="text-decoration: none;">
                <strong>PfeProjet</strong>
            </a></p>
        </div>
        <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                      <li class="list-inline-item">
                        <a href="https://www.facebook.com/menaraholding.ma/" class="btn-floating btn-sm " style="font-size: 23px;"><i class="fab fa-facebook-f"></i></a>
                      </li>
                       <li class="list-inline-item">
                        <a href="https://twitter.com/holdingmenara" class="btn-floating btn-sm e" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                      </li>
                       <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/m%C3%A9nara-holding/" class="btn-floating btn-sm " style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                       <li class="list-inline-item">
                        <a href="https://www.youtube.com/channel/UCutVJVipbUB1vie881BhCRg" class="btn-floating btn-sm " style="font-size: 23px;"><i class="fa-brands fa-youtube"></i></a>
                      </li>
                </ul>
            </div>
        </div>
       </div>
    </div>
</footer>


		  <script src="js/js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/js/jquery.steps.js"></script>
		<script src="js/js/mainn.js"></script>
</body>
</html>
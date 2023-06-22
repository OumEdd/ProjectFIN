@extends('layouts.fix')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/soume.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.1.slim.min. js"></script>
     <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <title>Service-Réclamation</title>
</head>
<body>
    
    @section("content")

{{-- start section --}}
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
       {{-- end section --}}
       {{-- start form --}}
       <div class="container" id="container">

        <h1 class="text text-center mb-5">Formulaire de Réclamation</h1>
        <div class="form-outer">
            <form action="" class="form">
                <div class="page">
                    <div class="field">
                        <div class="label mb-2">Lieu de dêpot</div>
                        <select class="form-select mb-5" aria-label="Default select example" id="ville" name="ville">
                            @foreach ($nom_ville as $data )
                                <option value="{{$data->id_ville}}">{{$data->nom_ville}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="field">
                        <div class="label mb-2">Service</div>
                        <select class="form-select mb-5" aria-label="Default select example" id="service" name="service">
                              @foreach ($nom_serv as $data )
                                <option value="{{$data->id_serv}}">{{$data->nom_serv}}</option>
                            @endforeach
                        </select> 
                    </div>
                </div>
               {{-- deuxieme page --}}

                 <div class="page">
                    <div class="title mb-">Rédigez votre Réclamation</div>
                       <div class="field">
                        <div class="label"></div>
                        <div class="form-floating">
                             <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>

                     <div class="field btns">
                        <button class="nest-1 next">Envoyez</button>
                    </div>

                 </div>
            </form>
        </div>
        </div>










        
        {{-- <div class="form-step form-step-active">
              <div class="input-group" id="input-group">
                <label for="ville" id="label">Lieu de depot</label>
                 
              </div>
            </div>
             <div class="form-step form-step-active">
              <div class="input-group" id="input-group">
                <label for="service" id="label" class="" >Service</label>
                 
              </div>
             </div>
                    <div class="">
                         <a href="" class="btn btn-next width-50 ml-auto" id="btn">Next</a>
                    </div>
        </div>
       </form> --}}
       {{-- end form --}}





    @endsection
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="{{ asset('js/stepForm.js')}}" defer></script>
</body>
</html>
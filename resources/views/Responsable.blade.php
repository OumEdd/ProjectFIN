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
    <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Responsable</title>
</head>

<body>
    @section('content')
        <!-- Section: Design Block -->
        {{-- form responsable --}}
        {{-- <img src="images/res.jpg" alt="img" width="100%"> --}}
        <div class="container mt-4">
            <div class="row">

                <div class="col-md-6 pb-3">
                    <form class=" mx-auto" action="{{route('AuthLoginRespo')}}" method="POST">
                        @csrf
                        <h4 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                            </svg> Responsable</h4>
                        <div class="mb-4 mt-5">
                            <label for="exampleInputEmail1" class="form-label">Adresse E_mail</label>
                            <input type="email" class="form-control" name="email_respo" id="emailr" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1"  class="form-label">Mot de Passe</label>
                            <input type="password" class="form-control" name="password_respo" id="passerespo">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4" id="btn">Se conneceter</button>
                    </form>
                </div>





                {{-- form administrateur --}}

                <div class="col-md-6 ">
                    <form class="mx-auto" action="{{route('AuthLoginAdmin')}}" method="POST" >
                        @csrf
                        <h4 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg> Administrateur</h4>
                        <div class="mb-4 mt-5">
                            <label for="exampleInputEmail1" class="form-label">Adresse E_mail</label>
                            <input type="email" class="form-control" name="email_admin" id="emailadmin" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                            <input type="password" class="form-control" name="password_admin" id="passeadmin">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4" id="btn">Se conneceter</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Section: Design Block -->
    @endsection
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script defer src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


    <title>@yield('title')</title>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="height: 45px;">
        <!-- Navbar Brand-->
        {{-- <a class="navbar-brand ps-5 p-4 bg-primary ">{{ $data->nom }} {{ $data->prenom }}</a> --}}
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 mx-2  me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        @yield('search_dmd')
        @yield('search_detail_consulte')
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"
                        style="color: #FDFEFE;"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('settingRespo')}}"><i class="fa-solid fa-gear"
                                style="margin-right:10px"></i>Settings</a></li>
                    <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="{{route('motPassRespo')}}"><i class="fa-regular fa-pen-to-square"
                        style="margin-right:10px"></i>Changer Mot de passe</a></li>
            <hr class="dropdown-divider" />
            <li><a class="dropdown-item" href="{{route('logoutRespo')}}"><i class="fa-solid fa-right-from-bracket"
                        style="margin-right:10px"></i>Logout</a></li>
        </ul>
        </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link bg-primary text-simple text-uppercase ">
                            <div class="sb-nav-link-icon d-flex align-items-center"><i class="fas fa-user fa-fw"
                                    style="color:#fff"></i>
                                <div class="mx-2" style="color:#fff;font-size:20px"><span>{{$data->nom_respo}} {{$data->prenom_respo}}</span>
                                    <p style="font-size: 13px;color:whitesmoke">Responsable
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <div class="link">
                            <a class="nav-link" href="{{route('dashboardRespo')}}" style="font-size:18px">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fa-solid fa-house-user" style="color: #FDFEFE; margin-right:10px"></i>
                                Accueil
                            </a>

                            <a class="nav-link" href="{{route('pageReclamation')}}" style="font-size:18px">
                                <i class="fa-solid fa-square-root-variable"
                                    style="color: #FDFEFE; margin-right:10px"></i>
                                Réclamation
                            </a>

                            <a class="nav-link" href="{{route('pageObersation')}}" style="font-size:18px">
                                <i class="fa-solid fa-code" style="color: #FDFEFE; margin-right:10px"></i>
                                Observation
                            </a>
                            <a class="nav-link" href="{{route('pageSuggestion')}}" style="font-size:18px">
                                <i class="fa-solid fa-code" style="color: #FDFEFE; margin-right:10px"></i>
                                Suggestion
                            </a>
                        </div>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged:</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div>
                    @yield('dashbordRespo')
                    @yield('pageSuggestion')
                    @yield('pageReclamation')
                    @yield('pageObersation')
                    @yield('pageTraitRec')
                    @yield('settingRespo')
                    @yield('updatePassRespo')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>

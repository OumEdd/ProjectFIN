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
    <nav class="sb-topnav navbar navbar-expand navbar-white" style="background:#d6d0d0">
        <!-- Navbar Brand-->
        {{-- <a class="navbar-brand ps-5 p-4 bg-primary ">{{ $data->nom }} {{ $data->prenom }}</a> --}}
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 mx-2  me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <img src="https://www.uca.ma/public/files/images/site-44-f8a7b148ccb7dec8e89dcf4fb51b65d3-2011103853.png"
            style="width:
        150px;margin-left:10px" alt="">
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"> <img
                        src="{{ asset('uploads/' . $data->imageEtud) }}" alt=""
                        style="border-radius: 100%;width:45px;height:45px;max-height:80px;max-width:80px;">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('settingEtudiant') }}"><i
                                class="fa-regular fa-pen-to-square" style="margin-right:10px">></i>changer le mot de
                            passe</a></li>
                    <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="logout"><i class="fa-solid fa-right-from-bracket"
                        style="margin-right:10px"></i>Logout</a></li>
        </ul>
        </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion" style="background:#DCD9D7;" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link text-simple text-uppercase ">
                            <div class="sb-nav-link-icon d-flex align-items-center">
                                <div class="img" style="width: 80px;margin-right: 5px;border-radius: 100%;">
                                    <img src="{{ asset('uploads/' . $data->imageEtud) }}" alt=""
                                        style="border-radius: 100%;width:60px;height:60px;max-height:80px;max-width:80px;">
                                    <div class="edit"
                                        onclick="
                                            document.getElementById('file').click();
                                            "
                                        style="position: absolute;"><i class="fa-solid fa-pen-to-square"
                                            style="position: absolute;top: -17px;right: -59px;font-size: 22px;color: #fff;"></i>
                                    </div>
                                    <form action="{{ route('UploadImage') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" id="file" name="file" style="display:none;"
                                            onchange="
                                        document.getElementById('uploadfile').click();
                                        ">
                                        <input type="submit" name='uploadfile' id="uploadfile" style="display: none;">
                                    </form>
                                </div>
                                <div class="mx-2" style="color:#0d6efd;font-size:20px"><span></span>
                                    {{ $data->nom }}
                                    {{ $data->prenom }} <p style="font-size: 13px;color:#666">etudiant</p>
                                </div>

                                {{-- <img src="{{asset('uploads/1686438268.jpg')}}"> --}}
                            </div>
                        </a>
                        {{-- <a href="{{route('editProfile')}}"><button class="btn"
                            style="    width: 63%;
                        background: #fff;
                        margin-left: 15px;
                        margin-top: -15px;
                        padding: 0px;">Edit
                            profile</button></a> --}}
                        <hr>
                        <div class="sb-sidenav-menu-heading"></div>
                        <div class="link">
                            <a class="nav-link" href="{{ route('ShowDashbord') }}" style="font-size:18px">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house" style="color:#0d6efd"></i>
                                </div>
                                <span>Home </span>
                            </a>
                            <a class="nav-link" href="{{ route('attestation') }}" style="font-size:18px">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file" style="color:#0d6efd"></i>
                                </div>
                                <span>DEPOSER UNE DEMANDE</span>
                            </a>

                            <a class="nav-link" href="{{ route('suiviDemande') }}" style="font-size:18px">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-open"
                                        style="color: #0d6efd;"></i></div>
                                <span>SUIVRE LA DEMANDE</span>
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
                    @yield('cont_dashboard')
                    @yield('cont_suivi_demande')
                    @yield('cont_attestation')
                    @yield('cont_setting')
                    @yield('editProfile')
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

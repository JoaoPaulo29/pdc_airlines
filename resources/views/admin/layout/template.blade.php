<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    <script src="https://kit.fontawesome.com/6b4ddefc79.js" crossorigin="anonymous"></script>
    
</head>
<body>
   

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color: #222;"  id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" 
        href="{{route('dashboard')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="far fa-paper-plane"></i>
            </div>
            <div class="sidebar-brand-text mx-3">PDC_AIRLINES</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Nav Item - Dashboard -->
        
        <li class="nav-item active">
            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse3"
            aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-book"></i>
                <span>Voos</span>
            </a>
            <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('voos')}}">Lista de Voos</a>
                    <a class="collapse-item" href="">Novo Voo</a>
                </div>
            </div>

        </li>
        <!-- Nav Item - Users -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-chart-bar"></i>
                <span>Frotas</span>
            </a>
        </li>
        <!-- Nav Item - Users -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-cog"></i>
                <span>Clientes</span>
            </a>
        </li>
        <!-- Nav Item - Users -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-clone"></i>
                <span>Compras</span>
            </a>
        </li>
        <!-- Nav Item - Users -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-flag"></i>
                <span>Definições</span>
            </a>
        </li>
        <!-- Nav Item - Users -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-users"></i>
                <span>Utilizadores</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="">Lista</a>
                    <a class="collapse-item" href="">Adicionar Utilizador</a>
                </div>
            </div>

        </li>
        <!-- Nav Item - Users -->
        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-user"></i>
                <span>Minha Conta</span>
            </a>
        </li>
    </ul>
    
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        
        <!-- Main Content -->
        <div id="content">

        
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @Auth()
                            <span class="mr-2 d-none d-md-inline text-gray-600 ">{{Auth::user()->name}}</span>
                            <!-- <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg"> -->
                            @endif
                                <i class="fas fa-user"></i>
                            
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                Definições
                            </a>
                            <a class="dropdown-item" href="">
                                <i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-400"></i>
                                Ir ao Portal
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Terminar Sessão
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            
                        </div>
                    </li>
                </ul>
                <!-- End of TopBar Navbar -->
            
            </nav>
            <!-- End of TopBar -->
        

             <!-- Begin Page Content -->
            <div class="container-fluid">
                
                <!-- O CONTEUDO DA PAGINA -->
                
                
                <!-- Page Heading  - cabecalho
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div> -->

                @yield('content')


            </div>
            <!-- End of Page COntent -->
            <!-- FIM DO CONTEUDO DA PAGINA -->
        </div>
        <!-- End of Main Content -->

    </div>
     <!-- End of Content Wrapper -->


</div>
<!-- End of Page Wrapper -->

    

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
</body>
</html>
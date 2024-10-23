<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aula Manager @yield('title')</title>

    <!-- Otros meta tags y título -->

    <!-- Core JS Files -->
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('atlantis/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <!-- Atlantis JS -->
    <script src="{{ asset('atlantis/assets/js/atlantis.min.js') }}"></script>
    <!-- Chart Circle -->
    <script src="{{ asset('atlantis/assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <!-- Chart JS-->
    <script src="{{ asset('atlantis/assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- JS de Aut. Emocional HUB -->
    <script src="{{ asset('js/admin.js') }}"></script>
    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/assets/js/plugin/webfont/webfont.min.js') }}"></script>

    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('atlantis/assets/css/fonts.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('atlantis/assets/css/atlantis.css') }}" rel="stylesheet">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    @include('sweetalert::alert')

    <!-- Page Wrapper -->
    <div class="wrapper">
        <!-- Main Header -->
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="#" class="logo">
                    <img src="\img\logo_autonoma.svg" alt="navbar brand" class="navbar" width="90%" height="100%"
                        style="filter: grayscale(100%) brightness(0) invert(100%);">
                </a>

                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>

                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>

                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>

            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">

                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="scroll-wrapper message-notif-scroll scrollbar-outer"
                                        style="position: relative;">
                                        <div class="message-notif-scroll scrollbar-outer scroll-content"
                                            style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="#" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jimmy Denis</span>
                                                        <span class="block">
                                                            How are you ?
                                                        </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="#" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Chad</span>
                                                        <span class="block">
                                                            Ok, Thanks !
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="#" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jhon Doe</span>
                                                        <span class="block">
                                                            Ready for the meeting today...
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="#" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Talha</span>
                                                        <span class="block">
                                                            Hi, Apa Kabar ?
                                                        </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="scroll-element scroll-x">
                                            <div class="scroll-element_outer">
                                                <div class="scroll-element_size"></div>
                                                <div class="scroll-element_track"></div>
                                                <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                            </div>
                                        </div>
                                        <div class="scroll-element scroll-y">
                                            <div class="scroll-element_outer">
                                                <div class="scroll-element_size"></div>
                                                <div class="scroll-element_track"></div>
                                                <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="scroll-wrapper notif-scroll scrollbar-outer"
                                        style="position: relative;">
                                        <div class="notif-scroll scrollbar-outer scroll-content"
                                            style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-icon notif-primary"> <i
                                                            class="fa fa-user-plus"></i> </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            New user registered
                                                        </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Rahmad commented on Admin
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="#" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Reza send messages to you
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Farrah liked Admin
                                                        </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="scroll-element scroll-x">
                                            <div class="scroll-element_outer">
                                                <div class="scroll-element_size"></div>
                                                <div class="scroll-element_track"></div>
                                                <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                            </div>
                                        </div>
                                        <div class="scroll-element scroll-y">
                                            <div class="scroll-element_outer">
                                                <div class="scroll-element_size"></div>
                                                <div class="scroll-element_track"></div>
                                                <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link quick-sidebar-toggler">
                                <i class="fa fa-th"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="https://themekita.com/demo-atlantis-lite-bootstrap/livepreview/examples/assets/img/profile.jpg"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="scroll-wrapper dropdown-user-scroll scrollbar-outer"
                                    style="position: relative;">
                                    <div class="dropdown-user-scroll scrollbar-outer scroll-content"
                                        style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg"><img
                                                        src="https://themekita.com/demo-atlantis-lite-bootstrap/livepreview/examples/assets/img/profile.jpg"
                                                        alt="image profile" class="avatar-img rounded"></div>
                                                <div class="u-text">
                                                    <h4>Hizrian</h4>
                                                    <p class="text-muted">hello@example.com</p><a href="#"
                                                        class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout</a>
                                        </li>
                                    </div>
                                    <div class="scroll-element scroll-x">
                                        <div class="scroll-element_outer">
                                            <div class="scroll-element_size"></div>
                                            <div class="scroll-element_track"></div>
                                            <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                        </div>
                                    </div>
                                    <div class="scroll-element scroll-y" >
                                        <div class="scroll-element_outer">
                                            <div class="scroll-element_size"></div>
                                            <div class="scroll-element_track"></div>
                                            <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>

                    </ul>
                </div>

            </nav>
            <!-- End Navbar Header -->
        </div>
        <!-- End Main Header -->

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="https://themekita.com/demo-atlantis-lite-bootstrap/livepreview/examples/assets/img/profile.jpg"
                                alt=".." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#logoutDropdown" aria-expanded="false" class="collapsed">
                                <span>
                                    <span class="username">User</span>
                                    <span class="user-level text-uppercase">Rol</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="in collapse" id="logoutDropdown" >
                                <ul class="nav">
                                    <li>
                                        <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
                                            <span class="link-collapse">Cerrar sesión</span>
                                        </a>
                                        <form id="logout-form" action="" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-primary">

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Inicio</h4>
                        </li>

                        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="fas fa-home"></i>
                                <p>Inicio</p>
                            </a>
                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Gestión de usuarios</h4>
                        </li>

                        <!-- nav-bar list user -->
                        <li class="nav-item {{ request()->routeIs('user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user') }}">
                                <i class="fas fa-users"></i>
                                <p>Gestionar usuarios</p>
                            </a>
                        </li>
                        <!-- end nav-bar list  user -->

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Gestión de perfil de egreso</h4>
                        </li>

                        <li class="nav-item {{ request()->routeIs('profilesCompetenciesRa') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('profilesCompetenciesRa') }}">
                                <i class="fas fa-book"></i>
                                <p>Gestionar perfil de egreso</p>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('listProfilesCompetenciesRa') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('listProfilesCompetenciesRa') }}">
                                <i class="fas fa-list"></i>
                                <p>Listado de perfiles de egresos</p>
                            </a>
                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Gestión de plan de aula</h4>
                        </li>

                        <li class="nav-item {{ request()->routeIs('classroomPlan') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('classroomPlan') }}">
                                <i class="fas fa-book-reader"></i>
                                <p>Gestionar plan de aula</p>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('listClassroomPlan') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('listClassroomPlan') }}">
                                <i class="fas fa-list"></i>
                                <p>Listado de plan de aula</p>
                            </a>
                        </li>

                        <!-- nav-bar document -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Gestión de informes</h4>
                        </li>

                        <li class="nav-item {{ request()->routeIs('document') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('document')}}">
                                <i class="fas fa-file-alt"></i> <!-- Ícono de documento -->
                                <p>Gestionar informe</p>
                            </a>
                        </li>
                        <!-- end nav-bar document -->                        

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Actividades</h4>
                        </li>

                        <li class="nav-item {{ request()->routeIs('docente.docente') ? 'active' : '' }}">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <p>Docentes</p>
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('cursos.*') ? 'active' : '' }}">
                            <a data-toggle="collapse" href="#cursos" aria-expanded="false" class="nav-link">
                                <i class="fas fa-book-open"></i>
                                <p>Cursos</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ request()->routeIs('cursos.*') ? 'show' : '' }}" id="cursos">
                                <ul class="nav nav-collapse">
                                    <li class="nav-item {{ request()->routeIs('cursos.campocomun') ? 'active' : '' }}">
                                        <a class="collapse-item" href="#">
                                            <span class="sub-item">Campo común</span>
                                        </a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('cursos.pensum') ? 'active' : '' }}">
                                        <a class="collapse-item" href="#">
                                            <span class="sub-item">Pensum</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Contenido and footer -->
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @section('content')
                        <!-- CONTENIDO -->
                        @show
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> Copyright &copy; <a
                            href="#">AulaManager</a>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
        <!-- End Contenido and footer -->
    </div>
    <!-- End of Content Wrapper -->

</body>

</html>
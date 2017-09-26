<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Gestion d'école</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>ECOLE PRIMAIRE</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->

                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">vous avez 5 nouveaux messages</p>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        salut, comment ça marche ?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     salut, j'ai besoin d'aide.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        j'aime bien ta nouvelle structure.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        svp, répond moi.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html#">voit tous les messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                <h5 class="centered">Mr. Directeur</h5>

                <li class="mt">
                    <a class="active" href="{{ url('index') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-user"></i>
                        <span>Gestion des profils</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{ url('AjouterProfil') }}">Ajouter nouveau profil</a></li>
                        <li><a  href="{{ url('ListeProfil') }}">la liste des profils</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-users"></i>
                        <span>éléve</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{url('AjouterEleve')}}">Inscription</a></li>
                        <li><a  href="{{url('ListeEleve')}}">liste total</a></li>
                        <li><a  href="{{url('ListeParent')}}">gestion des parent</a></li>
                        <li><a  href="{{url('AffectationClasse')}}">affectation aux classes</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-th"></i>
                        <span>Cours</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{url('ListeMatiere')}}">Matières</a></li>
                        <li><a  href="{{url('ListeClasse')}}">Classes</a></li>
                        <li><a  href="{{url('ListeSalle')}}">Salle</a></li>
                        <li><a  href="#">Notes</a></li>
                        <li><a  href="{{url('ControleExamen')}}">Contrôles et exameans</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-calendar"></i>
                        <span>Emploi du temps</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{url('ListeClassEmploi')}}">emploi par classe</a></li>
                        <li><a  href="{{url('ListeProfEmploi')}}">emploi par prof</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-list"></i>
                        <span>Absences</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">Marquer absence par classe</a></li>
                        <li><a  href="#">Absence par éléve</a></li>
                        <li><a  href="#">Marquer absence par prof</a></li>
                        <li><a  href="#">liste absences des profs</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-car"></i>
                        <span>Transport</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{url('ListeVehicule')}}">Gestion des véhicules</a></li>
                        <li><a  href="{{url('ListeChauffeur')}}">Gestion des chauffeurs</a></li>
                        <li><a  href="{{url('AffectationChauffeur')}}">Affectation véhicules/chauffeurs</a></li>
                        <li><a  href="{{url('AffectationEleve')}}">Affectation véhicules/éléves</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-money"></i>
                        <span>Gestion financière</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">Gestion des frais</a></li>
                        <li><a  href="#">Gestion des frais par niveau</a></li>
                        <li><a  href="#">Frais par éléve</a></li>
                        <li><a  href="#">Frais par classe</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-support"></i>
                        <span>Activité</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{url('ListeActivite')}}">Liste des activités</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-book"></i>
                        <span>Bibliothéque</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{url('ListeLivre')}}">la liste des livres</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    @yield('content')


    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

</body>
</html>

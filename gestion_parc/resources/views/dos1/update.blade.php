<!DOCTYPE html>
        <html lang="en">
        <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>AutoCars</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('font/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{asset('font/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href=" {{asset('font/vendors/css/vendor.bundle.base.css ') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('font/vendors/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('font/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset ('font/css/style.css ') }}">
        <link rel="stylesheet" href="{{asset ('font/css/style.css.map ') }}">
        <link rel="stylesheet" href="{{asset ('font/css/style1.css.map ') }}">
        <!-- End layout styles -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="{{ asset( 'font/css/bootstrap.min.css')}} ">
        <link rel="stylesheet" href="{{ asset( 'font/css/owl.carousel.min.css')}} ">
        <link rel="stylesheet" href="{{ asset( 'font/css/owl.theme.default.min.css')}}  ">
        <link rel="stylesheet" href="{{ asset( 'font/css/jquery.fancybox.min.css')}} ">
        <link rel="stylesheet" href="{{ asset( 'font/fonts/icomoon/style.css')}} ">
        <link rel="stylesheet" href="{{ asset( 'font/fonts/flaticon/font/flaticon.css')}} ">
        <link rel="stylesheet" href="{{ asset( 'font/css/daterangepicker.css')}} ">
        <link rel="stylesheet" href="{{ asset( 'font/css/aos.css' )}} ">
        <link rel="stylesheet" href="{{ asset( 'font/css/style2.css')}} ">
        <link rel="stylesheet"  href="{{ asset('font/fontawesome-free-6.2.1-web/css/all.css') }}" />

        </head>
        <body >
        <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
        

        <section style="background-color: #ffffff;">
        <div class="navbar-menu-wrapper d-flex align-items-stretch">

        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #ffffff;">
        <img class="img_logo" src=" {{ asset ('font/images/logo.png') }}" alt="logo" style="margin-right: 90px;" />
        </div>


        <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
        <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
        <div class="input-group-prepend bg-transparent">
        <i class="input-group-text border-0 mdi mdi-magnify"></i>
        </div>
        <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
        </div>
        </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">

        <li class="nav-item nav-language dropdown d-none d-md-block">
        <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        <div class="nav-language-icon">
        <i class="flag-icon flag-icon-us" title="us" id="us"></i>
        </div>
        <div class="nav-language-text">
        <p class="mb-1 text-black">Français</p>
        </div>
        </a>
        <div class="dropdown-menu navbar-dropdown " aria-labelledby="languageDropdown">
        <a class="dropdown-item" href="#">
        <div class="nav-language-icon mr-2">
        <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>
        </div>
        <div class="nav-language-text">
        <p class="mb-1 text-black">Français</p>
        </div>
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">
        <div class="nav-language-icon mr-2">
        <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
        </div>
        <div class="nav-language-text">
        <p class="mb-1 text-black">English</p>
        </div>
        </a>
        </div>
        </li>
        <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        <div class="nav-profile-img">
        <img src="{{ asset ('font/images/person1.jpg') }}" alt="image">
        </div>
        <div class="nav-profile-text">
        <p class="mb-1 text-black">Serge</p>
        </div>
        </a>
        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
        <div class="p-3 text-center" style="background-color:#fc8a29">
        <img class="img-avatar img-avatar48 img-avatar-thumb " src=" {{ asset ('font/images/person1.jpg') }}" alt="">
        </div>
        <div class="p-2">
        <h5 class="dropdown-header text-uppercase pl-2 text-dark">Options d'utilisateur</h5>
    
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
        <span>Profile</span>
        <span class="p-0">
        <span class="badge badge-success">1</span>
        <i class="mdi mdi-account-outline ml-1"></i>
        </span>
        </a>
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
        <span>Parametres</span>
        <i class="mdi mdi-settings"></i>
        </a>
        <div role="separator" class="dropdown-divider"></div>
        <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
        <span>Blocqué le compte</span>
        <i class="mdi mdi-lock ml-1"></i>
        </a>
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
        <span>Deconnexion</span>
        <i class="mdi mdi-logout ml-1"></i>
        </a>
        </div>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
        <i class="mdi mdi-bell-outline"></i>
        <span class="count-symbol bg-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
        <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
        <div class="preview-icon bg-success">
        <i class="mdi mdi-calendar"></i>
        </div>
        </div>
        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
        <h6 class="preview-subject font-weight-normal mb-1">Action recente</h6>
        <p class="text-gray ellipsis mb-0"> Rappellez vous que tu as des actions recentes </p>
        </div>
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
        <div class="preview-icon bg-warning">
        <i class="mdi mdi-settings"></i>
        </div>
        </div>
        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
        <h6 class="preview-subject font-weight-normal mb-1">Parametres</h6>
        <p class="text-gray ellipsis mb-0"> Modifiez le dashboard </p>
        </div>
        </a>
        <div class="dropdown-divider"></div>
    
        <div class="dropdown-divider"></div>
        <h6 class="p-3 mb-0 text-center">Voir toutes les notifications</h6>
        </div>
        </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
        </button>
        </div>

        </nav>
        </section>

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-category"> <strong><h5>Principal</h5></strong></li>
        </li>

            
<li class="nav-item" style="border-radius:7px;" >
    
    <a class="nav-link"  href="#mdi" aria-expanded="false" aria-controls="mdi">
    <span class="icon-bg"><i class="fas fa-home menu-icon"></i></span>
    <span class="menu-title">Dashbord</span>
    </a>
</li>

<li class="nav-item" style="border-radius:7px;" >
    
    <a class="nav-link"  href="#mdi" aria-expanded="false" aria-controls="mdi">
    <span class="icon-bg"><i class=" fas fa-car-alt menu-icon"></i></span>
    <span class="menu-title">Mes Voitures</span>
    </a>
</li>

<li class="nav-item" style="border-radius:7px;" >
    
    <a class="nav-link"  href="#mdi" aria-expanded="false" aria-controls="mdi">
    <span class="icon-bg"><i class="fas fa-balance-scale menu-icon"></i></span>
    <span class="menu-title">Bilan</span>
    </a>
</li>

<li class="nav-item" style="border-radius:7px;" >
    
    <a class="nav-link"  href="#mdi" aria-expanded="false" aria-controls="mdi">
    <span class="icon-bg"><i class="fas fa-calendar-alt menu-icon"></i></span>
    <span class="menu-title">Calendrier</span>
    </a>
</li>
      
        <li class="nav-item nav-category"> <strong><h5>Preference</h5></strong></li>
            
      
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#m" aria-expanded="false" aria-controls="m">
        <span class=""><i class="mdi mdi-settings menu-icon"></i></span>
        <span class="menu-title" style="position: relative;left:10px">Parametres</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="m">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" id="modeld" href=" {% url 'buttons' %}">Dark Mode <i class="fas fa-adjust"></i></a> </li>
        </ul>
        </div>
        </li>

        <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
        <span class="menu-title">Deconnexion</span></a>
        </div>
        </li>

        </ul>
        </nav>
    <div class="main-panel">

                
    <div style="background-color: #f2eae2; margin-left:210px;margin-top:-40px" id="" class="form11" >
            <form>
                <center>
                    <a class="navbar-brand brand-logo" href="index.html" style="justify-content:center; justify-items: center;"><img src=" {{ asset ('font/images/logo.png') }}" alt="logo" /></a>
                        <h3>Détails</h3>
                    <br><br>
                    <div class="row"style="display: flex;justify-content:space-around;position:relative;bottom:55px">
                        <div class="col-md-6 grid-margin">
                            <label style="position:relative;right:50px ">Nom </label>
                            <div> <input type="email" placeholder="Nom (marque) "style="height: 30px;border-radius:6px;background-color:#eef0fa"></input></div>
                        </div>
                        <div class="col-md-6 grid-margin">
                        <label style="position:relative;right:50px ">Prix</label>
                            <div> <input type="number" placeholder="90" style="height: 30px;border-radius:6px;background-color:#eef0fa"></input></div>
                        </div>
                    </div>

                    <div class="row" style="display: flex;justify-content:space-around;position:relative;bottom:65px">
                        <div class="col-md-6 grid-margin">
                            <label style="position:relative;right:50px ">Categorie</label>
                            <div> <input type="email" placeholder="Expl(Petit)" style="height: 30px;border-radius:6px;background-color:#eef0fa"></input></div>
                        </div>
                        <div class="col-md-6 grid-margin">
                        <label style="position:relative;right:30px">Personnes max </label>
                            <div> <input type="number" placeholder="2" style="height: 30px;border-radius:6px;background-color:#eef0fa"></input></div>
                        </div>
                    </div>
                    
                    <div class="row" style="display: flex;justify-content:space-around;position:relative;bottom:65px">
                        
                        <div class="col-md-6 grid-margin">
                        <label style="position:relative;right:20px"> Cabuant</label>
                            <div> <input type="number" placeholder="50" style="height: 30px;border-radius:6px;background-color:#eef0fa;position:relative;right:0px"></input></div>
                        </div>
                        <div class="col-md-6 grid-margin">
                            <label style="position:relative;right:50px">Image</label>
                            <div> <input type="file" style="height:30px;border-radius:6px;position:relative;right:-30px"></div>
                        </div>
                    </div>

                    <div class="row" style="display: flex;justify-content:space-around;position:relative;bottom:105px;right:30px" >
                    <div>
                        <label style="position:relative;left:50px">Type</label>
                        <div class="col-md-6 grid-margin" style="display: flex;justify-content:space-between">
                            <div style="position:relative;right:80px;display:flex"> <input type="radio"><label style="position:relative;left:20px">Manuel</label> </div>
                            <div style="position:relative;left:80px;display:flex"><input type="radio"><label style="position:relative;left:20px">Automatique</label> </div>
                           
                        </div>
                    </div>
                    </div>
                                <input type="submit" value="Ajouter" class="btn_sign" style="position:relative;right:-150px;bottom:115px"></input> 
                </center>
            </form>
        </div> 


        </div>
        </div>
        

        <footer class="footer row bg-white">
    <div class="footer-inner-wraper col-lg-">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © sergePacitte.com 2023</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">©2023 Elvis . All rights reserved</a> from Figma.com</span>
    </div>
    </div>
    </footer> 
        </body>

        <script src=" {{asset('font/vendors/chart.js/Chart.min.js')}}"></script>
        <script src=" {{asset('font/vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
        <!-- End plugin js for this page -->

        <!-- Custom js for this page -->
        <script src=" {{asset('font/js/dashboard.js')}} "></script>

        <script src="{{ asset('font/vendors/js/vendor.bundle.base.js') }} "></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src=" {{ asset('font/js/off-canvas.js')}} "></script>
        <script src=" { asset('font/js/hoverable-collapse.js')}} "></script>
        <script src=" {{ asset('font/js/misc.js')}} "></script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#modeld').click(function(e) {
      e.preventDefault();

      // Récupérer le mode actuel
      var mode = $('body').hasClass('dark') ? 'light' : 'dark';

      // Envoyer une requête AJAX au serveur pour enregistrer le nouveau mode
      $.post('/mode', { mode: mode }, function(data) {
        // Modifier la classe du body en fonction du mode choisi
        $('body').removeClass('dark light').addClass(data.mode);
      });
    });
  });
</script>
        </html>
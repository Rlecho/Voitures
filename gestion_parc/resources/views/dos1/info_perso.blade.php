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
    <body>
                    
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
     <div class=" " >
        <div class="main-panel" style="width:100%;">
                    <div>
                <section >  
                <div class="">      
                                <div class="container bg-white col-7" style="margin-left:30px; margin-top: 125px; border-radius:14px; padding-bottom:10px"  >
                                    <div class="row" style="padding-top: 30px;">
                                        <div style="display: flex; justify-content:space-around;">
                                            <div>
                                                <strong style="padding-left: 15px;">Informations Personnelles</strong><br>
                                                <p style="padding-left: 30px;color:#8fa3bf;">Entrer vos informations</p>
                                            </div>
                                            <div style="position:relative; left:430px; padding-top:20px;color:#8fa3bf;">Etape 1 sur 4</div>
                                        </div>
                                    </div> 
                                    
                                    <div style="display: flex;position: relative;bottom:15px;">
                                    <label style="position: relative;left:60px;color:#8fa3bf;">Nom</label>
                                    <label style="position: relative;left:390px;color:#8fa3bf;">Telephone</label>
                                    </div>
                                <div class="row" >
                                    <div style="display: flex; margin-bottom:30px;position: relative;bottom:15px;" class="col-lg-10">
                                    <input type="text" class="form-control" id="idSuccess" placeholder="Votre Nom" style="position: relative;left:30px; border-radius:10px;background-color:#eef0fa;">
                                    <input type="text" class="form-control" id="idSuccess" placeholder="Telephone" style="position: relative;left:90px; border-radius:10px;background-color:#eef0fa;">
                                    </div>
                                </div>

                                <div style="display: flex;position: relative;bottom:15px;">
                                    <label style="position: relative;left:60px;color:#8fa3bf;">Adresse</label>
                                    <label style="position: relative;left:390px;color:#8fa3bf;">Ville/village</label>
                                    </div>
                                <div class="row" style="margin-bottom:20px;">
                                    <div style="display: flex;position: relative;bottom:15px; " class="col-lg-10">
                                    <input type="text" class="form-control" id="idSuccess" placeholder="Adresse" style="position: relative;left:30px; border-radius:10px;background-color:#eef0fa;">
                                    <input type="text" class="form-control" id="idSuccess" placeholder="Ville/Village" style="position: relative;left:90px; border-radius:10px;background-color:#eef0fa;">
                                    </div>
                                </div>

                                </div> 



                                <div class="container bg-white col-7" style="margin: 30px; border-radius:14px; padding-bottom:10px"  >
                                    <div class="row" style="padding-top: 30px;">
                                        <div style="display: flex; justify-content:space-around;">
                                            <div>
                                                <strong style="padding-left: 15px;">Informations de Location</strong><br>
                                                <p style="padding-left: 30px;color:#8fa3bf;">Entrer les dates de location</p>
                                            </div>
                                            <div style="position:relative; left:430px; padding-top:20px;color:#8fa3bf;">Etape 2 sur 4</div>
                                        </div>
                                    </div> 


                                    <div style="display: flex;position: relative;bottom:10px; padding:20px">
                                    <input type="radio"style="margin-right:10px;"> <strong>Reception</strong>
                                    </div>

                                <div style="display: flex;position: relative;bottom:15px;">
                                    <label style="position: relative;left:60px;color:#8fa3bf;">Date</label>
                                    <label style="position: relative;left:390px;color:#8fa3bf;">Heure</label>
                                    </div>
                                <div class="row" >
                                    <div style="display: flex; margin-bottom:30px;position: relative;bottom:15px;" class="col-lg-10">
                                    <input type="date" class="form-control"  style="position: relative;left:30px; border-radius:10px;background-color:#eef0fa;">
                                    <input type="time" class="form-control"  style="position: relative;left:90px; border-radius:10px;background-color:#eef0fa;">
                                    </div>
                                </div>

                                <div style="display: flex;position: relative;bottom:10px; padding:20px">
                                    <input type="radio"style="margin-right:10px;"> <strong>Depot</strong>
                                    </div>

                                <div style="display: flex;position: relative;bottom:15px;">
                                    <label style="position: relative;left:60px;color:#8fa3bf;">Date</label>
                                    <label style="position: relative;left:390px;color:#8fa3bf;">Heure</label>
                                    </div>
                                <div class="row" >
                                    <div style="display: flex; margin-bottom:30px;position: relative;bottom:15px;" class="col-lg-10">
                                    <input type="date" class="form-control"  style="position: relative;left:30px; border-radius:10px;background-color:#eef0fa;">
                                    <input type="time" class="form-control"  style="position: relative;left:90px; border-radius:10px;background-color:#eef0fa;">
                                    </div>
                                </div>

                                </div> 


                                <div class="container bg-white col-7" style="margin: 30px; border-radius:14px; padding-bottom:10px"  >
                                    <div class="row" style="padding-top: 30px;">
                                        <div style="display: flex; justify-content:space-around;">
                                            <div>
                                                <strong style="padding-left: 15px;">Informations sur Paiement</strong><br>
                                                <p style="padding-left: 30px;color:#8fa3bf;">Entrer moyen de paiement</p>
                                            </div>
                                            <div style="position:relative; left:430px; padding-top:20px;color:#8fa3bf;">Etape 3 sur 4</div>
                                        </div>
                                    </div> 
                                <div style="background-color:#f0f1f6; border-radius:8px">

                                    <div style="display: flex;position:relative;bottom:5px;justify-content:space-between;padding:20px;">
                                    <div><input type="radio"style="margin-right:10px;"> <strong>Credit Card</strong></div>
                                    <div><i class="fas fa-credit-card"></i></div>
                                    </div>

                                    <div style="display: flex;position: relative;bottom:15px;">
                                        <label style="position: relative;left:60px;color:#8fa3bf;">Card Number</label>
                                        <label style="position: relative;left:390px;color:#8fa3bf;">Expiration Date</label>
                                    </div>
                                    <div class="row" >
                                        <div style="display: flex; margin-bottom:30px;position: relative;bottom:15px;" class="col-lg-10">
                                        <input type="text" class="form-control" id="idSuccess" placeholder="Card Number" style="position: relative;left:30px; border-radius:10px;background-color:#eef0fa;">
                                        <input type="date" class="form-control" id="idSuccess" placeholder="date" style="position: relative;left:90px; border-radius:10px;background-color:#eef0fa;">
                                        </div>
                                    </div>

                                    <div style="display: flex;position: relative;bottom:15px;">
                                        <label style="position: relative;left:60px;color:#8fa3bf;">Card Holder</label>
                                        <label style="position: relative;left:390px;color:#8fa3bf;">CVC</label>
                                        </div>
                                    <div class="row" style="margin-bottom:20px;">
                                        <div style="display: flex;position: relative;bottom:15px; " class="col-lg-10">
                                        <input type="text" class="form-control" id="idSuccess" placeholder="cardholder" style="position: relative;left:30px; border-radius:10px;background-color:#eef0fa;">
                                        <input type="text" class="form-control" id="idSuccess" placeholder="cvc" style="position: relative;left:90px; border-radius:10px;background-color:#eef0fa;">
                                        </div>
                                    </div>
                                </div>
                                    <div style="background-color:#f0f1f6; border-radius:8px">
                                        <div style="display: flex;position:relative;bottom:5px;justify-content:space-between;padding:5px;">
                                        <div><input type="radio"style="margin-right:10px;"><strong>Paypal</strong></div>
                                        <i class="fab fa-paypal"></i>
                                        </div> 
                                </div> 

                                <div style="background-color:#f0f1f6; border-radius:8px">
                                        <div style="display: flex;position:relative;bottom:5px;justify-content:space-between;margin:5px;padding:5px;">
                                        <div><input type="radio"style="margin-right:10px;"><strong>Bitcoin</strong></div>
                                        <i class="fab fa-bitcoin"></i>
                                        </div> 
                                </div> 
                            </div> 

                            <div class="container bg-white col-7" style="margin: 30px; border-radius:14px; padding-bottom:10px"  >
                                    <div class="row" style="padding-top: 30px;">
                                        <div style="display: flex; justify-content:space-around;">
                                            <div>
                                                <strong style="padding-left: 15px;">Confirmation</strong><br>
                                                <p style="padding-left: 30px;color:#8fa3bf;">Prêt à passer à l'action!</p>
                                            </div>
                                            <div style="position:relative; left:430px; padding-top:20px;color:#8fa3bf;">Etape 4 sur 4</div>
                                        </div>
                                    </div> 
                                <div style="background-color:#f0f1f6; border-radius:8px">
                                
                                </div>
                                    <div style="background-color:#f0f1f6; border-radius:8px">
                                        <div style="display: flex;position:relative;bottom:5px;justify-content:space-between;padding:9px;">
                                        <div><input type="checkbox"style="margin-right:10px;">
                                        <strong style="color:#8fa3bf;">I agree with sending an Marketing and newsletter emails. No spam, promissed!</strong></div>
                                        </div> 
                                </div> 

                                <div style="background-color:#f0f1f6; border-radius:8px">
                                        <div style="display: flex;position:relative;bottom:5px;justify-content:space-between;margin:9px;padding:8px;">
                                        <div><input type="checkbox"style="margin-right:10px;">
                                        <strong style="color:#8fa3bf;">I agree with our iterms and conditions and privacy policy</strong></div>
                                        </div> 
                                </div> 
                                <div class="col-4">
                                        <input type="button" class="form-control louer"  value="Louer Maintenant" >
                                    </div>

                                    <div class="col-12" style="padding-top: 20px;">
                                    </div>
                                    <i class="fas fa-check-circle"></i>
                                    <div>
                                        <strong>Toutes vos données sont sécurisés</strong>
                                        <p>We are using the most advanced security to provide you the best experience ever</p>
                                    </div>
                                </div>
                 </div>



                 <div class="col-8" style="position: relative; right:-900px;bottom:1630px">
                 <div class="container bg-white col-6" style="margin: 30px; border-radius:14px; padding-bottom:10px"  >
                                    <div class="row" style="padding-top: 30px;">
                                        <div>
                                            <strong style="padding-left: 15px;">Sommaire de Location</strong><br>
                                            <p style="padding-left: 30px;color:#8fa3bf;">Le prix peut changer ça dépend de la taille<br> et du prix du véhicule</p>
                                        </div>
                                    </div> 

                                    <div class="row" style="padding-top:10px;padding-left:30px;">
                                        <div style="display: flex;">
                                            <div style="background-color: #fc8a29; border-radius:6px;">
                                            <img style="width:140px;height:110px" src="{{asset('font/images/Range Rover Evoque Orange Car - 1371x817.png')}}"alt="Tigre">
                                            </div>
                                            <div style="padding: 20px;">
                                            <span style="color:black"><strong>Pacitte GUIDIMADJEGBE</strong></span><br>
                                              <i style="color: #fc8a29;" class="fas fa-star"></i>
                                              <i style="color: #fc8a29;" class="fas fa-star"></i> 
                                              <i style="color: #fc8a29;" class="fas fa-star"></i>
                                              <i style="color: #fc8a29;" class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i>  <span style="color:black">    4.0</span>
                                            </div>
                                        </div>
                                       
                                    </div> 
                                    <hr>


                                    <div style="display: flex;position: relative;bottom:10px; padding:10px;justify-content:space-between;">
                                        <label>Subtotal</label>
                                        <strong>$80.00</strong>
                                    </div>

                                    <div style="display: flex;position: relative;bottom:29px; padding:10px;justify-content:space-between;">
                                        <label>Réduction</label>
                                        <strong>$10.00</strong>
                                    </div>

                                <div class="row" >
                                    <div style="display: flex; margin-bottom:30px;position: relative;bottom:15px;" class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Code Promo"  style="position: relative;left:30px; border-radius:7px;background-color:#eef0fa;">
                                    </div>
                                </div>
                                <div class="row" >
                                    <div style="display: flex; margin-bottom:30px;position: relative;bottom:15px;justify-content:space-between" class="col-lg-10">
                                         <div>
                                            <p><strong style="padding-left: 15px;">Prix de Location</strong><br>
                                            <span style="padding-left:10px;color:#8fa3bf;">Overall price and includes rental discount </span></p>
                                        </div>
                                        <div>
                                            <label></label>
                                            <strong>$70.00</strong>
                                        </div>
                                    </div>
                                </div>

                                </div> 
                 </div>



             </section>
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

    </html>
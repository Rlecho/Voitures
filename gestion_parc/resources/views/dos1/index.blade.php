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
	<link rel="stylesheet" href="{{ asset( 'font/css/style.css')}} ">
    <link rel="stylesheet"  href="{{ asset('font/fontawesome-free-6.2.1-web/css/all.css') }}" />

  </head>
        <body>
            <section style="background-color: #ffffff;">
                <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="index.html"><img class="img_logo" src=" {{ asset ('font/images/logo.png') }}" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-stretch">
                        <button class=" btn_sign " type="button">
                        <span>S'inscrire</span>
                        </button>
                    
                        <button class=" btn_log" type="button">
                        <span>Se connecter</span>
                        </button>
                    </div>
            </nav>
            </section>
           
            <div class="box">
                <div class="text">
                    <h1>Louer une belle voiture <br> 
                        <span style="color:#fc8a29">rapidement</span>
                    </h1>
                    <p>
                      Votre prochaine voiture est ici, elle n’attend que vous. <br>Rechercher et louer votre voiture<br>en quelques clics seulement
                    </p>
                    <button class="btnj">Louer maintenant</button>
                </div>
                <div class="image">
                <img  src=" {{ asset ( 'font/images/Range Rover Evoque Orange Car - 1371x817.png' ) }} " alt="Image" class="img-fluid">
				
                </div>
            </div>
                <form class="form3 container">
                    <div class="col-12 form">
                        <div class="col-3">
                            <label>Position</label>
                            <select name="" id="select1"  class="form-control custom-select">
                                <option value="" id="options">Choisis ta ville</option>
                                <option  value="option1">Cotonou</option>
                                <option  value="option2">Calavi</option>
                                <option  value="option3">Bohicon</option>
                                <option  value="option4">Porto-Novo</option>
                                <option  value="option5">Ouidah</option>
                                <option  value="option6">Savè</option>
                                <option  value="option7">Parakou</option>
                                <option  value="option8">Natitingou</option>
                                <option  value="option8">Ketou</option>
                                <option  value="option8">Mallanville</option>

                            </select>
                        </div>
                        
                        <div class="col-3">
                        <label>Date de reception</label>
                            <input type="date" class="form-control" name="daterange">
                        </div>
                       
                        <div class="col-3">
                        <label>Date de retour</label>
                            <input type="date" class="form-control" name="daterange">
                        </div>
                        <div class="col-2">
                        <label></label>
                            <input type="button" class="form-control louer"  value="Louer" >
                        </div>
                </form>
            </div>
            <div  class="titre1">
                <h1>Offres de location populaires</h1>
            </div>
            <div class="container col-12" style="padding:60px">
                    <div style="display: flex; justify-content:space-between;">
                        <p style="color: #90a3bf;">Voiture populaires</p>
                        <a href="#" style="color:#fc8a29"> Voir tout</a>
                    </div>
                 <section class="col-12 row row2" style="justify-content: space-between;">

                  <div class="work">
                   
                        <div class="work1">
                            <i class="fas fa-star"></i>
                            <p>5</p>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 ">
                            <img style="width: 250px;" src="{{ asset ( 'font/images/Range Rover Evoque Orange Car - 1371x817.png' ) }}"alt="Tigre">
                        </div>
                        <div class="work2">
                            <h6>Land Rover</h6>
                            <div class="work2_2">
                                    <div class="work2_2">
                                        <i class="fas fa-charging-station"></i>
                                        <p> 90L</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-hockey-puck"></i>
                                        <p> Manuel</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-user-friends"></i>
                                        <p> 2Passagers</p>
                                    </div>
                            </div>
                            <div class="work2_3">
                                <p><strong style="font-size: 25px;">$50.00</strong>/jour</p>
                                <input type="button" class="form-control louer"  value="Louer" >

                            </div>
                        </div>
                  </div>
                  
                  <div class="work">
                        <div class="work1">
                            <i class="fas fa-star"></i>
                            <p>4.3</p>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 ">
                            <img style="width: 250px;" src="{{ asset ( 'font/images/Range Rover Evoque Orange Car - 1371x817.png' ) }}"alt="Tigre">
                        </div>
                        <div class="work2">
                            <h6>Land Rover</h6>
                            <div class="work2_2">
                                    <div class="work2_2">
                                        <i class="fas fa-charging-station"></i>
                                        <p>90L</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-hockey-puck"></i>
                                        <p>Manuel</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-user-friends"></i>
                                        <p>2Passagers</p>
                                    </div>
                            </div>
                            <div class="work2_3">
                                <p><strong style="font-size: 25px;">$50.00</strong>/jour</p>
                                <input type="button" class="form-control louer"  value="Louer" >

                            </div>
                        </div>
                  </div>

                  <div class="work">
                         <div class="work1">
                            <i class="fas fa-star"></i>
                            <p>4.3</p>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 ">
                            <img style="width: 250px;" src="{{ asset ( 'font/images/Range Rover Evoque Orange Car - 1371x817.png' ) }}"alt="Tigre">
                        </div>
                        <div class="work2">
                            <h6>Land Rover</h6>
                            <div class="work2_2">
                                    <div class="work2_2">
                                        <i class="fas fa-charging-station"></i>
                                        <p>90L</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-hockey-puck"></i>
                                        <p>Manuel</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-user-friends"></i>
                                        <p>2Passagers</p>
                                    </div>
                            </div>
                            <div class="work2_3">
                                <p><strong style="font-size: 25px;">$50.00</strong>/jour</p>
                                <input type="button" class="form-control louer"  value="Louer" >

                            </div>
                        </div>
                  </div>

                  <div class="work">
                        <div class="work1">
                            <i class="fas fa-star"></i>
                            <p>4.3</p>
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 ">
                            <img style="width: 250px;" src="{{asset('font/images/Range Rover Evoque Orange Car - 1371x817.png')}}"alt="Tigre">
                        </div>
                        <div class="work2">
                            <h6>Land Rover</h6>
                            <div class="work2_2">
                                    <div class="work2_2">
                                        <i class="fas fa-charging-station"></i>
                                        <p>90L</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-hockey-puck"></i>
                                        <p>Manuel</p>
                                    </div>
                                    <div class="work2_2">
                                        <i class="fas fa-user-friends"></i>
                                        <p>2Passagers</p>
                                    </div>
                            </div>
                            <div class="work2_3">
                                <p><strong style="font-size: 25px;">$50.00</strong>/jour</p>
                                <input type="button" class="form-control louer"  value="Louer" >

                            </div>
                        </div>
                  </div>
                        <div class="container-fluid temoignages">

                              <center class="testimo">
                                   <p>Témoignages</p>
                                   <h1>Ce que les gens disent de nous ?</h1>
                              </center>  

                              <div class="owl-carousel owl-theme" style="padding: 50px;">
                                    <div class="item">
                                        <div class="flex">
                                             <img style="width: 300px; height:400px;" class="carou" src="{{asset('font/images/person1.jpg')}}"alt="Tigre">
                                             <p>Je suis très content de mon<br>expérience chez vous.<br>Je crois que vous êtes<br>de loin la meilleure agence<br>de location<br><br>
                                             <span style="color:black"><strong>Pacitte GUIDIMADJEGBE</strong><br></span>
                                              <i style="color: #fc8a29;" class="fas fa-star"></i>
                                              <i style="color: #fc8a29;" class="fas fa-star"></i> 
                                              <i style="color: #fc8a29;" class="fas fa-star"></i>
                                              <i style="color: #fc8a29;" class="fas fa-star"></i> 
                                              <i class="fas fa-star"></i>  <span style="color:black">    4.0</span>
                                            </p>
                                             
                                        </div>
                                       
                                    </div>
                                </div>
                        </div>
            </div>
            <footer class="footer row" style="background-color:#ffffff;">
                                                <div class="footer-inner-wraper col-lg-">
                                                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © sergePacitte.com 2023</span>
                                                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">©2023 Elvis . All rights reserved</a> from Figma.com</span>
                                                    </div>
                                                </div>
                                    </footer>
            </body>
                    <script src=" {{ asset('font/js/jquery-3.4.1.min.js') }} "></script>
                    <script src=" {{ asset('font/js/popper.min.js') }} "></script>
                    <script src=" {{ asset('font/js/bootstrap.min.js') }} "></script>
                    <script src=" {{ asset('font/js/owl.carousel.min.js') }} "></script>
                    <script src=" {{ asset('font/js/jquery.animateNumber.min.js') }} "></script>
                    <script src=" {{ asset('font/js/jquery.waypoints.min.js') }} "></script>
                    <script src=" {{ asset('font/js/jquery.fancybox.min.js') }} "></script>
                    <script src=" {{ asset('font/js/aos.js') }} "></script>
                    <script src=" {{ asset('font/js/moment.min.js') }} "></script>
                    <script src=" {{ asset('font/js/daterangepicker.js') }} "></script>

                    <script src=" {{ asset('font/js/typed.js') }} "></script>
                    <script src=" {{ asset('js/custom.js') }} "></script>
                    <script>
                    

                    $('.owl-carousel').owlCarousel({
                            loop:true,
                            margin:10,
                            nav:true,
                            responsive:{
                                0:{
                                    items:1
                                },
                              
                            }
                        })
                    </script>

</html>

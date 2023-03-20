    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>AutoCars</title>
            <link rel="stylesheet" href="{{asset('font/vendors/mdi/css/materialdesignicons.min.css') }}">
            <link rel="stylesheet" href="{{asset('font/vendors/flag-icon-css/css/flag-icon.min.css')}}">
            <link rel="stylesheet" href=" {{asset('font/vendors/css/vendor.bundle.base.css ') }}">
            <link rel="stylesheet" href="{{asset('font/vendors/font-awesome/css/font-awesome.min.css')}}" />
            <link rel="stylesheet" href="{{asset('font/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
            <link rel="stylesheet" href="{{asset ('font/css/style.css ') }}">
            <link rel="stylesheet" href="{{asset('font/css/style.css.map')}}">
        </head>
            <body>
        
                <div class="round"></div>
                <section style="background-color: #ffffff;">
                <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src=" {{ asset ('font/images/logo.png') }}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class=" btn_sign id1" type="button">
                <span>S'inscrire</span>
                </button>
                <button class=" btn_log id2" onclick="" type="button">
                <span>Se connecter</span>
                </button>
                </div>
                </nav>
                </section>
                <div class="main-panel">
            <div style="background-color:#f6f7f9; " class="connect"> 
                <div style="background-color: #f2eae2;" id="form1" class="form1">
                    <form method="post" action="">
                        <center>
                            <a class="navbar-brand brand-logo" href="index.html" style="justify-content:center; justify-items: center;"><img src=" {{ asset ('font/images/logo.png') }}" alt="logo" /></a>
                        
                            <br><br>
                            <table>
                                <tr>
                                    <td> <label>Username  </label> </td> 
                                    <td>  <input type="text" name="name" placeholder="Serge Pacitte"></input> </td>
                                </tr>

                                <tr>
                                    <td> </td> 
                                    <td>  </td>
                                </tr>

                                <tr>
                                    <td> <label>Password  </label> </td> 
                                    <td>  <input type="password" name="password" placeholder="..............."></input> </td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td> <label></label> </td> 
                                    <td> <label></label> </td> 
                                    <td>  <input type="submit" value="Se connecter" style="color: white;" class="btn_log id2"></input> </td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td> </td> 
                                    <td> </td> 
                                    <td> <a class='id1' style="color: #fc8a29;" href="#">S'inscrire</a></td> 
                                </tr>
                            </table>
                        </center>
                    </form>
                </div> 
            </div>


                <div style="background-color:#f6f7f9; " class="connect"> 
                <div style="background-color: #f2eae2;" id="form2" class="form2">
                    <form method="post" action="{{  url('inscription') }}">
                    @csrf
                        <center>
                            <a class="navbar-brand brand-logo" href="index.html" style="justify-content:center; justify-items: center;"><img src=" {{ asset ('font/images/logo.png') }}" alt="logo" /></a>
                        
                            <br><br>
                            <table>
                                <tr>
                                    <td> <label>Username  </label> </td> 
                                    <td>  
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter username" required autofocus></input> 
                                        @error('name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>

       

                                <tr>
                                    <td> </td> 
                                    <td>  </td>
                                </tr>

                                <tr>
                                    <td><label>Email  </label</td> 
                                    <td> <input type="email" name="email" placeholder="Enter your mail" required autofocus></input> </td>
                                </tr>
                                <tr>
                                    <td> </td> 
                                    <td>  </td>
                                </tr>
                                <tr>
                                    <td> <label>Password  </label> </td> 
                                    <td>  <input type="password" name="password" placeholder="Enter your password" required autofocus></input> </td>
                                </tr>
                                <tr>
                                    <td> </td> 
                                    <td>  </td>
                                </tr>
                                <tr>
                                    <td> <label>Confirm Password  </label> </td> 
                                    <td>  <input type="password" name="confpassword" placeholder="confirm password" required autofocus></input> </td>
                                </tr>
                                
                                <tr>
                                    <td> <label></label> </td> 
                                    <td> <label></label> </td> 
                                    <td>  <input type="submit" value=" S'inscrire" class="btn_sign id1"></input> </td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td> </td> 
                                    <td> </td> 
                                    <td> <a class='id2' style="color: #fc8a29;" href="#">Se connecter</a> </td> 
                                </tr>
                            </table>
                        </center>
                    </form>
                </div> 
            </div>        
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
                                <script>
                                    var select1 = document.getElementById("form1");
                                    var select2 = document.getElementById("form2");
                                    var selectedValue1 = document.querySelectorAll(".id1");
                                    var selectedValue = document.querySelectorAll(".id2");
                                
                                selectedValue1.forEach(btn => {
                                    btn.addEventListener('click', ()=>{
                                        select1.style.display = "none";
                                        select2.style.display = "block";
                                    })
                                });

                                selectedValue.forEach(btn => {
                                    btn.addEventListener('click', ()=>{
                                        select1.style.display = "block";
                                        select2.style.display = "none";
                                    })
                                })
                                


                                </script>
                        </html>

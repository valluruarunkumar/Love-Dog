<?php
 include("login.php");
 echo $email;
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tindog</title>

        <!--Favicon-->
        <link rel="icon" href="favicon.ico">

        <!--font awesome link-->
        <script src="https://kit.fontawesome.com/331e606735.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Nabla&display=swap" rel="stylesheet"> 
        
        <!-- google fonts cdn link collection of ubuntu montserrat-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
        
        <!-- Bootsramp CSS files only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- Bootstamp java script files-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <!--Bootstramp java scrtipt files for the dropdown button-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        <!--External CSS file-->
        <link rel ="stylesheet" href="style.css">
        <style>
            
        </style>
      
    </head>

    <body>
        
        <!--Titile section includes title image navigation bar download buttons-->
       
            <div class="container valign">
                <video autoplay muted loop id="myVideo">
                    <source src="video/bgvideo.mp4" type="video/mp4">
                </video>        
        
            </div>
            <!-- <div class="content">
                <h1>Petmeetly helps you find partners, </h1>
                <h1>playmates or adopters for your pets.</h1> 
              
              </div> -->
            
        
 
        <section id="title">
            <div class="container-fluid">
                <!--Navigation bar-->
                <nav class="navbar navbar-expand-lg navbar-dark ">
                    <a href="" class="navbar-brand" ><img class="love-dog" src="images/11342614.png" height="150px"  alt="brndname"></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#toggler">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="toggler" class="collapse navbar-collapse">
                        <ul class="navbar-nav" id="top-links">
                            <li class="nav-item">
                                 <a href="#footer" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                 <a href="#Pricing" class="nav-link">about</a>
                            </li>
                            <li class="nav-item">
                                 <a href="#cta" class="nav-link">Register</a>
                            </li>
                        </ul>
                    </div>   
                </nav>
                <!-- Title text and image
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Meet New and intresting dogs nearby.</h1>
                        <button type="button" class="downloaded-button btn btn-dark btn-lg"><i class="fa-brands fa-apple"></i>Download</button>
                        <button type="button" class="downloaded-button btn btn-lg btn-outline-light"><i class="fa-brands fa-google-play"></i> Download</button>
                    </div>
                    <!-- <div class="col-lg-6" >
                        <!-- <img id="title-dog" src="images/iphone6.png"> 
                    </div> 
                </div> -->
            </div>
           
        </section>
        <!--Feautures section wchich includes bootstramp row - coloum clases-->
        <section id="feautures">
            <div class="row">
                <div class="col-lg-4 feautures-boxes">
                    <i class="fa-solid fa-circle-check fa-5x fa-color"></i>
                    <h3>Easy to use</h3>
                    <p>so easy to use.even your dog also can do it </p>
                </div>
                <div class="col-lg-4 feautures-boxes">
                    <i class="fa-solid fa-bullseye fa-5x fa-color"></i>
                    <h3>Elite Clientle</h3>
                    <p>we have all the dogs,the greatest dogs.</p>
                </div>
                <div class="col-lg-4 feautures-boxes">
                    <i class="fa-solid fa-heart fa-5x fa-color"></i>
                    <h3>Gunrenteed Work</h3>
                    <p>Find the love of your dogs life or your money back.</p>
                </div>
            </div>
        </section>
        <!--This section includes Carousel slide and media partners-->
        <section id="testimonials">
            <div id="testimonial-carousel" class="carousel slide" data-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h2>I no longer have to sniff other dogs for love,I've found the hottest dog on the tindog.woof</h2>
                        <img class="dog" src="images/dog.png">
                        <em>pebbles,New york</em>
                    </div>
                    <div class="carousel-item ">
                        <h2 class="testimonial-text">My dog used to be so lonely, but with Tindog's help,they've found.</h2>
                        <img class="dog" src="images/lady-img.jpg">
                        <em>Beverly,Illinois</em>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div >
                <img class="media"src="images/TechCrunch.png">
                <img class="media"src="images/mashable.png">
                <img class="media"src="images/tnw.png">
                <img  class="media" src="images/bizinsider.png">
            </div>
            
        </section>
        <!--The pricing section includes the Bootstramp cards-->
        <section id="Pricing">
            <h1>Get a love for a life of your dog</h1>
            <p style="color: grey;">all types dogs are available here</p>
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="pricing-coloum col-lg-4 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="hovr" src="images/cp1.jpeg" class="card-img-top" alt="...">
                    </div>
                </div>
                
                <div class="pricing-coloum col-lg-4 col-md-6>">
                    <div class="card" style="width: 18rem;">
                        <img  class="hovr" src="images/cp2.jpeg" class="card-img-top" alt="...">
                    </div>
                </div>
                
                <div class="pricing-coloum col-lg-4 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img  class="hovr" src="images/cp4.jpeg" class="card-img-top" alt="...">
                    </div>
                </div>
                
            </div>
        </section>
        <!--This section contains buttons-->
        <!-- <section class="login">
            <h1>Find the True Love of your Dog's Life Today</h1>
            <button type="button" id="signup" >signup</button>
            <button type="button" id="login" >login</button>
        </section> -->

        <section id="cta" >
            <h3 class="cta-heading">Find the True Love of your Dog's Life Today.</h3>
            <button type="button" class="downloaded-button btn btn-dark btn-lg" onclick="signup()">signup</button>
            <button type="button"class="downloaded-button btn btn-light btn-lg" onclick="login()">login</button>
        </section>
        <!--This section contains copyright text-->
        <footer id="footer">
            <img class="footer-icon" src="images/facebook-brands.svg">
            <img class="footer-icon" src="images/instagram-brands.svg">
            <img class="footer-icon" src="images/twitter-brands.svg">
            <img class="footer-icon" src="images/envelope-solid.svg">
            <p>© Copyright 2022 Tindog</p>
        </footer>
        <script>
            function signup(){
                window.location.href="/signup.html";
                alert("hi");
            }
            function login(){
                window.location.href="/login1.html";
                alert("hi");
            }
            // var audio = document.getElementsByClassName("dogsound");
            // $("img").mouseover(function(){
            //     audio.play();
            // });
            // audio.play();
            // document.querySelectorAll("img")[0].addEventListener("click", function(){
            //     console.log("hii");
            //     var audio = new Audio("sounds/littledog.wav");
            //     audio.play();
                
            // });
            // for( var i=0 ; i< document.querySelectorAll("img").length;i++){
            //     console.log(i);
                var audio=new Audio("sounds/mixkit-happy-puppy-barks-741.wav");
                audio.play();
            // }
        </script>



  </div>
    </body>
</html>
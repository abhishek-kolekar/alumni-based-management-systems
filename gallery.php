<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alumni Management System</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/0288478d4c.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Animate.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
#viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
}.hero {
    position: relative; 
    height: 65vh;
    width: 100%;
    display: flex;
    padding-top: 300px;
    align-items: center;
    justify-content: center;
    background: #00000087;
}
.hero::before {    
    content: "";
    background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(8, 8, 8, 0.5)), url(cimg.jpg);
    background-size: cover;
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    opacity: 0.9;
}
#wlc {
  position: relative;
  color: white;  
  line-height: 0.9;
}
body, footer {
    background: whitesmoke !important;
}
.nav-bg{
    background-color: white;
    box-shadow: 0 0px 30px 0px rgba(0, 0, 0, 0.15);
}
.navbar-nav .nav-link{
    font-weight: bold;
    font-size: 20px;
    color: white !important;
}
.navbar-toggler{
    outline:none!important;
}
.navbar-nav .nav-link:hover {
    transform: translateY(-2px) scale(1.005) translateZ(0);
    box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
    0 24px 46px var(--box-shadow-color);
    transition: all 0.3s ease-out;
}
nav#mainNav {
    background: #00000099;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
img{
max-width: 100%;  
height: 100%;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);
border-radius: 14px;
}  

</style>
<body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger text-white" href="./" style="font-weight: bold;">Alumni Management System</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" 
                data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" 
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0" style="padding-left: 420px">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="alumni.php">Alumni</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="donation_page.php">Donate</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="signup.php" id="login">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1 id="wlc" style="font-weight: bold;font-size: 60px">GALLERY</h1>
        </div><br><br>
        
        <div class="row"style="padding-right: 20px;padding-left: 20px;">
            <div class="col-lg-4 col-md-4 col-xs-4 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="images/img.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="cimg.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="images/img2.jpg" alt="">
                </a>
            </div>
        </div><br><br>

        <div class="row"style="padding-right: 20px;padding-left: 20px;">
            <div class="col-lg-4 col-md-4 col-xs-4 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="images/img3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="images/img4.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="images/img5.jpg" alt="">
                </a>
            </div>
        </div>

            <footer class=" py-5">
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0 text-black">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row" style="padding-left: 280px;">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div class="text-black">32457866</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <a class="d-block" href="mailto:">abc@gmail.com</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container"><div class="small text-center text-muted">Copyright © 2021 - Alumni | <a href="" target="_blank">Alumni</a></div></div>
        </footer>
        </html>
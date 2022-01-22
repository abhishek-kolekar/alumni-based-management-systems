<?php
session_start();
?>
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
a.jqte_tool_label.unselectable {
    height: auto !important;
    min-width: 4rem !important;
    padding:5px
}/*
a.jqte_tool_label.unselectable {
    height: 22px !important;
}*/
.banner{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 26vh;
    width: calc(30%);
    }
.banner img{
    width: calc(100%);
    height: calc(100%);
    cursor :pointer;
}
.event-list{
    cursor: pointer;
    border: unset;
    flex-direction: inherit;
}
.event-list .banner {
    width: calc(40%)
}
.event-list .card-body {
    width: calc(60%)
}
.event-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}
.banner{
   min-height: calc(100%)
}
.collapse.a{
	text-indent:10px;
}
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
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}.a.navbar-brand.js-scroll-trigger{
    box-sizing: border-box;
}.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}
.table th, .table td {
    padding: 15px;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
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
            <h2 id="wlc">Welcome to Alumni Management System</h2>
        </div>
        <br><br>
            <div class="container mt-3 pt-2">
                <h4 class="text-center text-blue">Upcoming Events</h4>
                <hr class="divider">
                <div class="card event-list"style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);border-radius: 14px;" data-id="#">
                     <div class='banner'>
                            <img src="cimg.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt">Alumni Meet</b></h3>
                                <div>
                                    <small>
                                        <p><b><i class="fa fa-calendar"></i>&nbsp&nbspAugust 15, 2021 12:00 PM</b></p>
                                    </small>
                                </div>
                                <hr>
                                <larger class="truncate filter-txt">Casual Meet</larger>
                                <br>
                                <hr>
                                <button class="btn btn-primary float-right read_more" data-id="#">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="table">
                    <table style="display: inline-block;float: left;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);border-radius: 14px;background-color: white;">
                        <tr>
                            <td><h2>Newsroom</h2></td>
                        </tr>
                        <tr>
                            <td>Commencement of Placement Season 2021-22</td>
                        </tr>
                        <tr>
                            <td>India Today Best Colleges 2021 Results</td>
                        </tr>
                        <tr>
                            <td>Rankings by DQ-CMR Top Technical School Survey 2021</td>
                        </tr>
                        <tr>
                            <td>Government College of Engineering Karad completes 61 years of excellence</td>
                        </tr>
                        <tr>
                            <td>NBA Accreditation of UG Programs</td>
                        </tr>
                        </table>
                        </div>
                        <div class="table"style="padding-top: -70px !important">
                        <table style="padding-left: 40px;padding-right: 40px;display: inline-block;margin-left: 210px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2);border-radius: 14px;background-color: white;">
                        <tr>
                            <td><h2>Jobs</h2></td>
                        </tr>
                        <tr>
                            <td>JAVA Angular Senior Developer</td>
                        </tr>
                        <tr>
                            <td>JAVA, Micro Services at Oracle</td>
                        </tr>
                        <tr>
                            <td>Oracle/Netezza at Oracle</td>
                        </tr>
                        <tr>
                            <td>Plant IT Manager at Global Tyre</td>
                        </tr>
                        <tr>
                            <td>Core JAVA Developer</td>
                        </tr>
                    </table>
                </div>
</body>
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
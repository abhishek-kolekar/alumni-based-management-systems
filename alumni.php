<?php 
include 'admin/db_connect.php'; 
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
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.alumni-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.alumni-img {
    width: calc(30%);
    max-height: 30vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.alumni-list .card-body{
    width: calc(70%);
}
.alumni-img img {
    border-radius: 100%;
    max-height: calc(100%);
    max-width: calc(100%);
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 50vh !important;
        height: 50vh !important
    }
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.alumni-text{
    justify-content: center;
    align-items: center ;
}
.alumni-list p {
	margin:unset;
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Alumni</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="donation_page.php">Donate</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="signup.php" id="login">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1 id="wlc" style="font-weight: bold;font-size: 60px">ALUMNI LIST</h1>
        </div><br><br>
        <div class="container">
        		<div class="card mb-4 mt-4">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-8">
		                    <div class="input-group mb-3" >
		                      <div class="input-group-prepend"style="padding: 10px;">
		                        <span class="input-group-text" id="filter-field"><i class="fa fa-search"></i></span>
		                      </div>
		                      <input type="text" class="form-control" id="filter" placeholder="Filter name,course, etc." aria-label="Filter" aria-describedby="filter-field">
		                    </div>
		                </div>
		                <div class="col-md-4">
		                    <button class="btn btn-outline-success" id="search">Search</button>
		                </div>
		            </div>
		            
		        </div>
		    </div>
        	</div>	
            <div class="container-fluid mt-3 pt-2" style="padding-left: 30px;">
               
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
                    <?php
                $alumni = $conn->query("SELECT a.*,c.course,Concat(a.lastname,', ',a.firstname,' ',a.middlename) as name from alumnus_bio a inner join courses c on c.id = a.course_id order by Concat(a.lastname,', ',a.firstname,' ',a.middlename) asc");
                while($row = $alumni->fetch_assoc()):
                ?>
                <div class="col-md-4 item">
                <div class="card alumni-list" data-id="<?php echo $row['id'] ?>">
                        <div class="alumni-img" card-img-top>

                            <img src="admin/avatar.jpg" alt="">
                        </div>
                    <div class="card-body">
                        <div class="row align-items-center h-100">
                            <div class="">
                                <div>
                                <p class="filter-txt"><b><?php echo $row['name'] ?></b></p>
                                <hr class="divider w-100" style="max-width: calc(100%)">
                                <p class="filter-txt">Email: <b><?php echo $row['email'] ?></b></p>
                                <p class="filter-txt">Course: <b><?php echo $row['course'] ?></b></p>
                                <p class="filter-txt">Batch: <b><?php echo $row['batch'] ?></b></p>
                                <p class="filter-txt">Currently working in/as <b><?php echo $row['connected_to'] ?></b></p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                <?php endwhile; ?>
                </div>
                </div>
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
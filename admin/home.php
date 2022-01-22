<?php include 'db_connect.php' ?>
<?php
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alumni Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/0288478d4c.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Animate.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<style>
body {
    font-family: "Open Sans", sans-serif;
    color: #444444 !important;
    width: 100%;
    height: calc(100%);
}
nav#sidebar {
    height: calc(100%);
    position: fixed;
    z-index: 99;
    left: 0;
    width: 250px;
    background: url(cimg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.5;
    color: #212529 !important;
    text-align: left !important;
    background-color: #fff !important;
}
a.nav-item{
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    border: 1px solid rgba(0,0,0,.125);
    background-color: #ffffffc4;
    color: #484343;
    font-weight: 600;
    text-decoration: none;
}
a.nav-item:hover, .nav-item.active {
    background-color: #000000ad;
    color: #fffafa;
}
.container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
    .collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background: url('cimg.jpg') !important
	}
    .fixed-top{
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
    }
    .bg-primary {
    background-color: #007bff!important;
}.navbar-nav{
    padding-left: 930px;
}#dropdownMenuButton1{
    color: white;
    background-color: #007bff;
    border: none;
}.navbar-brand{
    color: white;
}
.navbar-brand:hover{
    color: white;
}.card{
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: 1050px;
    word-wrap: break-word;
    background-color: white;
    box-shadow: 0 0px 30px 0px rgba(0, 0, 0, 0.15);
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
span.float-right.summary_icon {
    font-size: 3rem;
    position: absolute;
    right: 1rem;
    color: #ffffff96;
}
</style>

<body style="background-color: whitesmoke;">
<nav class="navbar navbar-expand-lg" style="background-color: #007bff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-weight:bold;">Alumini Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <div class="dropdown float: right">
	  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		Admin
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		<li><a class="dropdown-item" href="ajax.php?action=logout">Logout</a></li>
	  </ul>
	</div>
      </ul>
    </div>
  </div>
</nav>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="#" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="alumni.php" class="nav-item nav-alumni"><span class='icon-field'><i class="fa fa-users"></i></span> Alumni List</a>
				<a href="events.php" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Events</a>
				<a href="users.php" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Donation</a>
		</div>

</nav>
<div class="containe-fluid">
	<div class="row mt-3 ml-3 mr-3">
        <div class="col-lg-12"style="padding-left:300px;">
            <div class="card">
                <div class="card-body"style="font-weight:bold;">
                Welcome Back....
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body bg-primary">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"><i class="fa fa-users"></i></span>
                                        <h4><b>
                                        <?php echo $conn->query("SELECT * FROM alumnus_bio where status = 0")->num_rows; ?>
                                        </b></h4>
                                        <p><b>Alumni</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body bg-warning">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"><i class="fa fa-calendar-day"></i></span>
                                        <h4><b>
                                        <?php echo $conn->query("SELECT * FROM events where date_format(schedule,'%Y-%m%-d') >= '".date('Y-m-d')."' ")->num_rows; ?>
                                        </b></h4>
                                        <p><b>Upcoming Events</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body bg-info">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"><i class="fa fa-users"></i></span>
                                        <h4><b>
                                        <?php echo $conn->query("SELECT * FROM donation")->num_rows; ?>
                                        </b></h4>
                                        <p><b>Donations</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>	

                    
                </div>
            </div>      			
        </div>
    </div>
</div>
</body>
<script>
	$('#manage-records').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_track',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success:function(resp){
                resp=JSON.parse(resp)
                if(resp.status==1){
                    alert_toast("Data successfully saved",'success')
                    setTimeout(function(){
                        location.reload()
                    },800)

                }
                
            }
        })
    })
    $('#tracking_id').on('keypress',function(e){
        if(e.which == 13){
            get_person()
        }
    })
    $('#check').on('click',function(e){
            get_person()
    })
    function get_person(){
            start_load()
        $.ajax({
                url:'ajax.php?action=get_pdetails',
                method:"POST",
                data:{tracking_id : $('#tracking_id').val()},
                success:function(resp){
                    if(resp){
                        resp = JSON.parse(resp)
                        if(resp.status == 1){
                            $('#name').html(resp.name)
                            $('#address').html(resp.address)
                            $('[name="person_id"]').val(resp.id)
                            $('#details').show()
                            end_load()

                        }else if(resp.status == 2){
                            alert_toast("Unknow tracking id.",'danger');
                            end_load();
                        }
                    }
                }
            })
    }
</script>

</html>
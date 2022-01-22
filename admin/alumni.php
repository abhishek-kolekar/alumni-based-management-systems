<?php include('db_connect.php');?>
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
}
span.float-right.summary_icon {
    font-size: 3rem;
    position: absolute;
    right: 1rem;
    color: #ffffff96;
}   td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
	.avatar {
	    display: flex;
	    border-radius: 100%;
	    width: 100px;
	    height: 100px;
	    align-items: center;
	    justify-content: center;
	    border: 3px solid;
	    padding: 5px;
	}
	.avatar img {
	    max-width: calc(100%);
	    max-height: calc(100%);
	    border-radius: 100%;
	}
	a{
		text-decoration: none;
		color: red;
	}
	a:hover{
		color: white;
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
				<a href="home.php" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="#" class="nav-item nav-alumni"><span class='icon-field'><i class="fa fa-users"></i></span> Alumni List</a>
				<a href="events.php" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Events</a>
				<a href="users.php" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Donations</a>
		</div>

    </nav>
<div class="container-fluid"style="padding-left:300px;">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of Alumni</b>
						<!-- <span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="index.php?page=manage_alumni" id="new_alumni">
					<i class="fa fa-plus"></i> New Entry
				</a></span> -->
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<!-- <colgroup>
								<col width="5%">
								<col width="10%">
								<col width="15%">
								<col width="15%">
								<col width="30%">
								<col width="15%">
							</colgroup> -->
							<thead>
								<tr>
									<th class="text-center">Sr.No</th>
									<th class="">Avatar</th>
									<th class="">Name</th>
									<th class="">Course Graduated</th>
									<th class="">Batch</th>
									<th class="">Currently working in</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$i = 1;
									$alumni = $conn->query("SELECT a.*,c.course,Concat(a.lastname,', ',a.firstname,' ',a.middlename) as name from alumnus_bio a inner join courses c on c.id = a.course_id order by Concat(a.lastname,', ',a.firstname,' ',a.middlename) asc");
									while($row=$alumni->fetch_assoc()):
										
									?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="text-center">
										<div class="avatar">
										 <img src="avatar.jpg" class="" alt="">
										</div>
									</td>
									<td class="">
										 <p> <b><?php echo ucwords($row['name']) ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['course'] ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['batch'] ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['connected_to'] ?></b></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-outline-danger delete_alumni" type="button" data-id=""><a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
</body>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
</script>

</html>
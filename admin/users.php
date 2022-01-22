<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
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
a.nav-item:hover{
    background-color: #000000ad;
    color: #fffafa;
}
.nav-item.active {
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
		margin: unset;
	}
	img{
		max-width:100px;
		max-height: :150px;
	}.search{
	     margin-left:70%;
         width: 300px;
	     height: 30px;
	    }.btn1 {
            background-color: #007bff;
            color:white;
			float: right;
			height: 40px;
            width:70px;
			margin-right: 20px;
            border-radius: 10px;
            box-shadow: 0 0px 30px 0px rgba(0, 0, 0, 0.15);
            border: none;
		}
        .card.col-lg-12{
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
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
				<a href="alumni.php" class="nav-item nav-alumni"><span class='icon-field'><i class="fa fa-users"></i></span> Alumni List</a>
				<a href="events.php" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Events</a>
				<a href="#" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Donations</a>
		</div>

    </nav><br><br>
    <div class="container-fluid"style="padding-left:300px;">
	
	<br>
    <div class="page">
         <input class="search" type="text" placeholder="Search..">
	     <br>
	     <br>
	<div class="row">
        <div class="card">
			<div class="card-header">
				<b>Donations</b>
			</a>
					</div><br>
		<div class="card col-lg-12">
        
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
			<thead>
				<tr>
					<th class="text-center">Sr.No</th>
					<th class="text-center">First Name</th>
					<th class="text-center">Last Name</th>
					<th class="text-center">Email</th>
					<th class="text-center">City</th>
                    <th class="text-center">Amount</th>
				</tr>
			</thead>
			<tbody>
                <?php
                    include 'db_connect.php';
                    $email = '';
                    $city = '';
                    $type = array("","Admin","Staff","Alumnus/Alumna");
                    $users = $conn->query("SELECT * FROM donation order by name asc");
                    $i = 1;
                    while($row= $users->fetch_assoc()):
                ?>
				 <tr>
				 	<td class="text-center">
                     <p> <b><?php echo $i++ ?></b></p>
				 	</td>
				 	<td class="text-center">
                        <p> <b><?php echo $row['name'] ?></b></p>
				 	</td>
				 	<td class="text-center">
                        <p> <b><?php echo $row['lastname'] ?></b></p>
				 	</td>
				 	<td class="text-center">
                        <p> <b><?php echo $row['email'] ?></b></p>
				 	</td>
                     <td class="text-center">
                        <p> <b><?php echo $row['city'] ?></b></p>
				 	</td>
                     <td class="text-center">
                        <p> <b><?php echo $row['amount'] ?></b></p>
				 	</td>
				 </tr>
                 <?php endwhile; ?>
			</tbody>
		</table><br>
	 </div>
			</div>
		</div>
	</div>

</div>
</body>
<script>
	$('table').dataTable();
$('#new_user').click(function(){
	uni_modal('New User','manage_user.php')
})
$('.edit_user').click(function(){
	uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
})
$('.delete_user').click(function(){
		_conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')])
	})
	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>

</html>
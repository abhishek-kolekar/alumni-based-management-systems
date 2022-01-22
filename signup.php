<?php 
include 'admin/db_connect.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up page</title>
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
    img#cimg{
        max-height: 10vh;
        max-width: 6vw;
    }
    body {
    background-image: url('cimg.jpg');
    background-size: cover;
	background-repeat: no-repeat;
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
</style>
        <div class ="login-page">
        <div class = "form">
            <div class="container mt-3 pt-2">
               <div class="col-lg-12">
                   <div class="card mb-4">
                        <div class="card-body"style="background-color:#e3dedee0 !important;">
                            <div class="header" style="text-align: center;">
                                <h2>Register Details</h2><hr><br>
                            </div>
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <form action="connect.php" id="create_account" method = "POST">   <!-- action-->
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" required placeholder="Last Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="firstname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" required placeholder="First Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="middlename" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" placeholder="Middle Name">
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select class="form-select" name="gender" required>
                                                    <option>Gender</option>    
                                                    <option value="m">Male</option>
                                                    <option value="f">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="batch" class="form-label">Batch</label>
                                                <input type="input" class="form-control datepickerY" name="batch" required placeholder="Batch">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="course_id" class="form-label">Course Graduated</label>
                                                <select class="form-select select2" name="course_id" required>
                                                    <option>Course</option>
                                                    <?php 
                                                    $course = $conn->query("SELECT * FROM courses order by course asc");
                                                    while($row=$course->fetch_assoc()):
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['course'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-5">
                                                <label for="connected_to" class="form-label">Currently Connected To</label>
                                                <textarea name="connected_to" id="" cols="30" rows="3" class="form-control" placeholder="Organiztion"></textarea>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                             <div class="col-md-4">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" required placeholder="Email">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" required placeholder="Password">
                                            </div>
                                        </div>
                                        <div id="msg">
                                            
                                        </div><br>
                                        <hr class="divider">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary">Create Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
                
            </div>
            </div>
    </div>
<script>
   $('.datepickerY').datepicker({
        format: " yyyy", 
        viewMode: "years", 
        minViewMode: "years"
   })
   $('.select2').select2({
    placeholder:"Please Select Here",
    width:"100%"
   })
   function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('#create_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=signup',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            if(resp == 1){
                location.replace('index.php')
            }else{
                $('#msg').html('<div class="alert alert-danger">email already exist.</div>')
                end_load()
            }
        }
    })
})
</script>
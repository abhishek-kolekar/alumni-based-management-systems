<?php
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $gender = $_POST['gender'];
    $batch= $_POST['batch'];
    $course_id = $_POST['course_id'];
    $connected_to= $_POST['connected_to'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'alumni_db');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
         }
         else{
             $stmt = $conn->prepare("insert into alumnus_bio( firstname, middlename,lastname, gender, batch, course_id, email, connected_to)
             values(?, ?, ?, ?, ?, ?, ?, ?) ");
             $stmt->bind_param("ssssisss", $firstname, $middlename, $lastname, $gender, $batch, $course_id, $email, $connected_to);
             $stmt->execute();
             header('location: home.php');
             $stmt->close();
             $conn->close();
         }





?>
<?php
session_start();

$con = mysqli_connect("localhost","root","","registration");

if(isset($_POST['insert_data']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];

    $query = "INSERT INTO employees (name, phone, email, designation) VALUES ('$name','$phone',' $email','$designation')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Employee Has Been Registered Successfully";
        header("Location: insert-data.php");
    }
    else
    {
        $_SESSION['status'] = "Employee Has Not Been Registered Successfully";
        header("Location: insert-data.php");
    }
}



?>
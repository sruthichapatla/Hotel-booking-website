<?php
include 'database.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM details WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        // Redirect user to the home page (wynk.html)
        header("location: homepage.php");
        exit;
    }
    else
    {
        echo "<script>alert('Invalid email or password')</script>";
        header("refresh:0;url=login.php"); // Redirect back to login page
    }
}
?>
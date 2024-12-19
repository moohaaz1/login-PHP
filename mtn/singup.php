<?php
 session_start();

 include("db.php");

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {

        $query = "insert into mtn (fname,lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('successfully Register')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('please Enter some valid information')</script>"; 
    }
 }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from login and Register </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
    <h1>sign up</h1>
    <h4>it's free only takes a minute</h4>
    <form method="POST">
        <label>first name</label>
        <input type="text" name="fname" required>
        <label>last name</label>
        <input type="text" name="lname" required>
        <label>gender</label>
        <input type="text" name="gender" required>
        <label>contact Address</label>
        <input type="tel" name="number" required>
        <label>Address</label>
        <input type="text" name="add" required>
        <label>Email</label>
        <input type="email" name="mail" required>
        <label>password</label>
        <input type="text" required>
        <label>first name</label>
        <input type="password" name="pass" required>
        <input type="submit" name="" value="submit">
        
        
    </form>
    <p>By clicking the  sign up button,you agree to our <br>
    <a href="">Terms and condition</a>and <a href="#">policy privacy</a>
</p>
<p>Already have an account? <a href="login.php">login here</a></p>
    
</div>
</body>
</html>
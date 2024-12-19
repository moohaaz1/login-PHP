<?php
 session_start();

 include("db.php");

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];
    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "select * from mtn where email = '$gmail' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {

            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);

                if($user_data['pass'] == $password)
                {
                    header("locaction: index.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
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
    <div class="login">
        <h1>login</h1>
      
        <form method="POST">
           
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>password</label>
           
            <input type="password" name="pass" required>
            <input type="submit" name="" value="submit">
            
            
        </form>
        <p>not have an account? <a href="singup.php">sign up here</a></p>
</body>
</html>
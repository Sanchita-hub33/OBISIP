<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

include "link.php";

if (isset($_POST['signUp'])) {
    $f_name = $_POST['fName'];
    $l_name = $_POST['lName'];
    $email = $_POST['mailId'];
    $password = $_POST['pass'];
    $password = md5($password);

    $valid_email = "SELECT * FROM people where email ='$email'" ;
    $result = mysqli_query($connect , $valid_email);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
        echo "Email Address already exists";
    }
    else{
        $insertValues = "INSERT INTO people(fName,lName,email,password)
                          values('$f_name','$l_name','$email','$password')";

        if (mysqli_query($connect , $insertValues)== true) {
            header("location: index.php");
        }else {
            echo "Error!".mysqli_error();
        }
    }
}


if (isset($_POST['signIn'])) {
    $email = $_POST['mailId'];
    $password = $_POST['pass'];
    $password = md5($password);

    $valid_details = "SELECT * FROM people where email = '$email' and password='$password' " ;
    $result = mysqli_query($connect , $valid_details);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("location: welcome.php");
        exit();
    }
    else{
        echo "<div class='container' style='text-align:center; padding: 20px;font-size:40px; font-weight:bolder; color:brown;'>Not found, Incorrect Email or Password<br>";
        echo "<a href='index.php'>Sign in again</a></div>";
    }
}
?>
    
</body>
</html>
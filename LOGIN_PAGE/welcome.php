<?php
    session_start();
    include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="text-align:center; padding: 20px;">
        <p style="font-size:40px; font-weight:bolder; color:blueviolet;">
            Welcome 
            <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    $sql = "SELECT people.* from `people` where people.email= '$email'";
                    $Final_result= mysqli_query($connect , $sql);
                    while ($row=mysqli_fetch_array($Final_result)) {
                        echo ucwords($row['fName'].' '.$row['lName']);
                    }
                    echo "<br>";
                }
            ?>
            You have Succesfully Logged In
        </p>
        <div style="font-weight:bold;padding-top:20px">
            <span >Want to logout?click 👉<a href="logout.php">Logout</a></span> 
        </div>
    </div>

    
    
</body>
</html>
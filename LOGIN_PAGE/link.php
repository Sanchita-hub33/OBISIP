<?php

$servername = "localhost";
$username = "root";
$pass = "";
$database = "login_system";

$connect = new mysqli($servername , $username , $pass , $database , 3309);

if(!$connect){
    echo "Connection Failed".mysqli_connect_error();
}

?>
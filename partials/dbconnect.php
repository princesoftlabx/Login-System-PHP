<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die ("Connection failed". mysqli_connect_error($conn));
}
// else{
//     echo "You are now connected with the database";
// }



?>
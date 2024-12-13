<?php 

$host_name="localhost";
$username="trust";
$password="7777";
$database_name="recipe_com";

$connect= mysqli_connect($host_name, $username, $password, $database_name);

if (!$connect) {
    echo "could not connect" . mysqli_connect_error();
}

// else {
//     echo "connection successful";
// }


?>
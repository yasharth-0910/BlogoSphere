<?php
require 'constant.php';

//Connection to MySQL Database

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_errno($connection)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
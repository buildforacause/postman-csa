<?php
    $servername="localhost";
    $username_db="username";
    $password="passwordhaibhai";
    $database="postman_csa";

    $conn= mysqli_connect($servername,$username_db,$password,$database);
    if (! $conn ) {
        die('Sorry we failed to connect!');
    }
?>
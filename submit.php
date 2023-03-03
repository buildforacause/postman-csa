<?php

include("connect.php");

if(isset($_POST["firstName"])){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $link = $_POST["link_of_badge"];
    $review = $_POST["review"];
    $suggestion = $_POST["suggestion"];
    $year = $_POST["year"];
    $division = $_POST["division"];
    $branch = $_POST["branch"];
    $sql="insert into feedback (firstName, lastName, email, link_of_badge, review, suggestion, year, division, branch) values ('$firstName', '$lastName', '$email','$link','$review','$suggestion','$year', '$division', '$branch')";
    $res=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($res){
        echo "<script> window.location = '/'</script>";
    }else{
        echo "something went wrong";
    }
}

?>
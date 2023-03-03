<?php
error_reporting(E_ALL ^ E_NOTICE); 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');
include("connect.php");
        $data = json_decode(file_get_contents("php://input"), true);
        $firstName = $data["firstName"];
        $lastName = $data["lastName"];
        $email = $data["email"];
        $link = $data["link_of_badge"];
        $review = $data["review"];
        $suggestion = $data["suggestion"];
        $year = $data["year"];
        $division = $data["division"];
        $branch = $data["branch"];


        $sql="insert into feedback (firstName, lastName, email, link_of_badge, review, suggestion, year, division, branch) values ('$firstName', '$lastName', '$email','$link','$review','$suggestion','$year', '$division', '$branch')";
        $res=mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($res){
            echo json_encode(['msg' => 'Thank You For The Response!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Failed!', 'status' => false]);
}
?>
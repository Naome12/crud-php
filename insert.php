<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];



//add new client to database

$sql="INSERT INTO `clients`(name,email,phone,address)VALUES('$name','$email','$phone','$address')";

$resultt=mysqli_query($conn,$sql);
if(!$result){
  $errorMessage= "Invalid query:".$conn->error;
}

header("location: ./first.php");
exit;

    }while(false);

?>

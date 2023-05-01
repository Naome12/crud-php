<?php
$servername = 'localhost';
$username="root";
$dbname="myshop";
$password="";

// $conn = new mysqli($servername,$username,$password,$dbname);
// if(!$conn){
//     echo "connection failed";

// }else{
//     echo "connected successfully";
// }

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
 die("connection failed:". $connection->query($sql));
}


?>
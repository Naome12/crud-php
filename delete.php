<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql ="delete from `clients`  where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: ./first.php");
    }else{
        die(mysqli_error($conn));
    }
}
?>
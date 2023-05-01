<?php
include "connection.php";
$id = $_GET['editid'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];



//add new client to database

$sql="update `clients` set id=$id,name='$name',email='$email',phone='$phone',address='$address'";

$result=mysqli_query($conn,$sql);
if(!$result){
  $errorMessage= "Invalid query:".$conn->error;
}

// echo "updated sucessfully";
header("location: ./first.php");
exit;
}

?>

 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="alternate" href="form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Document</title>
 </head>
 <body>
 <div class="container my-5">
    <form method="post" my=5>
            <div class="row mb-3">

                <label class ="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" >
                </div>
            </div>

            <div class="row mb-3">

<label class ="col-sm-3 col-form-label">Email</label>
<div class="col-sm-6">
    <input type="email" class="form-control" name="email" >
</div>
</div>

<div class="row mb-3">
<label class ="col-sm-3 col-form-label">Phone</label>
<div class="col-sm-6">
    <input type="number" class="form-control" name="phone" autocomplete="off">
</div>
</div>
<div class="row mb-3">
<label class ="col-sm-3 col-form-label">Address</label>
<div class="col-sm-6">
    <input type="text" class="form-control" name="address" autocomplete="off">
</div>
</div>
<div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-primary">update</button>
    </div>
    <div class="col-sm-3 d-grid">
        <a href="./first.php" class="btn btn-outline-primary" role="button">Cancel</a>
    </div>
</div>
        </form>
    </div>
 </body>
 </html>
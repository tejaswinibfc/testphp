<?php
include "user.php";
$add = new Users();

if (isset($_POST['submit'])) {
    $add->insert_user($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php include "links.php";?>
   <?php include "message.php";?>
</head>
<body>

  <h2>Sign UP</h2>
  <hr>
  <form action="register.php" method="post">

  <div class="col-sm-6">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Enter Name" required>
  </div>
</div>

<div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
</div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="number" class="form-control" id="mobile" aria-describedby="mobile" placeholder="Enter Mobile No." name="mobile" maxlength="10" minlength="10" required>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" aria-describedby="address" placeholder="Enter Address" name="address"   required >
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="pasword">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Password" name="password"   required >
  </div>
</div>


<button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

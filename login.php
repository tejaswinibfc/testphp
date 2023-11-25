<?php
include "user.php";
$add = new Users();

if (isset($_POST['login'])) {
    $add->login_user($_POST);
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

  <h2>Login</h2>
  <hr>
  <form action="login.php" method="post">

<div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
</div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="pasword">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter Password" name="password"   required >
  </div>
</div>


<button type="submit" value="submit" name="login" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $sql = "SELECT * FROM  users WHERE email  ='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        echo '<script>alert("email already exsit ")</script>';
    } else {
        $data = "INSERT INTO users (name, email, address, mobile) VALUES ('$name','$email','$address','$mobile')";
        if (mysqli_query($conn, $data)) {
            echo '<script>alert("User added successfully")</script>';
        } else {
            echo '<script>alert("error occured")</script>';
        }

    }

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
</head>
<body>

  <h2>Sign UP</h2>
  <hr>
  <form action="insert.php" method="post">

  <div class="col-sm-6">
    <label for="name">Name</label>
    <div class="form-group">
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
</div>

<button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

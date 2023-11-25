<?php
include "connect.php";

if (isset($_POST['update'])) {
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $sql = "SELECT * FROM  users WHERE email  ='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        echo '<script>alert("email already exsit ")</script>';
    } else {
        $data = "Update users SET name='$name', mobile='$mobile',email='$email',address='$address' where id=$user_id";
        $result = mysqli_query($conn, $data);
        if ($result == true) {
            echo '<script>alert("User updated successfully")</script>';
        } else {
            echo '<script>alert(""Invalid credentials"")</script>';
        }
    }

}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id` =$user_id";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['address'];
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

  <h2>Update User</h2>
  <hr>
  <form action="" method="post">

  <div class="col-sm-6">
    <label for="name">Name</label>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" class="form-control" id="name"  name="name" value ="<?php echo $name; ?>"  placeholder="Enter Name" required>
  </div>
</div>

<div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  value=" <?php echo $email; ?>" class="form-control"  placeholder="Enter email" required>
</div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile No." name="mobile" value ="<?php echo $mobile; ?>" required>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address"  value="<?php echo $address; ?> " aria-describedby="address" placeholder="Enter Address" name="address" required >
  </div>
</div>
</div>

<button type="submit" value="submit" name="update" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
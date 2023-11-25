<?php
include "user.php";
$add = new Users();
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $data = $add->edit_user($user_id);
}
if (isset($_POST['update'])) {
    $add->update_user($_POST);
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
  <form action="updateUser.php" method="post">

  <div class="col-sm-6">
    <label for="name">Name</label>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="text" class="form-control" id="name"  name="name" value ="<?php echo $data['name']; ?>"  placeholder="Enter Name" required>
  </div>
</div>

<div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  value=" <?php echo $data['email']; ?>" class="form-control"  placeholder="Enter email" required>
</div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile No." name="mobile" value ="<?php echo $data['mobile']; ?>" required>
  </div>
</div>

<div class="col-sm-6">
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address"  value="<?php echo $data['address']; ?> " aria-describedby="address" placeholder="Enter Address" name="address" required >
  </div>
</div>
</div>

<button type="submit" value="submit" name="update" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
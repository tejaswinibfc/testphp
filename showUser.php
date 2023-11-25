<?php
include "user.php";
$add = new Users();

if (isset($_GET['id'])) {
   
    $user_id = $_GET['id'];
  $add->delete_user($user_id);
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
  <br>
<h2>Users details
<a href="register.php" class="btn btn-primary" style="float:right;">Add New Record</a>
</h2>
<br>

<table class="table table-striped ">
  <thead>
    <tr>
      <th>Sr no.</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
 <?php
$cust = $add->show_user();
foreach ($cust as $key => $value) {
    ?>
<tr>
  <td><?php echo $value['id']; ?> </td>
  <td><?php echo $value['name']; ?> </td>
  <td><?php echo $value['email']; ?> </td>
  <td> <?php echo $value['mobile']; ?></td>
  <td> <?php echo $value['address']; ?></td>
  <td>
    <a href="updateUser.php?id=<?php echo $value['id']; ?>"><i class="fa fa-edit" style="font-size:20px;color:#4646c1;margin:12px;"></i></a>
    <a href="showUser.php?id=<?php echo $value['id']; ?>" onclick="confirm('Are you sure want to delete')"><i class="fa fa-trash" style="font-size:20px;color:#e54747 "></i>
  </td>
</tr>
<?php
}
?>

  </tbody>
</table>







</body>
</html>

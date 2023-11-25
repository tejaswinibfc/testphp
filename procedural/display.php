

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
<h2>User details</h2>
<hr>
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
include "connect.php";
$data = "Select * from users";
$result = $conn->query($data);

while ($row = $result->fetch_assoc()) {
    ?>
<tr>
  <td><?php echo $row['id']; ?> </td>
  <td><?php echo $row['name']; ?> </td>
  <td><?php echo $row['email']; ?> </td>
  <td> <?php echo $row['mobile']; ?></td>
  <td> <?php echo $row['address']; ?></td>
  <td>
    <a href="update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit" style="font-size:20px;color:#4646c1;margin:12px;"></i></a>
    <a href="delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash" style="font-size:20px;color:#e54747 "></i>
  </td>
</tr>
 <?php
}
?>


  </tbody>
</table>







</body>
</html>

<?php
include "connect.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = "DELETE FROM `users` WHERE `id`=$id";
    $result=$conn->query($data);
    if($result ==true){
      echo '<script>alert("User deleted successfully")</script>';
    }else{
      echo '<script>alert("Invalid ")</script>';
    }

}

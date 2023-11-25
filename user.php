<?php
session_start();
class Users
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "example";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if (mysqli_connect_error()) {

            trigger_error("Failed to connect database:" . (mysqli_connect_error()));
        } else {
            echo '<script>alert("connection successfully")</script>';
        }
    }

//  insert data //

    public function insert_user()
    {
        $name = $this->conn->real_escape_string($_POST['name']);
        $email = $this->conn->real_escape_string($_POST['email']);
        $address = $this->conn->real_escape_string($_POST['address']);
        $mobile = $this->conn->real_escape_string($_POST['mobile']);
        $password = $this->conn->real_escape_string(md5($_POST['password']));

        $check_email = "SELECT * FROM customers WHERE email ='$email'";
        $result = $this->conn->query($check_email);
        if ($result->num_rows > 0) {
            echo '<script>alert("email already exsit ")</script>';
        } else {
            $data = "INSERT INTO customers (name, email, address, mobile,password) VALUES ('$name','$email','$address','$mobile','$password')";

            if ($this->conn->query($data)) {
                header("Location:showUser.php");
                echo '<script>alert("User added successfully")</script>';

            } else {
                echo '<script>alert("Error occured")</script>';
            }
        }

    }

// show data //

    public function show_user()
    {
        $sql = "SELECT * FROM customers";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "no data found";
        }
    }

    //edit data //

    public function edit_user($id)
    {
        $sql = "SELECT * from customers WHERE id='$id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            // print_r($row);die;
            return $row;
        } else {
            echo "record not found";
        }
    }

    // update data //

    public function update_user()
    {
        $id = $this->conn->real_escape_string($_POST['id']);
        $name = $this->conn->real_escape_string($_POST['name']);
        $email = $this->conn->real_escape_string($_POST['email']);
        $address = $this->conn->real_escape_string($_POST['address']);
        $mobile = $this->conn->real_escape_string($_POST['mobile']);

        $check_email = "SELECT * FROM customers WHERE email ='$email'";
        $result = $this->conn->query($check_email);
        if ($result->num_rows > 0) {
            header("Location:showUser.php");
            echo '<script>alert("already exsit")</script>';
        } else {
            $sql = "UPDATE customers SET name='$name',email='$email',address='$address',mobile='$mobile' WHERE id='$id' ";
            $res = $this->conn->query($sql);
            if ($res == true) {
                header("Location:showUser.php");
                echo '<script>alert("User updated successfully")</script>';
            } else {
                echo '<script>alert("invalid user")</script>';
            }
        }
        // print_r($result);die;

    }

    // delete data //

    public function delete_user($id)
    {
        $data = "DELETE FROM customers WHERE id ='$id'";
        $result = $this->conn->query($data);
        if ($result == true) {
            header("Location:showUser.php");
            echo '<script>alert("User deleted successfully")</script>';
        } else {
            echo '<script>alert("Error occurred")</script>';
        }

    }

    // login page //

    public function login_user()
    {
        $email = $this->conn->real_escape_string($_POST['email']);
        $password = $this->conn->real_escape_string(md5($_POST['password']));
        $sql = "SELECT * FROM customers where email='$email' and password='$password'";
        $result = $this->conn->query($sql);
        echo $result->num_rows;die;
        if ($result->num_rows > 0) {
            echo "djhasjdha";die;

        } else {
            echo "0 results";
        }
    }

}

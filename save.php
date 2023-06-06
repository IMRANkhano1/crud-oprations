<?php
require "config.php";

//$id = $_POST['id'];
$uname = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];

$query = "INSERT INTO `crud-php` (username, email,password, phone) 
          VALUES ('$uname', '$email','$pass',$phone)";

if (isset($_POST['submit'])) {
    if ($res = mysqli_query($conn, $query)) {
        echo "<script>alert('Stored success');window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Stored error');window.location.href='view.php';</script>";
    }
}

?>

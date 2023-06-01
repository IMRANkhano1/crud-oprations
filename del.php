<?php
include"configfd.php";
$id=$_GET['id'];

$query="delete from sample where regno='$id'";
$res=mysqli_query($con,$query);
echo"<script>alert('Delete Success');window.location.href='view.php';</script>";

?>
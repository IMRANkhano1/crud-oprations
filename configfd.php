<?php
$server="localhost";
$uname="root";
$psw="";
$db="sam";

$con=mysqli_connect($server,$uname,$psw,$db);

if (mysqli_connect($server,$uname,$psw,$db))
{
	echo"connection success";
}
else
{
	echo "connection error";
}
?>
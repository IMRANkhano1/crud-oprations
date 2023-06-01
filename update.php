
<?php
include "configfd.php";
$name=$_POST['ename'];
$regno=$_POST['regno'];

$add=$_POST['addr'];

$query="update sample set name='$name',addr='$add' where regno=$regno";

// if(isset($_POST['submit']))
// {
// if($res=mysqli_query($con,$query))
//  {
// 	echo"data saved";
// }
// else
// {
// 	echo"data eror";
// }
// }
if(isset($_POST['submit']))
{
if($res=mysqli_query($con,$query))
 {
	echo"<script>alert('data updated');
   	window.location.href='view.php';</script>";

}
else
{
	echo"<script>alert('data eror');</script>";
}
}
// if(isset($_POST['tableview']))
//  {
//     $query2="select*from sample";

//     $result=mysqli_query($con,$query2);
    
//     echo"<table border=1>";
//     echo"<tr><th>name</th>";
//     echo"<th>regno</th>";
//     echo "<th>Addr</th> ";
//     echo"<th>update</th></tr>";
//     while($row=mysqli_fetch_array($result))
//     {
//     echo"<tr><td>$row[0]</td>";
//     echo"<td>$row[1]</td>";
//     echo"<td>$row[7]</td>";
//     echo "<td><input type='submit' name='update' value='update'></td></tr>";

//     }
//     echo "</table>";
// }
?>
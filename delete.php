<?php
include "config.php";

$id = $_GET['id'];

// Prepare the SQL statement
$sql = "DELETE FROM `crud-php` WHERE id = '$id'";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('delete data successfull');window.location.href='view.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>

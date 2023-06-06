<?php

include"config.php";
// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Retrieve the form data
  $id = $_POST['id'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];

  // Assuming you have a database connection established
  // Update the fields in the database table
  $sql = "UPDATE `crud-php` SET username = '{$username}', email = '{$email}', password = '{$password}', phone = '{$phone}' WHERE id ='{$id}'";

  // Execute the update query
  $result = $conn->query($sql);  

  if ($result == TRUE) {
    echo "<script>alert('update data success');window.location.href='view.php';</script>";
  } 
  else
   {
    echo "<script>alert('Update data error');window.location.href='view.php';</script>";
  }

  // Close the database connection
  mysqli_close($conn);
}

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `crud-php` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $username = $row['username'];

            $email = $row['email'];

            $password  = $row['password'];

            $phone = $row['phone'];

            //$id = $row['id'];

        } 
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
      <div class="card">
  <div class="card-body">
    <h5 class="card-title mb-3">User Form</h5>
    <form method="post" action="">
      
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>

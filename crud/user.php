<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="INSERT INTO crud (name, email, mobile, password) VALUES('$name', '$email', '$mobile', '$password')";

  // if (mysqli_query($conn, $sql)) 
  // {
  //   $last_id = mysqli_insert_id($conn);
  //   echo "New record created successfully.";
  // } 
  // else 
  // {
  //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  // }
  if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   header('location:display.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    
      <div class="container my-5">
      <form method="post">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Submit</button>

      </form>
      </div>

</body>
</html>
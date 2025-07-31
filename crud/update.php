<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="SELECT * from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    if (isset($_POST['submit'])) {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="update `crud` set id=$id, username='$username', email='$email', mobile='$mobile', password='$password' where id=$id";
        $result=mysqli_query($con,$sql);

        if ($result) {
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="username" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off">
            </div>
  
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
  </body>
</html>
<?php 
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('partials/dbconnect.php'); 
    $username = $_POST['uname'];
    $password = $_POST['pass'];
  
        $sql = "SELECT * FROM `user_data` WHERE `uname`='$username' AND `pass`='$password'";
        $res = $conn->query($sql);
        $num = mysqli_num_rows($res);
    
    if($num == 1){

        $login = true;
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['uname'] = $username;
        header("location: welcome.php");
    }
    else{
        $showError = "Invalid Credential";
    }

}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      <?php require 'partials/_nav.php'; ?>
        <?php
        if($login){
     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
        if($showError){
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$showError.'.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
?>
    <div class="container">
        <h1 class="text-center">Login to our Website</h1>
        <form action="/loginsystem/login.php" method="POST">
  <div class="mb-3">
    <label for="uname" class="form-label">username</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter Your Username" name="uname" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Enter Your Password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SHMUP Hell</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php#">Home</a></li>
      <li><a href="touhou_index.php">Touhou</a></li>
      <li><a href="cave_index.php">Cave</a></li>
      <li><a href="lennen_index.php">Len'nen</a></li>
      <li><a href="submit_index.php">Submit</a></li>
      <li><a href="rules.php">About</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li>
      <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li>
      <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li>
      <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li>
      <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li>



      <?php
      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        echo '<form class="form-inline" action="logout.php" method="post">

              <form class="form-inline" action="logout.php" method="post">
              <button class="btn" type="submit" name="logout-submit">Logout</button>
              </form>';
      }else{
        echo '<form class="form-inline" action="login.php" method="post">
            <input type="text" name="username" placeholder="Username...">
            <input type="password" name="password" placeholder="Password...">
            <button class="btn" type="submit" name="login-submit">Login</button>
            <a  class="btn-link" href="signup.php">Signup</a>
           </form>';
     }
       ?>
</nav>
    </ul>
  </div>
<?php require 'footer.php'; ?>

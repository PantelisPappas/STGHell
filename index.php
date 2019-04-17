<?php
require "header.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHMUP Hell</title>
  <style media="screen">
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #001a14;
  }
  .hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/thh.gif");
    height: 50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }

  .hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  </style>

  </head>
  </main>
  <body>

  <div class="hero-image">
    <div class="hero-text">
      <h1 style="font-size:50px">Welcome to SHMUP hell</h1>
      <p><h2>Can you dodge rain?</h2></p>
    </div>
  </div>
  <center>
  <h1>Welcome <b><?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo htmlspecialchars($_SESSION["username"]);
  }?></b>
  <p><h3>Welcome to "SHMUP Hell".<br>
  <p>The fact that you're here means you are aware of the world of Bullet Hell and you wish <br>
  to either challenge your limits or just watch some true skill. <br>
  Either way, welcome!</h3></p>
  <br>
  </center>
  </body>
  </html>
</html>
<?php
require "footer.php";
 ?>

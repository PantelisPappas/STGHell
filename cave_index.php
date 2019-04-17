<?php
require('header.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Touhou Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<center>
  <img src="img\cave.jpg" alt="">
  <div class="">
        <form action="cave.php" method="post">
          Game:
          <select name="GGame">
            <option value='All'>All</option>
            <option value='DoDonPachi'>DoDonPachi</option>
            <option value='Mushihimesama'>Mushihimesama</option>
          </select>
          Difficulty:
          <select name="Ddiff">
            <option value="All">All</option>
            <option value="Original">Original</option>
            <option value="Maniac">Maniac</option>
            <option value="Ultra">Ultra</option>

          </select>
          Run Type:
          <select name="Rrun">
            <option value="All">All</option><option value="1cc">1cc</option><option value="NoMiss">NoMiss</option><option value="NoBomb">NoBomb</option><option value="NoMissNoBomb">NoMissNoBomb</option><option value="Pacifist">Pacifist</option><option value="NoVertical">NoVertical</option><option value="ScoreRuns">ScoreRuns</option><option value="Other">Other</option>
          </select>
          <input type="submit">
        </form>
    <p><h2>Welcome to Cave Project.</h2>
    <p><h2>Welcome to hell.<h2>
  </div>
</center>
  </body>
</html>

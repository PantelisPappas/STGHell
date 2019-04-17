<?php
require('header.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<center>
  <img src="img\lennen.png" alt="len'nen"><br><br>
  <form action="lennen.php" method="post">
    Game:
    <select name="GGame">
      <option value='All'>All</option>
      <option value='EE'>EE</option>
      <option value='EMS'>EMS</option>
      <option value='RMI'>RMI</option>
      <option value='BPOHC'>BPOHC</option>
    </select>
    Difficulty:
    <select name="Ddiff">
      <option value="All">All</option><option value="Easy">Easy</option><option value="Normal">Normal</option><option value="Hard">Hard</option><option value="Lunatic">Lunatic</option><option value="Extra">Extra</option><option value="Phantasm">Phantasm</option>
    </select>
    Run Type:
    <select name="Rrun">
      <option value="All">All</option><option value="1cc">1cc</option><option value="NoMiss">NoMiss</option><option value="NoBomb">NoBomb</option><option value="NoMissNoBomb">NoMissNoBomb</option><option value="Pacifist">Pacifist</option><option value="NoVertical">NoVertical</option><option value="ScoreRuns">ScoreRuns</option><option value="Other">Other</option>
    </select>
    <input type="submit">
  </form>
  <h1>Welcome to Len'en Project! <br></h1><h2>Idiots are now concentrating</h2>
</center>
  </body>
</html>

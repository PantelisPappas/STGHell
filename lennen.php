<?php
require('header.php');
require('config.php');
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
  <img src='img\lennen.png' alt="">
  <div class="dropdown">
    <form action="cave.php" method="post">
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
  </div>

<table class="table table-bordered" width="600" border="1" cellpadin="1" cellspacing="1">
<tr>
  <th>Username</th>
  <th>Game</th>
  <th>Difficulty</th>
  <th>Run</th>
  <th>Score</th>
  <th>Link</th>
<tr>
</center>
</body>
</html>
<?php
$all = "select * from scoreboard where etairia='Lennen' order by score desc";
$result_all = $link->query($all);
$GGame=$_POST['GGame'];
$Ddiff=$_POST['Ddiff'];
$Rrun=$_POST['Rrun'];

$GGame = mysqli_real_escape_string($link, $_POST['GGame']);
$Ddiff = mysqli_real_escape_string($link, $_POST['Ddiff']);
$Rrun = mysqli_real_escape_string($link, $_POST['Rrun']);

if ($_POST['GGame'] !== 'All'){
  $all = "select * from scoreboard where (etairia='Lennen' and game = '$GGame' ) order by score desc";
  $result_all = $link->query($all);
}
if ($_POST['Ddiff'] !== 'All'){
  $all = "select * from scoreboard where (etairia='Lennen' and diff = '$Ddiff' ) order by score desc";
  $result_all = $link->query($all);
}
if ($_POST['Rrun'] !== 'All'){
  $all = "select * from scoreboard where (etairia='Lennen' and run = '$Rrun' ) order by score desc";
  $result_all = $link->query($all);
}
if ($_POST['GGame'] !== 'All' && $_POST['Ddiff'] !== 'All') {
  $all = "select * from scoreboard where (etairia='Lennen' and game = '$GGame' and diff = '$Ddiff') order by score desc";
  $result_all = $link->query($all);
}
if ($_POST['GGame'] !== 'All' && $_POST['Rrun'] !== 'All') {
  $all = "select * from scoreboard where (etairia='Lennen' and game = '$GGame' and diff = '$Rrun') order by score desc";
  $result_all = $link->query($all);
}
if ($_POST['Rrun'] !== 'All' && $_POST['Ddiff'] !== 'All') {
  $all = "select * from scoreboard where (etairia='Lennen' and game = '$Rrun' and diff = '$Ddiff') order by score desc";
  $result_all = $link->query($all);
}
if ($_POST['GGame'] !== 'All' && $_POST['Ddiff'] !== 'All' && $_POST['Rrun'] !== 'All') {
  $all = "select * from scoreboard where (etairia='Lennen' and game = '$GGame' and diff = '$Ddiff' and run = '$Rrun') order by score desc";
  $result_all = $link->query($all);
}
while($score=mysqli_fetch_assoc($result_all)){
echo "<tr>";
echo "<td>".$score['username']."</td>";
echo "<td>".$score['game']."</td>";
echo "<td>".$score['diff']."</td>";
echo "<td>".$score['run']."</td>";
echo "<td>".$score['score']."</td>";
echo "<td>".$score['vid_link']."</td>";
echo "</tr>";

}
$result_all->free();
$link->close();
 ?>

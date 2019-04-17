<?php
// Include config file
require "header.php";
require_once "config.php";

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
   echo '<h1><center>Please login in order to make a replay submition!</center></h1>';
   exit;
}else{
  $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Submit Replay</h2>
        <p>Please fill this form to submit a score-replay.</p>
        <form action="submit.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" disabled>
            </div>
            <div class="form-group">
              <br><br>
                <label>Franchise</label>
                <br> Please check the appropriate Franchise. Any mishaps will be removed by the admin.
                <select name="etairia">
                  <option value='Touhou'>Touhou</option>
                  <option value='Cave'>Cave</option>
                  <option value='Lennen'>Len'en</option>
                </select>
            </div>
            <div class="form-group">
              <br><br>
                <label>Game</label>
               <br>  Please check the appropriate game. Any mishaps will be removed by the admin.
                <select name="game">
                  <option value='EoSD'>EoSD</option><option value='PCB'>PCB</option><option value='IN'>IN</option><option value='PoFV'>PoFV</option><option value='MoF'>MoF</option><option value='SA'>SA</option>
                  <option value='UFO'>UFO</option><option value='TD'>TD</option><option value='DDC'>DDC</option><option value='LoLK'>LoLK</option><option value='HSiFS'>HSiFS</option>
                  <option>=====</option>
                  <option value='DoDonPachi'>DoDonPachi</option>
                  <option value='Mushihimesama'>Mushihimesama</option>
                  <option>=====</option>
                  <option value='EE'>EE</option>
                  <option value='EMS'>EMS</option>
                  <option value='RMI'>RMI</option>
                  <option value='BPOHC'>BPOHC</option>
                </select>
            </div>
            <br><br>
            <div class="form-group">
                <label>Difficulty</label>
                <br>
                Please check the appropriate game. Any mishaps will be removed by the admin.
                <select name="diff">
                  <option value="Easy">Easy</option><option value="Normal">Normal</option><option value="Hard">Hard</option><option value="Lunatic">Lunatic</option><option value="Extra">Extra</option><option value="Phantasm">Phantasm</option>
                  <option>=====</option>
                  <option value="Original">Original</option>
                  <option value="Maniac">Maniac</option>
                  <option value="Ultra">Ultra</option>
                </select>
            </div>
            <div class="form-group">
                <label>Run</label>
                <br>
                <select name="run">
                  <option value="1cc">1cc</option><option value="NoMiss">NoMiss</option><option value="NoBomb">NoBomb</option><option value="NoMissNoBomb">NoMissNoBomb</option><option value="Pacifist">Pacifist</option><option value="NoVertical">NoVertical</option><option value="ScoreRuns">ScoreRuns</option><option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Score</label>
                <input type="text" name="score" class="form-control">
            </div>
            <div class="form-group">
                <label>Video-Link</label>
                <input type="text" name="vid_link" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>

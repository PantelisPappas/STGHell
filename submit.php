<?php
// Processing form data when form is submitted
require_once "config.php";
require "header.php";

  $username = mysqli_real_escape_string($link, $_SESSION['username']);
  $etairia = mysqli_real_escape_string($link, $_REQUEST['etairia']);
  $game = mysqli_real_escape_string($link, $_REQUEST['game']);
  $diff = mysqli_real_escape_string($link, $_REQUEST['diff']);
  $run = mysqli_real_escape_string($link, $_REQUEST['run']);
  $score = mysqli_real_escape_string($link, $_REQUEST['score']);
  $vid_link = mysqli_real_escape_string($link, $_REQUEST['vid_link']);

  $sql= "INSERT into scoreboard VALUES('$username','$etairia','$game','$diff','$run','$score','$vid_link')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
  // Close connection
  mysqli_close($link);
?>

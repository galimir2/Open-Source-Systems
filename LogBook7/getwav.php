<?php

  header("Content-type: audio/wav");
  $servername = 'localhost';
  $db_name = 'monster';
  $username = 'root';
  $password = '';
  
  $connect = mysqli_connect($servername, $username, $password, $db_name);

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>

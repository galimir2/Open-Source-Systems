<?php

  header("Content-type: image/jpeg");
  
  $servername = 'localhost';
  $db_name = 'monster';
  $username = 'root';
  $password = '';
  
  $connect = mysqli_connect($servername, $username, $password, $db_name);

  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>

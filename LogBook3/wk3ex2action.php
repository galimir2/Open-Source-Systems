<?php
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  if ($_POST["txtgender"] == "male")
  {
      echo "Your gender is male<br/>";
  }
  elseif($_POST["txtgender"] =="female")
  {
    echo "Your gender is female<br/>";
  }
  else
  {
      echo "Your gender is not specified<br/>";
  }
?>

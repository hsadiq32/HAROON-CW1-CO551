<?php // added php tag
  $topModules[0] = "Internet Systems Development";
  $topModules[1] = "Programming 1";
  $topModules[2] = "Programming 2";
  $topModules[3] = "OOAD";
  $topModules[4] = "Software Engineering";
  $topModules[5] = "Web Development"; // added item to array
  $topModules[6] = "Open Source Systems"; // added item to array

  for($count = 0;$count < 7;$count++) // formatted semicolons, appended count to 7
  {
    echo "$count module is $topModules[$count] <br/>";
  }	
?>
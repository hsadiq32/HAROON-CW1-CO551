<?php // added php tag
  $topmodules[0] = "Open Source Systems ";
  $topmodules[1] = "Programming 1";
  $topmodules[2] = "Programming 2";
  $topmodules[3] = "Web Application Development";
  $topmodules[4] = "Software Engineering";
  
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Subject</th></tr> 
<?php // added php tag
  for($count = 0;$count < 5;$count++) // removed semicolon
  {
    echo "<tr><td>$count</td><td>$topmodules[$count]</td></tr>";
  }	
?>
</table>
</body>
</html>
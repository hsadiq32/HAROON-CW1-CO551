<h><b>Old code:</b></h><br><br>

<?php // added php tag
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  // foreach loop implemented

  foreach($mymarks as $index=>$value) {
    echo "for  $index  my grade was  $value <br/>";
}

  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>

<br><br><h><b>Updated code:</b></h><br><br>

<?php // added php tag
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Year</th><th>Grade</th></tr> 
<?php // added php tag

foreach($mymarks as $index=>$value) {
  echo "<tr><td>$index</td><td>$value</td></tr>";
}
?>
</table>
<p align="center" >
  <?php 
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
  ?>
  </p>
</body>
</html>
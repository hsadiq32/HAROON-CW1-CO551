<?php // added php tag
  $mymarks["CO456"] = 82;
  $mymarks["CO455"] = 75;
  $mymarks["CO452"] = 80;
  $mymarks["CO450"] = 98;
  $mymarks["CO457"] = 90;
  $mymarks["CO453"] = 97;
  $total = 0;
?>

<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Module</th><th>Percentage</th></tr> 
<?php // added php tag
 foreach($mymarks as $index=>$value) {
    echo "<tr><td>$index</td><td>$value%</td></tr>";
    $total = $total + $mymarks[$index];
  }
  $average = $total /  6;   
?>
</table>
<p align="center">
  <?php echo "Average Percentage: $average" ?>
</p>
</body>
</html>
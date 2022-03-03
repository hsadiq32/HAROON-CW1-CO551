<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
	$grossaftertax = ($gross / 100) * 78;
	echo "Gross Wage : £" , $gross, "<br>";
	echo "Gross Wage (after tax) : £" , $grossaftertax;
?>
</body>
</html>
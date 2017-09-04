<!DOCTYPE html>
<html>
<head>
	<title>Temperatura</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class="container-fluid" style="background-color: orange; padding: 30px;">
		<div class="row head">
			<h1>Temperatūra ir pojūtis</h1>
		</div>
	</div>
<?php

function check($i){

	$poj = "";

	if ($i <= -20) {
		$poj = "Labai salta";
	}
	if (-20 < $i && $i <= 5) {
		$poj = "Salta";
	}
	if (5 < $i && $i <= 20) {
		$poj = "Silta";
	}
	if (20 < $i && $i <= 25) {
		$poj = "Karsta";
	}
	if ($i > 25) {
		$poj = "Labai karsta";
	}
	return $poj;
}

echo "<table class='table-striped'>";
echo "<tr><th>Temperatūra</th><th>Pojūtis</th></tr>";

for ($i= -30; $i <= 36; $i= $i + 3) { 
	echo "<tr><td>" . $i . "</td><td>" . check($i) . "</td></tr>";
}

		
echo "</table>";

?>


</body>
</html>
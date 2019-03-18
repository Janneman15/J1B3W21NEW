<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" type="text/css" href="phpinfoklok.css">
</head>
<body id= 'container'>
<?php 

date_default_timezone_set("Europe/Amsterdam");

$t = date("H");


if ($t < "6") {
    echo "Goede nacht!";
    echo"<br>";
	echo '<body style="background-image:url(piccies/night.png)">';
}

elseif ($t < "12") {
    echo "Goede morgen!";
    echo"<br>";
	echo '<body style="background-image:url(piccies/morning.png)">';
}

elseif ($t < "18") {
    echo "Goede middag!";
    echo"<br>";
    echo '<body style="background-image:url(piccies/afternoon.png)">';
}

elseif ($t < "24") {
    echo "Goede avond!";
    echo"<br>";
    echo '<body style="background-image:url(piccies/evening.png)">';
}

echo "de tijd is " . date("H:i");

?>

</body>
</html>


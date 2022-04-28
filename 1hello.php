<?php
$titre="Hello World"; 
$nbre=5;
$nbre='dede';
//echo $nbre;
?>


<!doctype html>
<html lang="fr">
	<head>
		<title><?php echo $titre; ?></title>
		<meta charset="utf-8">
	</head>
	<body>

		<h1>Hello World</h1>

		<?php
		$nbre=1.5;
		echo "<h1>Hello World</h1>";
		echo "<h1>".$titre."</h1>";
		//echo 12+"56";
		echo "<h1>",$titre,"</h1>";
		echo "<h1>$titre</h1>"; //interpolation
		echo '<h1>$titre</h1>';

		?>

	</body>
</html>
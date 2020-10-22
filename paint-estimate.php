<!DOCTYPE html>
<!--	Author: Daniel Mendl
		Date:	 10/20/20
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

  include('inc-rectangle-object.php');

	$height = $_POST['height'];
	$length = $_POST['length'];
	$width= $_POST['width'];
	
  $longWall = new Rectangle();
  $shortWall = new Rectangle();

  $longWall->setX($height); // 90
  $longWall->setY($length); // 180

  $shortWall->setX($height); // 90
  $shortWall->setY($width); // 120

  $totalArea = (2 * $longWall->getArea()) + (2 * $shortWall->getArea());
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>
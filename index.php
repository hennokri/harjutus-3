<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP põhitõed II</title>
</head>

<body>
	<h1>Muutujad</h1>
	<?php
    $hernes = 20;
    echo $hernes;
	echo "<br>";
	

    $hernes = 30;
    echo $hernes;
	echo "<br>";
?>
<h2>Stringid</h2>
	<?php echo "Hello world!"; ?><br>
	<?php echo 'Tere,tere';?>
		<?php
	    $muutuja1 = "24";
	    $muutuja2 = "26";
	    echo "<br>";
	   	echo ($muutuja1 . $muutuja2);
	?>
	
	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
	<?php
	    $student1 = "jaagup";
	    $student2 = "peeter";
	    $student3 = "anastassia";
	    $student4 = "mihkel";
	    $student5 = "vassilissa";
	?>
	<ul>
		<?php
	echo
	 		"<li>$student1</li>
	 		<li>$student2</li>
	 		<li>$student3</li>
	 		<li>$student4</li>
	 		<li>$student5</li>"
	?>
	</ul>
</body>
</html>	
<!DOCTYPE html>

<html>
<?php
	include ("connexionbdd.php");
?>

<body>
<p>
test
</p>
<?php 
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$v1= $bdd-> query("SELECT * FROM `musique`);
$v2= $v1-> fetchAll();
?>

</body>
</html>
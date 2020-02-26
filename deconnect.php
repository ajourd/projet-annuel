<?php 
include("connexionbdd.php");
session_destroy ();
header('LOCATION: index.php');
exit;
?>

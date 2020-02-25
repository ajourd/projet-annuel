<?php 
include ("connexionbdd.php");
?>
<!DOCTYPE html>
<head>
  <title>Connexion - SOUNDHAZE</title>
  <meta charset="UTF-8">
	<link rel="stylesheet" href="style2.css"></head>
<body>
<h1><a href=index.php> SOUND HAZE </a></h1>
<form action="connect.php" method="post">
Votre pseudo :
<input type="text" name="pseudo" required>
Votre Mot de Passe :
<input type="password" name="password" required>
<input class="button" type="submit" name="valider" value="Se connecter">
</form>
<buttom class="buttom"><a href="inscrire.php">inscription</a></buttom>
</body>
</html>
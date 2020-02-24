<?php 
include ("connexionbdd.php");
?>
<!DOCTYPE html>
<head>
  <title>Inscription - SOUNDHAZE</title>
  <meta charset="UTF-8">
</head>
<body>
<form action="inscript.php" method="post">
Votre Nom :
<input type="text" name="nom" required>
Votre Prenom :
<input type="text" name="prenom" required>
Votre Pseudo :
<input type="text" name="pseudo" required>
Votre Mot de Passe :
<input type="password" name="password" required>
<input class="button" type="submit" name="valider" value="S'inscrire'">
</form>
<buttom class="buttom"><a href="connecter.php">Connexion</a></buttom>
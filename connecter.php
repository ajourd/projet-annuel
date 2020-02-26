<?php 
include ("connexionbdd.php");
$error=NULL;
if (isset($_GET["error"])) $error=$_GET['error'];
{
  if ($error==1)
  {
    $error="un probleme est survenu lors de la connexion à votre compte";
  }
}
?>
<!DOCTYPE html>
<head>
  <title>Connexion - SOUNDHAZE</title>
  <meta charset="UTF-8">
	<link rel="stylesheet" href="style2.css"></head>
<body>
<h1><a href=index.php> SOUND HAZE </a></h1>
<?php
if (isset($error))
{
  echo ($error);
}
?>
<form action="connect.php" method="post">
Votre pseudo :
<input type="text" name="pseudo" required>
Votre Mot de Passe :
<input type="password" name="password" required>
<input class="button" type="submit" name="valider" value="Se connecter">
</form>
<button class="button"><a href="inscrire.php">inscription</a></button>
<button class="button"><a href="mdpoublie.php">Mot de passe oublié</a></button>
</body>
</html>
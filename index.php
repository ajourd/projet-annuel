<!doctype html>
<html>
<?php
	include ("connexionbdd.php");
?>
<head> 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="titre">
<h1> SOUND HAZE </h1>
<!-- SEARCH BAR -->
<buttom class="buttom"><a href="connecter.php">Connexion</a></buttom>
<button class="buttom"><a href="inscrire.php">inscription</a></buttom>
</div>


  <div class="menu"><!-- ces options ne sont accessibles seulement après connexion sur le site --> 
  <button class="buttom"><a href="#">Mes musiques</a></buttom>
  <button class="buttom"><a href="#">Mes playlists</a></buttom>
  <button class="buttom"><a href="#">Mon compte</a></buttom>
  </div>

  <div class="main">
    <h2>Bienvenue</h2>
    <p>Ecoutez des musiques, téléchargez les pour y avoir accès à n'importe quel moment et à n'importe quel endroit. Créez vos playlists.</p>
  </div>


<ul>
  <a class="active"></a><audio controls></audio></a>
</ul>
</body>
</html>
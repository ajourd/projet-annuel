<!doctype html>
<html>
<?php
  include ("connexionbdd.php");
  $statut=isset($_SESSION['mdp']) ? $_SESSION['mdp'] : NULL;
  $id_uti=isset($_SESSION['id_uti']) ? $_SESSION['id_uti'] : NULL;
  $pseudo=isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : NULL;
?>

<head> 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="titre">
<h1> SOUND HAZE </h1>
<!-- SEARCH BAR -->
<button class="button"><a href="connecter.php">Connexion</a></button>
<button class="button"><a href="inscrire.php">inscription</a></button>
<?php
if ($statut==true)
{
  ?>
  <p>Bienvenue <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];?> </p>
  <button><a href="deconnecter.php">Deconnexion</a></button>
  <?php
}
?>
</div>


  <div class="menu"><!-- ces options ne sont accessibles seulement après connexion sur le site --> 
  <button><a href="#">Mes musiques</a></button>
  <button><a href="#">Mes playlists</a></button>
  <button><a href="#">Mon compte</a></button>
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
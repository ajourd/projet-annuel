<?php
    session_start();
    $statut=(isset($_SESSION['login'])) ? $_SESSION["login"] : NULL;
?>
<!doctype html>
<html>


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
<button><a href="deconnect.php">Deconnexion</a></button>
<i> le statut de la connexion : <?php echo $statut; ?> </i> <!--test de la connexion-->
  <?php
  if ($statut==true)
    {
  ?>
  
    <p>Bienvenue <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];?> </p>

    </div>


    <div class="menu"><!-- ces options ne sont accessibles seulement après connexion sur le site --> 
    <button><a href="#">Mes musiques</a></button>
    <button><a href="#">Mes playlists</a></button>
    <button><a href="compte.php">Mon compte</a></button>
    </div>

    <div class="main">
    <h2>Bienvenue</h2>
    <p>Ecoutez des musiques, téléchargez les pour y avoir accès à n'importe quel moment et à n'importe quel endroit. Créez vos playlists.</p>
   </div>


    <ul>
   <a class="active"></a><audio controls></audio></a>
   </ul>
    <?php
  }
  else {
    ?> <h1>Session expirée</h1>
        <center><a href=index.php>Retour à l'accueil</a></center>

    <?php
}
?>
</body>
</html>
<?php
?>
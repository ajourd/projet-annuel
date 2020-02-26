<?php
  require_once("connexionbdd.php");
  $statut=isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
  $id_uti=isset($_SESSION['id_uti']) ? $_SESSION['id_uti'] : NULL;
  $pseudo=isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : NULL;
  $categ=isset($_SESSION['admin']) ? $_SESSION['admin'] : NULL;

?>
<head> 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="titre">
<h1><a href=index.php> SOUND HAZE </a></h1>
<?php 
  if ($statut==true)
  { 
      ?>
      <button class="perso"><a href="modifier.php">Modifier</a></button>
      <button class="perso"><a href="supprimer.php">supprimer</a></button>
      <ul>
      <li> Votre Pseudo : <?php echo($pseudo);?></li>
      <li> Votre Nom : <?php echo($nom);?></li>
      <li> Votre Prenom : <?php echo($prenom);?></li>
      <li> Votre mot de passe : <?php echo($statut);?></li>
      </ul>
      <?php
  }
?>







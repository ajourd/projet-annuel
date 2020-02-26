<?php 
include ("connexionbdd.php");
$error=$pseudo=$mdp='';

$pseudo=(isset($_POST['pseudo'])) ? $_POST['pseudo']:NULL;
$mdp=(isset($_POST['password'])) ? $_POST['password']:NULL;

$reqCo="SELECT * FROM utilisateur where pseudo='$pseudo' and mdp='$mdp'";
$resultCo=$bdd->query($reqCo);
if ($resultCo -> rowCount()>0)
{
    $donnees = $resultCo -> fetch();
    $_SESSION['nom'] = $donnees['nom'];
    $_SESSION['prenom'] = $donnees['prenom'];
    $_SESSION['pseudo'] = $donnees['pseudo'];
    $_SESSION['mdp'] = $donnees['mdp'];
    $_SESSION['id_uti'] = $donnees['id_uti'];
    $_SESSION['login'] = true; 
    header('LOCATION: accueil.php');

}
else {
    $error=1;
}
if ($error==1)
{
    ?>
    <META http-equiv="refresh" content="0.1; URL=./connecter.php?&error=<?php echo $error;?>">
    <?php
}
?>
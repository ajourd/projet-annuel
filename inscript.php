<?php 
include ("connexionbdd.php");
$error=$nom=$prenom=$pseudo=$mdp='';

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : NULL;
$prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : NULL;
$pseudo = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : NULL;
$mdp = (isset($_POST['password'])) ? $_POST['password'] : NULL;

if ($nom==NULL or $prenom==NULL or $pseudo==NULL or $mdp==NULL)
{
    $error=2;
    ?>
        <META http-equiv="refresh" content="0.1; URL=./inscrire.php?&error=<?php echo $error;?>">
    <?php
}

else{
    $requete="SELECT * from utilisateur where pseudo='$pseudo'";
    $resultat = $bdd->query($requete);
    if ($resultat->rowCount()>0)
    {
        $error=3
        ?>
        <META http-equiv="refresh" content="0.1; URL=./inscrire.php?&error=<?php echo $error;?>">
    <?php
    }
    else 
    {
        $requete2="INSERT INTO `utilisateur` (`pseudo`, `nom`, `prenom`, `mdp`, `admin`) VALUES ('$pseudo', '$nom', '$prenom', '$mdp', '1')";
        $result2=$bdd->query($requete2);
        if ($result2)
        {
            ?>
            <!DOCTYPE html>
            <head>
                <title>Compte - SOUNDHAZE</title>
                <meta charset="UTF-8">
	            <link rel="stylesheet" href="styles.css"></head>
            <body>
            <h1><a href=index.php> SOUND HAZE </a></h1>
            <center> Votre compte a bien été créé </center>
            <META http-equiv="refresh" content="1.0; URL=./index.php">;
            </body>
            </html>
            <?php
        }
        else 
        {
            $error=1;
        }
    }
}
if ($error==1)
{
    ?>
    <META http-equiv="refresh" content="1.0; URL=./inscrire.php?&error=<?php echo $error;?>">
    <?php
}
?>

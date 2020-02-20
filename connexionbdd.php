
<!--page permettant la connexion a la base, elle sera répéter au debut de chaque page codée -->
<?php			
			try
			{
$bdd = new PDO ('mysql:host=localhost;charset=utf8;dbname=soundhaze',
				'ajourdai10','!21710369!');
			}
			catch (Exception $e)
			{
				die('Erreur de connexion'.$e->getMessage());
			}
?>
<link href="style/bootstrap.css" type="text/css" rel="stylesheet"/>

<?php 
	try {
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=www.yosad.com;dbname=villes_de_france;charset=utf8', 'root', '');
	}
	catch(Exception $e) {
		// En cas d'erreur, on affiche un message et on arrête tout
	    die('Erreur : '.$e->getMessage());
	}

	// Déclaration variable
	$city; 

	// Prendre la variable en entrée
	foreach($_POST as $champ => $valeur) {
	    $city = $valeur;         
	}

	// On vérifie si la ville est rentrée par l'utilisateur ou pas
	if ($city) {
		// On sélectionne ce qu'on veut dans la base de données
		$reponse = $bdd->query("SELECT * FROM villes_france_free WHERE ville_nom = '".$city."'"); 

		?>

		<br/><br/><br/><br/>

		<center><p><?php echo "Le code postal correspondant à la ville $city est : " ;?></p></center>
		<?php
		// On affiche le code postal correspondant à la ville rentrée par l'utilisateur
		while ($donnees = $reponse->fetch()) { 
			?> <br/><center><strong><?php echo $donnees['ville_code_postal']; ?> </strong></center>  <?php

		}

	// Si rien n'est saisi par l'utilisateur
	} else {
		?><br/><center><strong><?php echo 'Veuillez remplir les champs'; ?> </strong></center> <?php
	}

?>
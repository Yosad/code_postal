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
	$postcode; 

	// Prendre la variable en entrée
	foreach($_POST as $champ => $valeur) {
	    $postcode = $valeur;         
	}

	// On vérifie si le code postal est rentré par l'utilisateur ou pas
	if ($postcode) {
		// On sélectionne ce qu'on veut dans la base de données
		$reponse = $bdd->query("SELECT * FROM villes_france_free WHERE ville_code_postal = '".$postcode."'"); 

		?>

		<br/><br/><br/><br/>

		<center><p><?php echo "La ville correpondante au code postal $postcode est : " ;?></p></center>
		<?php
		// On affiche le nom de la ville correspondant au code postal rentré par l'utilisateur
		while ($donnees = $reponse->fetch()) { 
			?> <br/><center><strong><?php echo $donnees['ville_nom']; ?> </strong></center>  <?php

		}

	// Si rien n'est saisi par l'utilisateur
	} else {
		?><br/><center><strong><?php echo 'Veuillez remplir les champs'; ?> </strong></center> <?php
	}

?>
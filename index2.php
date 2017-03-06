<?php
	require_once('includes/header.php');

?>

<!DOCTYPE html>

<html>
	<body> 
		<link href="style/bootstrap.css" type="text/css" rel="stylesheet"/>
		<form method="POST" action="ville.php">
		<p>Vous recherchez un code postal ? <br/> Aucun problème nous pouvons la trouver pour vous.</p><br/>
		<p> Entrer une ville de France : <input type="" name="city" size="12"> 
		<input type="submit" value="Valider"> </p>
		</form>
	</body>
</html>

<?php

	echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';

	require_once('includes/footer.php');

?>

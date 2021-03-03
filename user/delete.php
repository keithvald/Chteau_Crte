<?php
require ('../config/config.php');
session_start();

//preparation de la requête
$rst = $conn->prepare("DELETE FROM Client WHERE id=:id");

	//liaison du paramètre nommé (url)
	$rst->bindValue(':id',  $_GET['pseudo'], PDO::PARAM_INT);
	//execution de la requête
	$executeGreat = $rst->execute();

if ($executeGreat) {
	
	$msg = 'Le compte a bien été supprimé';

} else {

	$msg = 'Echec de la supression du compte';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
	<h1>Suppression du compte</h1>
	<p><?php echo $msg ?></p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device_width, initial-scale=1.0, user-scalable=no">
    <title>Tab</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

<?php
    require ('../config/config.php');
    session_start();
    //On récupère tous les éléments de la table Client
    $rst = $conn->query("SELECT *, DATE_FORMAT(date_inscription, '%d/%m/%Y') as date_inscription FROM Client");
 ?>
    <table class='container table'>      
    <thead>
        <tr>
            <th scope='col'>Nom</th>
            <th scope='col'>Pseudo</th>
            <th scope='col'>Mail</th>
            <th scope='col'>Date d'inscription</th>
            <th scope='col'>Supprimer</th>
        </tr>
    </thead>
<?php
    //On va chercher toutes les données pour les afficher une à une       
    while($donnees = $rst->fetch()){
    	$id = $donnees["id"];
    	$nom = $donnees["nom"];
        $pseudo = $donnees["pseudo"];
        $mail = $donnees["mail"];
        $date = $donnees["date_inscription"];

?>
        <tr>
          <td><?php echo $nom ?></td>
          <td><?php echo $pseudo ?></td>
          <td><?php echo $mail ?></td>
          <td><?php echo $date ?></td>
          <td><a class="btn btn-warning" href="delete.php?pseudo=<?=$id?>">Supprimer</a></td>
        </tr>
<?php
    }
    $rst->closeCursor();
?>
    </table>


</body>
</html> 


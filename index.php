<?php
require ('config/config.php');
session_start();
if(isset($_SESSION['id']) && $_SESSION['pseudo']!= "") {
    echo "";
  } else { 
    header('location:login/login.php');
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <a>Bienvenue <?php echo $_SESSION['pseudo'];?></a>
    <h4><a href="register/register.php">Logout</a></h4>
   <p>Vous souhaitez réinitialiser le mot de passe ?<a href="reset/reset.php"> Cliquez-ici.</a></p>
</body>
</html>
</html>
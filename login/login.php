
<?php
require ('../config/config.php');
session_start();

if (isset($_POST['pseudo']) & isset($_POST['motdepasse'])){
    try {
        $sth = $conn->prepare("SELECT * FROM Client WHERE pseudo=:pseudo");
        $sth->bindParam(':pseudo', $_POST['pseudo']);
        $sth->execute();

        $row = $sth->fetch(PDO::FETCH_ASSOC);
        $hash = $row['motdepasse'];
        if (password_verify($_POST['motdepasse'], $hash)){
            $_SESSION['id']   = $row['id'];
            $_SESSION['pseudo'] = $row['pseudo'];
            header('Location: ../index.php');
        }else{
            echo "Identifiants incorrects. Veuillez réessayer.";
        }
    }catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
}else{
    echo "";
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
    <form action="" method ="POST">
        <a>Username</a>
        <input type="text" placeolder="pseudo" name="pseudo"></input>
        <a>Password</a>
        <input type="password" placeolder="motdepasse" name="motdepasse"></input>
        <button type="submit">Connexion</button>
        <p>Vous ne possédez pas de compte ?<a href="../register/register.php"> Inscrivez-vous ici.</a></p>
        <p>Vous avez oublié votre mot de passe ?<a href="../reset/reset.php"> Cliquez-ici.</a></p>
    </form>
</body>
</html>
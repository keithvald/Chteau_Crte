<?php
require ('../config/config.php');
session_start();

if (!empty($_POST['nom']) & !empty($_POST['pseudo']) & !empty($_POST['mail']) & !empty($_POST['motdepasse'])){
    try {
        $name = $_POST['nom'];
        $username = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $password = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
        $sth = $conn->prepare("INSERT INTO `Client`(`nom`,`pseudo`,`mail`, `motdepasse`) VALUES (:nom, :pseudo, :mail, :motdepasse)");
        $sth->bindParam(':nom', $name);
        $sth->bindParam(':pseudo', $username);
        $sth->bindParam(':mail', $mail);
        $sth->bindParam(':motdepasse', $password);
        $sth->execute();
        header('location: ../login/login.php');
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
    <title>Inscription</title>
</head>
<body>
    <form action="" method ="POST">
        <a>Name</a>
        <input type="text" placeolder="nom" name="nom"></input>
        <a>Username</a>
        <input type="text" placeolder="pseudo" name="pseudo"></input>
        <a>E-mail</a>
        <input type="email" placeolder="mail" name="mail"></input>
        <a>Password</a>
        <input type="password" placeolder="motdepasse" name="motdepasse"></input>
        <button type="submit">S'inscrire</button>
        <p>Vous possédez déjà un compte ?<a href="../login/login.php"> Connectez-vous ici.</a></p>
    </form>
</body>
</html>
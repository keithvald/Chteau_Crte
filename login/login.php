
<?php
require ('../config/config.php');
session_start();


if (isset($_POST['pseudo']) & isset($_POST['password'])){
    try {
        $sth = $conn->prepare("SELECT * FROM user WHERE pseudo=:pseudo");
        $sth->bindParam(':pseudo', $_POST['pseudo']);
        $sth->execute();
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        $hash = $row['password'];
        if (password_verify($_POST['password'], $hash)){
            $_SESSION['id']   = $row['id'];
            $_SESSION['pseudo'] = $row['pseudo'];
            header('Location: ../index.php');
        }else{
            echo "Mauvais mot de passe our pseudo.";
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
        <input type="password" placeolder="password" name="password"></input>
        <button type="submit" >Connexion</button>
    </form>
</body>
</html>
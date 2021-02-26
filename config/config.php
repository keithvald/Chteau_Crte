<?php
$user = "root";
$pass = "anissa";
//Test de la connexion vers la BDD
try {
    $conn = new PDO('mysql:host=localhost;dbname=new', $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>
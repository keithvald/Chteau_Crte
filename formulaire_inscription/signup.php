<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device_width, initial-scale=1.0, user-scalable=no">
    <title>S'inscrire</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.grid.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!-- SIGN UP -->
<h1>S'inscrire</h1>
        
        <form action="formulaire.php" method="post">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>    
            <div class="c100">
                <label for="pseudo">Pseudo : </label>
                <input type="text" id="pseudo" name="pseudo">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
            <div class="c100">
                <label for="password">Mot de passe : </label>
                <input type="password" id="password" name="password">
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
            <p>Vous possédez déjà un compte ? <a class="login" href="../formulaire_connexion/login.php">Connectez-vous ici</a> !</p>
        </form>

</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device_width, initial-scale=1.0, user-scalable=no">
    <title>Se connecter</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.grid.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!-- LOGIN -->
<h1>Se connecter</h1>
        
        <form action="formulaire.php" method="post">
            <div class="c100">
                <label for="pseudo">Pseudo : </label>
                <input type="text" id="pseudo" name="pseudo">
            </div>
            <div class="c100">
                <label for="password">Password : </label>
                <input type="password" id="password" name="password">
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
            <p>Vous avez oublié votre mot de passe ? <a class="login" href="../formulaire_reini_mdp/reset.php">Réinitialisez-le ici</a> !</p>
        </form>
</body>

</html>
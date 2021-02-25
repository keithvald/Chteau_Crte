<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device_width, initial-scale=1.0, user-scalable=no">
    <title>Réinitialiser le mot de passe</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.grid.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!-- RESET -->
<h1>Réinitialiser le mot de passe</h1>
    <form action="formulaire.php" method="post">  
        <div class="c100">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password">
        </div>
        <div class="c100">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password">
        </div>
        <p>Vous souhaitez retourner sur la page d'inscription ? <a class="login" href="../formulaire_inscription/signup.php">Cliquez-ici</a> !</p>
        <p>Vous souhaitez retourner sur la page de connexion ? <a class="login" href="../formulaire_connexion/login.php">Cliquez-ici</a> !</p>
    </form>
</body>

</html>
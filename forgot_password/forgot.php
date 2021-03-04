<?php 
    require ('../config/config.php');

    if(!empty($_POST['mail'])){
        $email = htmlspecialchars($_POST['mail']);

        $check = $conn->prepare('SELECT token FROM Client WHERE mail = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row){
            $token = bin2hex(openssl_random_pseudo_bytes(24));
            $token_user = $data['token'];

            $insert = $conn->prepare('INSERT INTO password_recover(token_user, token) VALUES(?,?)');
            $insert->execute(array($token_user, $token));

            $link = 'recover.php?u='.base64_encode($token_user).'&token='.base64_encode($token);

            echo "<a href='$link'>Lien</a>";
        }else{
            echo "Compte non existant";
            #header('Location: ../index.php');
            #die();
        }
    }

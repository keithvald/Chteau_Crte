<?php 
    require ('../config/config.php');
        if(!empty($_POST['password']) && !empty($_POST['password_repeat']) && !empty($_POST['token'])){
            $password = htmlspecialchars($_POST['password']);
            $password_repeat = htmlspecialchars($_POST['password_repeat']);
            $token = htmlspecialchars($_POST['token']);

            $check = $conn->prepare('SELECT * FROM Client WHERE token = ?');
            $check->execute(array($token));
            $row = $check->rowCount();ME

            if($row){
                if($password === $password_repeat){
                    $cost = ['cost' => 12];
                    $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                    $update = $conn->prepare('UPDATE Client SET motdepasse = ? WHERE token = ?');
                    $update->execute(array($password, $token));
                    
                    $delete = $conn->prepare('DELETE FROM password_recover WHERE token_user = ?');
                    $delete->execute(array($token));

                    echo "Le mot de passe a bien été modifie";
                }else{
                    echo "Les mots de passes ne sont pas identiques";
                }
            }else{
                echo "Compte non existant";
            }
        }else{
            echo "Merci de renseigner un mot de passe";
        }

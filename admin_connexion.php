<?php

session_start();
$login=$_POST['login'];
$pass=$_POST['mdp'];
$valider=$_POST['valider'];
$message="";
if(isset($valider)){
    try {
        $pdo= new PDO("mysql:host=localhost;dbname:marche_ou_cepes", "root", "root");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $res=$pdo->prepare("SELECT * FROM user WHERE login=? and pass=? limit 1");
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array($login,$pass));
    $tab=$res->fetchAll();
    if(count($tab)==0)
        echo "Mauvais Login ou Mot de passe";
        else{
            $_SESSION['autoriser']="oui";
            header('location:espace_admin');
        }
    
}


    // session_start();

    // if(isset($_POST['valider'])){
    //     if(!empty($_POST['login']) && !empty($_POST['mdp'])){
    //         $login_par_defaut="admin";
    //         $mdp_par_defaut="admin";

    //         $login_saisi=htmlspecialchars($_POST['login']);
    //         $mdp_saisi=htmlspecialchars($_POST['mdp']);

    //         if($login_saisi == $login_par_defaut && $mdp_saisi == $mdp_par_defaut){
    //             $_SESSION['mdp'] = $mdp_saisi;
    //             header("location: espace_admin.php");
    //         }else{
    //             echo 'Votre mdp ou login est incorrect';
    //         }
    //     }else{
    //             echo 'Veuillez remplir tous les champs';
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <title>Connexion Administrateur</title>
</head>

<body>
    <div class="form" >
    <form  method="POST" action="">
        <div>
            <label class="input-label" for="identifiant" type="text" >Nom d'utilisateur:</label>
            <input class="input" type="text" name="login"><br>
        </div>
        <div>
            <label class="input-label" type="mot_de_passe">Mot de passe:</label>
            <input class="input" type="password" name="mdp" ><br>
        </div>
        <div>
            <!-- <input type="checkbox">
            <label for="checkbox">Se souvenir de moi</label> -->
            <button type="submit" name="valider" >Se connecter</button>
        </div>
    </form>
</div>
</body>

</html>
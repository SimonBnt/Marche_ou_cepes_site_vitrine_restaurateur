<?php
session_start();
$message = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['login']) || ($_POST['password'])) $message = "Mauvais Login ou Mot de passe";
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=marche_ou_cepes', 'root', 'root');
    } catch (PDOException $e) {
        echo "Error : " . $e->getMessage();
    }
    $res = $pdo->prepare("SELECT * FROM users WHERE login=? and password=?");
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array($_POST['login'], md5($_POST['password'])));
    $tab = $res->fetchAll();
    if (count($tab) == 0) {
    } else {
        $_SESSION['connected'] = true;
        header("location:admin_page.php");
    }
}

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

<body class="body">
    <img class="background_admin" src="assets/img/plat-1.jpg" alt="image d'arrière plan représentant un plan à base de champignons">
    <div class="form">
        <form method="POST" action="">
            <div>
                <h1>Connexion Administrateur</h1>
            </div>
            <div class="login-div">
                <label class="label-input" for="identifiant" type="text">Login:</label>
                <input class="input" type="text" name="login" placeholder="Entrée votre login"><br>
            </div>
            <hr>
            <div class="password-div">
                <label class="label-input" type="mot_de_passe">Mot de passe:</label>
                <input class="input" type="password" name="password" placeholder="Entrée votre mot de passe"><br>
            </div>
            <hr>
            <div class="checkbox-submit">
                <input type="checkbox">
                <label for="checkbox">Se souvenir de moi</label>
                <button type="submit" name="submit">Se connecter</button>
            </div>
            <?php if (!empty($message)) { ?>
                <div class="errors"><?php echo $message  ?></div>
            <?php } ?>
        </form>
    </div>
    </body>

</html>
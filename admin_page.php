<?php

session_start();
if ($_SESSION['connected'] != true) {
    header('location:admin_connexion.php');
    exit();
    var_dump($tab);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <title>Espace Administrateur</title>
</head>

<body class="body">
    <h1 id="h1-admin">Bienvenue sur la page Administrateur</h1>
    <div class="log-out">
        <a class="btn-logout" href="admin_deconnexion.php">Se déconnecter</a>
    </div><br><br>
    <div>
        <p id="paragraph-admin">Sur cette page il vous est possible de voir les contenus modifiables de votre site, et d'y apportées des modifications</p>
    </div>
    <hr>
    <div id="div-bio-admin">
        <p id="bio-admin">BIO A MODIFIER</p>
        <button>Changer</button>
    </div>
    <div id="div-address-admin">
        <p id="address-admin">ADRESSE ET MAIL A MODIFIER</p>
        <button>Changer</button>
    </div>
    <hr>
</body>

</html>
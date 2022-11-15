<?php
session_start();
if ($_SESSION['connected'] != true) {
    header('location:admin_connexion.php');
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
    <h1>Bienvenue sur la page Administrateur</h1>
    <div class="log-out">
        <a class="btn-logout" href="admin_deconnexion.php">Se déconnecter</a>
    </div><br><br>
    <div>
        <p>Sur cette page il vous est possible de voir les contenus modifiables de votre site et d'y apportées des modifications</p>
    </div>
</body>

</html>
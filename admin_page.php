<?php
    session_start();
    if ($_SESSION['connecter'] != true) {
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
        <h1>Espace Administrateur</h1>
    <div class="log-out">
    <a class="btn-logout" href="admin_deconnexion.php">Se déconnecter</a>
    </div>
</body>
</html>
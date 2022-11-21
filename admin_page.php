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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
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
    <div id="first-modif-container">
        <div id="div-bio-admin">
            <p id="bio-admin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, sed?</p>
        </div>
        <button id="change_bio">Modifier cette section</button>
        <div id="div-address-admin">
            <p id="address-admin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, iure.</p>
        </div>
    </div>
    <hr>
    <div class="container-menu">

        <div class="first-menu">
            <span>
                <h3>Entrées</h3>
                <button id="btn-change">Modifier</button>
            </span>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
        </div>

        <div class="second-menu">
            <span>
                <h3>Plats</h3>
                <button id="btn-change">Modifier</button>
            </span>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
        </div>

        <div class="third-menu">
            <span>
                <h3>A Partager</h3>
                <button id="btn-change">Modifier</button>
            </span>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>

        </div>

        <div class="fourth-menu">
            <span>
                <h3>Desserts</h3>
                <button id="btn-change">Modifier</button>
            </span>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>
            <p id="title-menu">Lorem ipsum dolor sit amet.</p>
            <p id="description-menu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, quis.</p>

        </div>
    </div>
    <div class="validate-button">
        <button id="btn-save">Enregistrer les modifications</button>
    </div>
</body>

</html>
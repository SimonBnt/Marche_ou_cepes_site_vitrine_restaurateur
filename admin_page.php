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
    <link rel="stylesheet" href="./assets/css/styles.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Espace Administrateur</title>
</head>

<body class="body">


    <div id="modal-bio-address" class="modal">
        <div class="modal_content">
            <label for="textarea">Description/Bio:</label>
            <textarea placeholder="Entrer votre description" name="" id="textarea" cols="30" rows="5"></textarea><br>
            <label for="address">Adresse du restaurant:</label>
            <textarea placeholder="Entrer votre adresse" name="" id="textarea" cols="30" rows="5"></textarea>
            <button>Enregistrer</button>
            <a href="#" class="modal_close">&times;</a>
        </div>
    </div>

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
            <label id="label" for="textarea">Description/Bio:</label>
            <p id="bio-admin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, sed?</p>
        </div>
        <a id="open-modal" href="#modal-bio-address">Modifier cette section</a>
        <div id="div-address-admin">
            <label id="label" for="address">Adresse du restaurant:</label>
            <p id="address-admin">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, iure.</p>
        </div>
    </div>
    <hr>
    <div class="container-menu">

        <div class="first-menu">
            <div id="modal-first-menu" class="modal">
                <div class="modal_content">
                    <textarea placeholder="Entrer un Titre" name="" id="textarea" cols="30" rows="3"></textarea><br>
                    <textarea placeholder="Entrer une Description" name="" id="textarea" cols="30" rows="3"></textarea><br>
                    <textarea placeholder="Entrer une Description" name="" id="textarea" cols="30" rows="3"></textarea>
                    <button>Enregistrer</button>
                    <a href="#" class="modal_close">&times;</a>
                </div>
            </div>
            <span>
                <h3>Entrées</h3>
                <a id="btn-change" href="#modal-first-menu">Modifier</a>
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
            <div id="modal-second-menu" class="modal">
                <div class="modal_content">
                    <textarea placeholder="Entrer un Titre" name="" id="textarea" cols="30" rows="3"></textarea><br>
                    <textarea placeholder="Entrer une Description" name="" id="textarea" cols="30" rows="3"></textarea>
                    <button>Enregistrer</button>
                    <a href="#" class="modal_close">&times;</a>
                </div>
            </div>

            <span>
                <h3>Plats</h3>
                <a id="btn-change" href="#modal-second-menu">Modifier</a>
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
            <div id="modal-third-menu" class="modal">
                <div class="modal_content">
                    <a href="#" class="modal_close">&times;</a>
                    <textarea placeholder="Entrer un Titre" name="" id="textarea" cols="30" rows="3"></textarea><br>
                    <textarea placeholder="Entrer une description" name="" id="textarea" cols="30" rows="3"></textarea>
                    <button>Enregistrer</button>
                </div>
            </div>
            <span>
                <h3>A Partager</h3>
                <a id="btn-change" href="#modal-third-menu"">Modifier</a>
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
            <div id="modal-fourth-menu" class="modal">
                <div class="modal_content">
                    <textarea placeholder="Entrer un Titre" name="" id="textarea" cols="30" rows="3"></textarea><br>
                    <textarea placeholder="Entrer une Description" name="" id="textarea" cols="30" rows="3"></textarea>
                    <button>Enregistrer</button>
                    <a href="#" class="modal_close">&times;</a>
                </div>
            </div>
            <span>
                <h3>Desserts</h3>
                <a id="btn-change" href="#modal-fourth-menu">Modifier</a>
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
        <button id="btn-save">Enregistrer les modifications</button>
    </div>
</body>

</html>
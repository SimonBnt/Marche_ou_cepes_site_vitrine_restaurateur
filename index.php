<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marche ou cèpes</title>
    <meta name="description" content="Ceci est une description">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <!-- <script src="/assets/js/script.js" defer></script> -->
</head>
<body>
    <main>
        <section id="home" class="section">
            <div id="logo_container">
                <img id="logo" src="assets/img/logo.png" alt="Logo">
            </div>
            <a href="">
                <h1>Trouvez notre restaurant ici !</h1>
            </a>
            <img src="assets/img/slide-separator_white.png" alt="">
            <h2>Qui sommes nous ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptas ipsa atque eaque facere tempora assumenda cupiditate optio ea, dolorum adipisci et quisquam tempore sapiente qui molestiae aliquam facilis rem repellendus vitae maxime animi. Facilis. </p>
            <h2>Adresse</h2>
            <p id="adresse">7 Rue de la Fontaine Pinot </p>
        </section>
        <section id="menu" class="section">
            <h2>Notre menu</h2>
            <img src="/assets/img/slide-separator_white.png" alt="">
            <div id="menu_grid" >
                <div id="top_left" class="padding">
                    <h3>Entrées</h3>
                    <p class="align-start">titre</p>
                    <p class="align-start">description</p>
                </div>
                <div id="top_right" class="padding">
                    <h3>Plats</h3>
                    <p class="align-start">titre</p>
                    <p class="align-start">description</p>
                </div>
                <div id="bottom_left" class="padding">
                    <h3>A partager</h3>
                    <p class="align-start">titre</p>
                    <p class="align-start">description</p>
                </div>
                <div id="bottom_right" class="padding">
                    <h3>Desserts</h3>
                    <p class="align-start">titre</p>
                    <p class="align-start">description</p>
                </div>
            </div>
        </section>
        <section id="form" class="section">
            <h2>Contactez nous</h2>
            <form action="monfichier.php" method="post">
                <fieldset id="form_grid">
                    <div id="input_firstname" class="flex">
                        <label for="firstname" class="active">Prénom</label>
                        <input type="text" name="firstname" placeholder="Votre prénom :" required>
                    </div>
                    <div id="input_lastname" class="flex">
                        <label for="lastname" class="active">Nom</label>
                        <input type="text" name="lastname" placeholder="Votre nom :" required>
                    </div>
                    <div id="input_phonenumber" class="flex">
                        <label for="phone_number" class="active">n° de téléphone</label>
                        <input type="text" name="phone_number" placeholder="Votre n° de télephone :" required>
                    </div>
                    <div id="input_txtarea" class="flex">
                        <label for="message" class="active">Votre message</label>
                        <input type="text" name="message" placeholder="Votre message :" required>
                    </div>
                    <div id="form_btn">
                        <button id="form_send">Envoyez !</button>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>
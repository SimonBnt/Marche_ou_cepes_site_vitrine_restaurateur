<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- // ---- Metadata ---- // -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ceci est une description">
    
    <title>Marche ou cèpes</title>

    
    <!-- // ---- Web font ---- // -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    
    <!-- // ---- Fontawesome ---- // -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- // ---- link Leaflet ---- // -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" defer/>
    
    <!-- // ---- scipt Leaflet ---- // -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin="" defer></script>
    
    <!-- // ---- ScriptJs ---- // -->
    <script src="./assets/js/map.js"defer></script>
    <script src="./assets/js/formValidation.js" defer></script>
    <!-- <script src="./assets/js/burgerMenu.js" defer></script> -->
    
    <!-- // ---- Favicons ---- // -->
    
    <!-- // ---- Stylesheet ---- // -->
    <link rel="stylesheet" href="./assets/css/styles.min.css">
</head>
<body>
        
        <!-- // ---- Application Navbar ---- // -->
    
    <nav id="navbar">
        
            <a href="#home" title="lien d'accès rapide à l'acceuil"><i class="fa-solid fa-house"></i>Acceuil</a>
            <a href="#menu" title="lien d'accès rapide au menu"><i class="fa-solid fa-utensils"></i>Menu</a>
            <a href="#contact_form" title="lien d'accès rapide au formulaire de contact"><i class="fa-solid fa-envelope"></i>Contact</a>
            <a href="#map" title="lien d'accès rapide à la carte interactive"><i class="fa-solid fa-map-location"></i>Adresse</a>
    </nav>

    <!-- // ---- Application Header ---- // -->

    <header class="default">
        <p>Bienvenu chez Marche ou Cèpes <br/> Terroir, champignons et tradition !</p>
    </header>
    
    <!-- // ---- Application Main ---- // -->
    
    <main class="default">

    <!-- // ---- Application Home section ---- // -->
        
        <section id="home" class="section" class="relative_element_homesection">
            <?php if(isset($_GET) && ($_GET["sendMail"] == true)) :  ?>
                <div id="succesMessage">
                    <p>Votre formulaire a bien été envoyé</p>    
                    <p>Vous pouvez reprendre votre navigation</p>
                </div>
            <?php endif ?>
            <div id="normalsize_logo_container" class="relative_element_homesection">
                <img id="normalsize_logo" src="./assets/img/logo.png" alt="Logo Marche ou cèpes">
            </div>
            <h1 class="relative_element_homesection">Venez gouter nos spécialités à base champignon !</h1>
            <h2 class="relative_element_homesection">Qui sommes nous ?</h2>
            <p class="relative_element_homesection" id="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptas ipsa atque eaque facere tempora assumenda cupiditate optio ea, dolorum adipisci et quisquam tempore sapiente qui molestiae aliquam facilis rem repellendus vitae maxime animi. Facilis. </p>
            <h2 class="relative_element_homesection">Adresse</h2>
            <p id="adresse" class="relative_element_homesection">7 Rue de la Fontaine Pinot </p>
            <button id="cta" class="relative_element_homesection">
                <a href="#map" title="lien d'accès rapide au formulaire de contact">Cliquez-ici pour réserver</a>
            </button>
        </section>

    <!-- // ---- Application Menu section ---- // -->
        
        <section id="menu" class="section">
            <h2>Notre menu</h2>
            <div id="dishe_container" >
                <div class="dishe_category"  id="category1">
                    
                    <h3>Entrées</h3>
                    
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>

                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                </div>

                <div class="dishe_category" id="category2">
                    <h3>Plats</h3>

                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>

                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                </div>

                <div class="dishe_category" id="category3">
                    <h3>A partager</h3>

                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>

                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                </div>

                <div class="dishe_category"  id="category4">
                    <h3>Desserts</h3>

                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>

                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    <div class="dishes">
                        <p class="align-start">titre</p>
                        <p class="align-start">description</p>
                    </div>
                    
                </div>
            </div>
        </section>

    <!-- // ---- Application Contact Form section ---- // -->
    
    <section id="contact_form" class="section">
        <h2>Contactez nous</h2>

        <!-- // ---- Application Contact Form ---- // -->

        <form id="form" action="./formValidation.php" method="POST">
                <fieldset id="form_grid">
                    <div id="div_firstname" class="labelinput_flex_container">
                        <label for="firstname">Prénom</label>
                        <span id="firstname-error"></span>
                        <input id="firstname" type="text" name="firstname" placeholder="Votre prénom :" onkeyup="validateFirstName()" required>
                    </div>
                    <div id="div_lastname" class="labelinput_flex_container">
                        <label for="lastname">Nom</label>
                        <span id="lastname-error"></span>
                        <input id="lastname" type="text" name="lastname" placeholder="Votre nom :" onkeyup="validateLastName()" required>
                    </div>
                    <div id="div_phonenumber" class="labelinput_flex_container">
                        <label for="phone_number">n° de téléphone</label>
                        <span id="phone-error"></span>
                        <input id="phonenumber" type="text" name="phone_number" placeholder="Votre n° de télephone :" onkeyup="validateNumber()" required>
                    </div>
                    <div id="div_txtarea" class="labelinput_flex_container">
                        <label for="message">Votre message</label>
                        <span id="message-error"></span>
                        <textarea id="textarea" type="text" name="message" placeholder="Votre message :" onkeyup="validateMessage()" required></textarea>
                    </div>
                    <div id="form_btn">
                        <button type="submit" id="form_send" title="Permet d'envoyer le formulaire pour la prise en compte de votre demande">Envoyez le formulaire</button>
                        <p id="submit-error"></p>
                    </div>
                </fieldset>
            </form>
        </section>

    <!-- // ---- Application Map section ---- // -->
        
        <section id="map" class="section">

            <!-- // ---- Application Map ---- // -->

            <div id="map_container">
                
            </div>
        </section>
    </main>
    
    <!-- // ---- Application Footer ---- // -->
    
    <footer class="default">
        <span><a href="./legalmention.php" title="Vous redirige vers la page des mentions légales"><p id="legalmention">Mentions légales</p></a></span>
    </footer>
</body>
</html>
<?php

session_start();

require_once "./inc/functionDb.php";


if(isset($_POST) && isDisheValid($_POST)) {

        $title = htmlspecialchars($_POST["title"]);
        $description = htmlspecialchars($_POST["description"]);
        $category_id = htmlspecialchars($_POST["category_id"]);

        addDisheToDb($title, $description, $category_id);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- // ---- Metadata ---- // -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ceci est une description">
    
    <title>Marche ou cèpes // Page administrateur</title>

    <!-- // ---- Stylesheet ---- // -->
    <link rel="stylesheet" href="./assets/css/styles.min.css">

     <!-- // ---- Fontawesome ---- // -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- // ---- Web font ---- // -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    
    <!-- // ---- ScriptJs ---- // -->
    <script src="./assets/js/modal.js" defer></script>
    <script src="./assets/js/modalFormValidation.js" defer></script>
    
    <!-- // ---- Favicons ---- // -->
    
</head>

<body id="admin_page_body">
    <main id="admin_page_main">

        <!-- // ---- Config section ---- // -->

        <section class="admin_page_section" id="config_section">
            <h1 id="admin_page_h1">Page Administrateur</h1>
            <h2 id="config_h2" class="m_h2">Editez votre description et votre adresse !</h2>
            

        </section>
        
        <!-- // ---- Dishe creation section ---- // -->
        
        <section class="admin_page_section" id="disheCreation_section">
            <div class="admin_page_div" id="disheCreation_div">    
                <h2 id="disheCreation_h2" class="m_h2">Créez vos plat !</h2>
                <p id="creation_info" class="m_p">Grâce à cette fonctionnalité, vous avez la possibilité de créer des plats et les ajouter à votre base de donnée.</p>
                
                <!-- // ---- Bouton modale ---- // -->
                
                <button id="disheCreation_btn">
                    <a href="#" role="button" data-target="#modal" data-toggle="modal" title="En savoir plus" class="btn">Créez un plat</a>
                </button>
            </div>

                <!-- // ---- Modale class "show" (e) /modal.js ---- // -->
                
                <div class="adminPage_modal" id="modal" role="dialog">
                    <div class="modal-content">
                        <button class="close" role="button" data-dismiss="dialog">x</button>
                        <h2 id="modal_h2">Fonctionalité de création de plat</h2>

                        <form action="./admin_page2.php" method="POST" id="disheCreationForm" class="modal_form">
                            <p class="modal_redStar_message">Les champs avec une étoiles rouges (*) sont obligatoires.</p>
                            <div class="modalForm_div" id="disheTitle_div">
                                <label for="disheTitle" class="modalForm_label">Titre du plat :</label>
                                <input id="disheCreation_title" name="title" type="text" class="modalForm_input" placeholder="Titre :" onkeyup="validateTitle()" required>
                                <span class="modalForm_span" id="title-error"></span>
                                
                            </div>
                            <div class="modalForm_div" id="disheDescription_div">
                                <label for="disheDescription" class="modalForm_label">Description du plat :</label>
                                <input id="disheCreation_description" name="description" type="text" class="modalForm_input" placeholder="Description :" onkeyup="validateDescription()" required>
                                <span class="modalForm_span" id="description-error"></span>
                            </div>
                            <div class="modalForm_div" id="disheSelector_div">
                                <label for="disheSelector" class="modalForm_label">Choix d'une categorie correspondante :</label>
                                <select name="category" id="category_selector" name="setCategory" onkeyup="validateSelector()" required>
                                    <option  value="selectCategory">Sélectionez une catégorie</option>
                                    <option value="1">1 : Entrée</option>
                                    <option value="2">2 : Plat</option>
                                    <option value="3">3 : A partager</option>
                                    <option value="4">4 : Déssert</option>
                                </select>
                                <span class="modalForm_span" id="selector-error"></span>
                            </div>
                            <div class="modalForm_div" id="modalForm_sendBtn_div">
                                <button type="submit" class="modal_sendBtn" id="disheCreation_modalBtn">Créer le plat</button>
                                <span class="modalForm_span" id="form-error"></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <!-- // ---- Menu edition section ---- // -->

        <section class="admin_page_section" id="menuEdition_section">
            <h2 id="" class="m_h2">Editez vos menus !</h2>

            <div id="editionDishe_container" >
                <div class="editionDishe_category"  id="disheCategory1">
                    
                    <h3>Entrées</h3>
                    
                    <div class="dishes">
                           
                    </div>

                    <div class="dishes">
                    </div>

                    <div class="dishes">
                    </div>

                    <div class="dishes">
                    </div>
                </div>

                <div class="editionDishe_category" id="disheCategory2">
                    <h3>Plats</h3>

                    <div class="dishes">
                        
                    </div>

                    <div class="dishes">
                        
                    </div>
                    <div class="dishes">
                        
                    </div>
                    <div class="dishes">
                        
                    </div>
                </div>

                <div class="editionDishe_category" id="disheCategory3">
                    <h3>A partager</h3>

                    <div class="dishes">
                        
                    </div>

                    <div class="dishes">
                        
                    </div>
                    <div class="dishes">
                        
                    </div>
                    <div class="dishes">
                        
                    </div>
                </div>

                <div class="editionDishe_category"  id="disheCategory4">
                    <h3>Desserts</h3>

                    <div class="dishes">
                        
                    </div>

                    <div class="dishes">
                        
                    </div>
                    <div class="dishes">
                        
                    </div>
                    <div class="dishes">
                        
                    </div>
                    
                </div>
            </div>
            
        </section>
    </main>
</body>
</html>


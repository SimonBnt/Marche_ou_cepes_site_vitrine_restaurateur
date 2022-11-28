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
                
<!-- // ---- modal button  ---- // -->
                
                <button id="disheCreation_btn" class="disheCreation_classBtn">
                    <a href="#" role="button" data-target="#modal" data-toggle="modal" title="Cliquez-ici pour créer un plat" class="btn">Créez un plat</a>
                </button>

                <button class="disheCreation_classBtn">
                    <a href="#" role="button" data-target="#disheListModal" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Voir la liste des plats</a>
                </button>
            </div>
        </section>

<!-- // ---- Menu edition section ---- // -->

        <section class="admin_page_section" id="menuEdition_section">
            <h2 class="m_h2">Editez vos menus !</h2>
            <div id="editionDishe_container" >
                <div class="editionDishe_category"  id="disheCategory1">
                    <h3>Entrées</h3>
                    <div class="dishes">
                        <?php //echo $get = getDisheFromDb() ;?>
                        <?php //echo '<pre>';
                        //var_dump($get);
                        //echo '</pre>';
                        //;?>
                    </div>
                    <div class="dishes">
                    </div>
                    <div class="dishes">
                    </div>
                    <div class="dishes">
                    </div>
                    <button class="admin_page_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal1" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les entrées</a>
                    </button>
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

                    <button class="admin_page_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal2" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les plats</a>
                    </button>
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

                    <button class="admin_page_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal3" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les plats a partager</a>
                    </button>
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
                    
                    <button class="admin_page_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal4" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les desserts</a>
                    </button>
                </div>
            </div>
        </section>

<!-- // ---- disheCreation modal  class "show" (e) /modal.js ---- // -->
                
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
                        <?php $category = getCategory() ?>

                        <select id="category_selector" name="setCategory" onkeyup="validateSelector()" required>
                        <option value="selectCategory">Sélectionez une catégorie</option>
                                <?php foreach ( $category as $key => $categories ): ?>
                                <option value="<?php echo $categories['id'] ?>">
                                    <?php echo $categories['id'] ?> :
                                    <?php echo $categories['name'] ?>
                                </option>
                                <?php endforeach ; ?>
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

<!-- // ---- disheEdition "entrees" modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheListModal" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 id="modal_h2">Voici la liste des plats enregistrés en base de donnée</h2>
            </div>
        </div>

<!-- // ---- disheEdition "entrees" modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal1" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 id="modal_h2">Les Entrées</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn">Créer le plat</button>
                </div>
            </div>
        </div>

<!-- // ---- disheEdition "plats" modal class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal2" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 id="modal_h2">Les Plats</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn">Créer le plat</button>
                </div>
            </div>
        </div>

<!-- // ---- disheEdition "a partager" modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal3" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 id="modal_h2">Les plats a partager</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn">Créer le plat</button>
                </div>
            </div>
        </div>

<!-- // ---- disheEdition "desserts" modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal4" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 id="modal_h2">les Desserts</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn">Créer le plat</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>


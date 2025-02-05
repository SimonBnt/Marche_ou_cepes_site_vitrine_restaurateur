<?php
// ini_set("display_errors", 1);
// ini_set("display_startup_errors", 1);
// error_reporting(E_ALL);

require_once "./inc/functionDb.php";

session_start();

if ($_SESSION["connected"] != true) {
    header("location:admin_connection.php");
    exit();
}

if (isset($_POST) && isDisheValid($_POST)) {

        $title = htmlspecialchars($_POST["title"]);
        $description = htmlspecialchars($_POST["description"]);
        $category = htmlspecialchars($_POST["setCategory"]);

        addDisheToDb($title, $description, $category);
        
}

try {
    if (isset($_POST["configSend_btn"])) {

        $_SESSION["bio"] = nl2br(htmlspecialchars($_POST["bio"]));
        $_SESSION["address"] = htmlspecialchars($_POST["address"]);

        if (!empty($_POST["bio"]) && !empty($_POST["address"])) {

            $insertText = $pdo->prepare("INSERT INTO configuration(bio, address) VALUES (?, ?)");
            $insertText->execute(
                array(
                    $_SESSION["bio"],
                    $_SESSION["address"]
                )
            );

            $successMessage = "La bio et l'adresse ont bien été saisi !";
        } else {
            $errorMessage = "Veuillez remplir tous les champs...";
        };
    }
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage();
};

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

                        <!-- // ---- App Body ---- // -->

<body id="admin_page_body">
    <main id="admin_page_main">
        
    <!-- // ---- Deconnexion button---- // -->
        
    
    <div id="Head_div" class="">
            <div id="deconnection_btnDiv">
                <button>
                    <a id="" href="admin_deconnection.php">Se déconnecter</a>
                </button>
            </div>
            <h1 id="admin_page_h1">Page Administrateur</h1>
            <p id="admin_page_p">Cette page vous permet de voir les contenus éditables de votre site, et de les modifier à votre guise.
        </div>

<!-- // ---- Config section ---- // -->
        <section class="admin_page_section" id="config_section">
            <div id="returnedConfig_divG">
            
                <h2 id="configSection_h2" class="m_h2">Editez votre description et votre adresse !</h2>

                <?php if(isset($_POST) && (isset($_POST["bio"]) && (isset($_POST["address"]) && !empty($_POST["bio"]) && !empty($_POST["address"])))) :?>
                    <div id="succesConfigMessage">
                        <p id="succesMessageConfig">Les modifications ont été faites avec succés.</p>    
                        <p>Vous pouvez reprendre votre navigation</p>
                    </div>
                <?php endif ?>

                <div class="returnedConfig_div">    
                    <label class="returnedConfig_label" for="description/bio">Description/Bio</label>
                    <p class="returnedConfig_p">
                        <?php
                        $pdoStat = $pdo->prepare(" SELECT bio FROM configuration WHERE id = (SELECT MAX(id) FROM configuration) ");
                        $executeIsOk = $pdoStat->execute();
                        $biography = $pdoStat->fetch();
                        $_SESSION["bio"]=$biography;
                        echo $biography[0];
                        ?>
                    </p>
                </div>

    <!-- // ---- configSection modal button  ---- // -->
    
                <div class="returnedConfig_div">    
                    <label class="returnedConfig_label" for="address">Adresse du restaurant</label>
                    <p class="returnedConfig_p">
                        <?php
                        $pdoStat = $pdo->prepare(" SELECT address FROM configuration WHERE id = (SELECT MAX(id) FROM configuration) ");
                        $executeIsOk = $pdoStat->execute();
                        $address = $pdoStat->fetch();
                        $_SESSION["address"]=$address;
                        echo $address[0];
                        ?>
                    </p>
                </div>

                <button id="configSection_btn">
                    <a href="#" role="button" data-target="#configEdition_modal" data-toggle="modal" title="Cliquez-ici pour créer un plat" class="btn">Modifiez votre description et votre adresse</a>
                </button>
            </div>
        </section>
        
<!-- // ---- Dishe creation section ---- // -->
        
        <section class="admin_page_section" id="disheCreation_section">
            <div class="admin_page_div" id="disheCreation_div">    
                <h2 id="disheCreation_h2" class="m_h2">Créez vos plat !</h2>

                <?php if(isset($_POST) && (isset($_POST["title"]) && (isset($_POST["description"]) && (isset($_POST["setCategory"]) && !empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["setCategory"]))))) :?>
                    <div id="succesDisheCreationMessage">
                        <p id="succesMessageDishe" class="succesDisheMessage">Le plat a été créé avec succés.</p>    
                        <p class="succesDisheMessage" id="succesDisheMessage2">Vous pouvez reprendre votre navigation</p>
                    </div>
                <?php endif ?>

                <p id="creation_info" class="m_p">Grâce à cette fonctionnalité, vous avez la possibilité de créer des plats et les ajouter à votre base de donnée.</p>
                
    <!-- // ---- disheCreation modal button  ---- // -->
                <label for="" class="disheCreation_btnLabel">Bouton 1 :</label>
                <button id="disheCreation_btn1" class="disheCreation_classBtn">
                    <a href="#" role="button" data-target="#disheCreationModal" data-toggle="modal" title="Cliquez-ici pour créer un plat" class="btn">Créez un plat</a>
                </button>

                <label for="" class="disheCreation_btnLabel">Bouton 2 :</label>
                <button class="disheCreation_classBtn">
                    <a href="#" role="button" data-target="#disheListModal" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Voir la liste des plats</a>
                </button>
            </div>
        </section>

<!-- // ---- Menu edition section ---- // -->

        <section class="admin_page_section" id="menuEdition_section">
            <h2 class="m_h2">Editez vos menus !</h2>
            <div id="editionDishe_container">
                <div class="editionDishe_category"  id="disheCategory1">
                    <h3>Entrées</h3>
                    <div class="dishes">
                    </div>
                    <button class="editionSection_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal1" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les entrées</a>
                    </button>
                </div>

                <div class="editionDishe_category" id="disheCategory2">
                    <h3>Plats</h3>

                    <div class="dishes">
                    </div>

                    <button class="editionSection_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal2" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les plats</a>
                    </button>
                </div>

                <div class="editionDishe_category" id="disheCategory3">
                    <h3>A partager</h3>

                    <div class="dishes">
                    </div>

                    <button class="editionSection_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal3" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les plats a partager</a>
                    </button>
                </div>

                <div class="editionDishe_category"  id="disheCategory4">
                    <h3>Desserts</h3>

                    <div class="dishes">
                    </div>

                    <button class="editionSection_classBtn">
                        <a href="#" role="button" data-target="#disheEditionModal4" data-toggle="modal" title="Cliquez-ici pour acceder à la liste des plats" class="btn">Editer les desserts</a>
                    </button>
                </div>
            </div>
            <button id="saveEdition_btn">
               <a href="">Enregistrer les modifications</a>
            </button>
        </section>


<!-- // ---- configEdition modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="configEdition_modal" role="dialog">
            <div class="modal-content">

                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 class="modal_h2">Modifiez vos informations</h2>

                <form id="configEditionForm" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

                    <div class="configModal_div">
                        <label for="textarea">Description/Bio :</label>
                        <textarea placeholder="Entrer votre description" name="bio" id="textarea" cols="30" rows="100"><?= (isset($_POST["bio"])) ? $_POST["bio"] : "" ?></textarea>
                    </div>

                    <div class="configModal_div">
                        <label for="address">Adresse du restaurant :</label>
                        <input placeholder="Entrer votre adresse" name="address" id="input" cols="30" rows="5" value="<?= (isset($_POST["address"])) ? $_POST["address"] : "" ?>">
                    </div>
                    <button id="config_btn" name="configSend_btn">Enregistrer</button>
                </form>
            </div>
        </div>

<!-- // ---- disheCreation modal  class "show" (e) /modal.js ---- // -->
                
        <div class="adminPage_modal" id="disheCreationModal" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 class="modal_h2">Fonctionalité de création de plat</h2>

                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" id="disheCreationForm" class="modal_form">
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
                                <option value="<?= $categories["id"] ?>">
                                    <?= $categories["id"] ?> :
                                    <?= $categories["name"] ?>
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
                <h2 class="modal_h2">Voici la liste des plats enregistrés en base de donnée</h2>
                <?php require_once "inc/menu_content.php" ;?>
            </div>
        </div>

<!-- // ---- disheEdition "entrees" modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal1" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 class="modal_h2">Les Entrées</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn"></button>
                </div>
            </div>
        </div>

<!-- // ---- disheEdition "plats" modal class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal2" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 class="modal_h2">Les Plats</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn"></button>
                </div>
            </div>
        </div>

<!-- // ---- disheEdition "a partager" modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal3" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 class="modal_h2">Les plats a partager</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn"></button>
                </div>
            </div>
        </div>

<!-- // ---- disheEdition "desserts" modal  class "show" (e) /modal.js ---- // -->


        <div class="adminPage_modal" id="disheEditionModal4" role="dialog">
            <div class="modal-content">
                <button class="close" role="button" data-dismiss="dialog">x</button>
                <h2 class="modal_h2">les Desserts</h2>
                <div class="modalForm_div">
                    <button type="submit" class="modal_sendBtn"></button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>


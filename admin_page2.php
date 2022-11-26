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

    <!-- // ---- Web font ---- // -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    
    <!-- // ---- ScriptJs ---- // -->
    <script src="./assets/js/modal.js" defer></script>
    
    <!-- // ---- Favicons ---- // -->
    
</head>

<body id="admin_page_body">
    <main id="admin_page_main">

                <!-- // ---- Dishe creation section ---- // -->

        <section class="admin_page_section" id="disheCreation_section">
            <div class="m_div" id="disheCreation_div">    
                <h2 id="modal_h2" class="m_h2">Créez vos plat !</h2>
                <p id="creation_info" class="m_p">Grâce à cette fonctionnalité, vous avez la possibilité de créer des plats et les ajouter à votre base de donnée.</p>
                
                <!-- // ---- Bouton modale ---- // -->

                <button id="disheCreation_btn">
                    <a href="#" role="button" data-target="#modal" data-toggle="modal" title="En savoir plus" class="btn">Créez un plat</a>
                </button>
                </div>

                <!-- // ---- Modale class "show" (e) /modal.js ---- // -->

            <div class="modal" id="modal" role="dialog">
                <div class="modal-content">
                        <button class="fermer" role="button" data-dismiss="dialog">x</button>
                        <h2>Ma Belle Fenêtre modale</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda numquam est minus odit sint, dolore ipsa accusamus ipsum molestias enim eum! Labore porro dicta voluptates praesentium provident incidunt atque minus asperiores voluptate.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>


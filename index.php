<?php
// Défini les variables d'environnement permettant d'éviter les erreurs liés au ../ ou autres
define('ROOT_DIR', dirname(__FILE__)); //C:\htdocs\fileExplorer 
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR)))); // /fileExplorer

require ('functions.php'); 
include ('themes/head.php'); // En tête du document
?>

<!-- Coeur de l'exploreur -->
<div class="container-fluid content">
    <div class="row">
    <div class="container contentSub my-5">
    <div class="row">
        <div class="col-12 pt-5">
            <h1 class='text-center'>Explorateur de fichier</h1>
        </div>
        <div class="col-12 py-3">
            <!--  Le formulaire permettant d'envoyer un fichier -->
            <?php
                include ('functions/upload.php');
                include ('themes/upload_form.php');
            ?>

        </div>
        <div class="col-12 pb-5">

            <table class="table table-striped table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Taille</th>
                        <th>Type</th>
                        <th>Date Modification</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            
                <!-- Explorateur -->
                    <?php
                        // Coeur de l'application
                        include ('functions/explorer_form_post.php'); 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include ('themes/footer.php'); // Simple fichier avec le pied de page
?>
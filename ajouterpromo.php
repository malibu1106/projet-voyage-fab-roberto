<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $region = $_POST["region"];
    $envie = $_POST["envie"];
    $duree = $_POST["duree"];
    $prix = $_POST["prix"];

    // Vérifie si un fichier a été téléchargé
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        // Emplacement de sauvegarde de l'image
        $target_dir = "img/voyages/promos/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        // Déplacer l'image téléchargée vers le répertoire de destination
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Générer le contenu HTML pour afficher la nouvelle promotion
            $html = '
<a href="index.php?region=' . $region . '&envie=' . $envie . '">
    <article class="promo">
        <figure>
            <img title="promo" src="' . $target_file . '" alt="promo">
            <figcaption>
                <div class="titre-promo bold">' . ucfirst($region) . '</div>
                <div class="sous-titre-promo semibold">' . ucfirst($envie) . '</div>
                <div class="conteneur-duree-prix">
                    <div class="duree-promo"><img src="img/voyages/promos/hourglass.png">' . $duree . '</div>
                    <div class="prix-promo">dès <span class="red bold prix">' . $prix . '€</span></div>
                </div>
            </figcaption>
        </figure>
    </article>
</a>';

            $folder_path = "promos/";

            // Chemin complet du fichier HTML à créer dans le dossier promos
            $file_name = $folder_path . $region . $envie . "promo.php";

            // Écriture du contenu HTML dans le fichier
            file_put_contents($file_name, $html);

            // Affichage d'un message de succès

            echo '<section class="section-promos">
    <div class="conteneur-promo">';
            echo $html;


            echo '</div>';
            echo "<center>Le fichier $file_name a été créé avec succès.</center>";
            echo '
</section>';
        } else {
            echo "Erreur lors de l'envoi du fichier.";
        }
    } else {
        echo "Veuillez sélectionner une image.";
    }
}

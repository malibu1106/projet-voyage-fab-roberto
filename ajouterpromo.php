<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $region = $_POST["region"];
    $envie = $_POST["envie"];
    $duree = $_POST["duree"];
    $prix = $_POST["prix"];
    $reduc = $_POST["reduc"];
    $regionLien = "temp";
    $envieLien = "temp";



    if ($region === "Auvergne-Rhône-Alpes") {
        $regionLien = "auvergne";
    } elseif ($region === "Bourgogne-Franche-Comté") {
        $regionLien = "bourgogne";
    } elseif ($region === "Bretagne") {
        $regionLien = "bretagne";
    } elseif ($region === "Centre-Val de Loire") {
        $regionLien = "centre";
    } elseif ($region === "Corse") {
        $regionLien = "corse";
    } elseif ($region === "Grand Est") {
        $regionLien = "grandest";
    } elseif ($region === "Hauts-de-France") {
        $regionLien = "hdf";
    } elseif ($region === "Île-de-France") {
        $regionLien = "idf";
    } elseif ($region === "Normandie") {
        $regionLien = "normandie";
    } elseif ($region === "Nouvelle-Aquitaine") {
        $regionLien = "aquitaine";
    } elseif ($region === "Occitanie") {
        $regionLien = "occitanie";
    } elseif ($region === "Pays de la Loire") {
        $regionLien = "loire";
    } elseif ($region === "Provence-Alpes-Côte d'Azur") {
        $regionLien = "paca";
    } else {
        // Gérer le cas où aucune option n'est sélectionnée ou la valeur sélectionnée n'est pas reconnue
        $regionLien = "valeur_par_defaut";
    }


    if ($envie === "Atteignez des sommets") {
        $envieLien = "sommets";
    } elseif ($envie === "Bien-être absolu") {
        $envieLien = "bienetre";
    } elseif ($envie === "Escale marine") {
        $envieLien = "marine";
    } elseif ($envie === "Escapade gourmande") {
        $envieLien = "gourmande";
    } elseif ($envie === "Harmonie naturelle") {
        $envieLien = "harmonie";
    } elseif ($envie === "Plages de rêve") {
        $envieLien = "plage";
    } elseif ($envie === "Sentiers intrépides") {
        $envieLien = "sentiers";
    } elseif ($envie === "Sport Extrême") {
        $envieLien = "sport";
    } elseif ($envie === "Vibrations culturelles") {
        $envieLien = "culture";
    } elseif ($envie === "Voyages Écoresponsables") {
        $envieLien = "eco";
    } else {
        // Gérer le cas où aucune option n'est sélectionnée ou la valeur sélectionnée n'est pas reconnue
        $envieLien = "valeur_par_defaut";
    }



    // Vérifie si un fichier a été téléchargé
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        // Emplacement de sauvegarde de l'image
        $target_dir = "img/voyages/promos/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        // Déplacer l'image téléchargée vers le répertoire de destination
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Générer le contenu HTML pour afficher la nouvelle promotion
            $html = '
<a href="index.php?region=' . $regionLien . '&envie=' . $envieLien . '&promo=true">
    <article class="promo">
        <figure>
            <img title="promo" src="' . $target_file . '" alt="promo">
            <figcaption>
                <div class="pourcent-promo">' . $reduc . '</div>
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

            echo '<section class="section-promos">
    <div class="conteneur-promo">';
            echo $html;

            $folder_path = "promos/";






            // Chemin complet du fichier HTML à créer dans le dossier promos
            $file_name = $folder_path . $regionLien . $envieLien . "promo.php";

            // Écriture du contenu HTML dans le fichier
            file_put_contents($file_name, $html);

            // Affichage d'un message de succès




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

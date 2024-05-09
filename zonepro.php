<div id="zone-pro">
    <img onclick="showOrHideProZone()" src="img/close-research.png">

    <form action="index.php?action=traitementpromo" method="post" enctype="multipart/form-data">
        <h2 class="titre-zone-pro">Ajouter une promotion</h2>
        <label for="image">Image (carrée de préférence) :</label>
        <input class="inputfile" type="file" name="image" id="image" required><br>

        <label for="region">Région :</label>
        <select name="region" id="region" required>
            <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
            <option value="Bretagne">Bretagne</option>
            <option value="Centre-Val de Loire">Centre-Val de Loire</option>
            <option value="Corse">Corse</option>
            <option value="Grand Est">Grand Est</option>
            <option value="Hauts-de-France">Hauts-de-France</option>
            <option value="Île-de-France">Île-de-France</option>
            <option value="Normandie">Normandie</option>
            <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
            <option value="Occitanie">Occitanie</option>
            <option value="Pays de la Loire">Pays de la Loire</option>
            <option value="Paca">Provence-Alpes-Côte d'Azur</option>
            <!-- Ajoute d'autres options pour les différentes régions -->
        </select><br>

        <label for="envie">Envie :</label>
        <select name="envie" id="envie" required>
            <option value="Atteignez des sommets">Atteignez des sommets</option>
            <option value="Bien-être absolu">Bien-être absolu</option>
            <option value="Escale marine">Escale marine</option>
            <option value="Escapade gourmande">Escapade gourmande</option>
            <option value="Harmonie naturelle">Harmonie naturelle</option>
            <option value="Plages de rêve">Plages de rêve</option>
            <option value="Sentiers intrépides">Sentiers intrépides</option>
            <option value="Sport Extrême">Sport Extrême</option>
            <option value="Vibrations culturelles">Vibrations culturelles</option>
            <option value="Voyages Écoresponsables">Voyages Écoresponsables</option>
        </select><br>

        <label for="duree">Durée du voyage :</label><br>
        <input class="inputpetit" type="text" name="duree" id="duree" required><br>

        <label for="prix">Prix du voyage :</label><br>
        <input class="inputpetit" type="text" name="prix" id="prix" required><br>

        <button type="submit">Ajouter Promotion</button>

    </form>
    <form action="index.php?action=retirerpromo" method="post" enctype="multipart/form-data">
        <h2 class="titre-zone-pro">Retirer une promotion</h2>
        <select name="filename">
            <?php
            foreach (glob("promos/*.php") as $filename) {
                echo '<option value="' . $filename . '">' . $filename . '</option>';
            }
            ?>
        </select>
        <button type="submit" name="delete">Supprimer</button>
    </form>


    </form>
</div>
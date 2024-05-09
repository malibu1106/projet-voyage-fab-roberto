<video id="background-video" autoplay loop muted>

    <source src="bg2.mp4" type="video/mp4">

</video>

<main>
    <section class="accueil">
        <h1>évadez-vous, découvrez, vivez.</h1>
        <div id="recherche-voyage-mobile" class="recherche-voyage-mobile-fermee">
            <div id="recherche-cachee">
                <div id="close-icon"><img id="close-search-mobile-icon" src="img/close-research.png"></div>
                <div class="conteneur-select-mobile">
                    <label for="regions">Régions</label>
                    <select id="regions" name="regions">
                        <option class="researchOption" value="allregions">Toutes les régions</option>

                        <option class="researchOption" value="allregions">Toutes les régions</option>
                        <option class="researchOption" value="auvergne">Auvergne-Rhône-Alpes</option>
                        <option class="researchOption" value="bourgogne">Bourgogne-Franche-Comté</option>
                        <option class="researchOption" value="bretagne">Bretagne</option>
                        <option class="researchOption" value="centre">Centre-Val de Loire</option>
                        <option class="researchOption" value="corse">Corse</option>
                        <option class="researchOption" value="grandest">Grand Est</option>
                        <option class="researchOption" value="hdf">Hauts-de-France</option>
                        <option class="researchOption" value="idf">Île-de-France</option>
                        <option class="researchOption" value="normandie">Normandie</option>
                        <option class="researchOption" value="aquitaine">Nouvelle-Aquitaine</option>
                        <option class="researchOption" value="occitanie">Occitanie</option>
                        <option class="researchOption" value="loire">Pays de la Loire</option>
                        <option class="researchOption" value="paca">Provence-Alpes-Côte d'Azur</option>
                    </select>
                </div>
                <div class="conteneur-select-mobile">
                    <label for="envies">Envies</label>
                    <select id="envies" name="envies">
                        <option class="researchOption" value="allenvies">Toutes les envies</option>
                        <option class="researchOption" value="sommets">Atteignez des sommets</option>
                        <option class="researchOption" value="bienetre">Bien-être absolu</option>
                        <option class="researchOption" value="marine">Escale marine</option>
                        <option class="researchOption" value="gourmande">Escapade gourmande</option>
                        <option class="researchOption" value="harmonie">Harmonie naturelle</option>
                        <option class="researchOption" value="plage">Plages de rêve</option>
                        <option class="researchOption" value="sentiers">Sentiers intrépides</option>
                        <option class="researchOption" value="sport">Sport Extrême</option>
                        <option class="researchOption" value="culture">Vibrations culturelles</option>
                        <option class="researchOption" value="eco">Voyages Écoresponsables</option>
                    </select>
                </div>
                <a id="researchLink" href="#"><img id="search-mobile-icon" src="img/search.png"></a>
            </div>

            <div id="trouver-mon-voyage">Trouver mon voyage</div>
        </div>
    </section>
    <div class="cut-blanc"></div>


    <div class="cut-transp">
        <h2 class="titre-section">Évadez-vous,</h2>
        <h4 class="texte-section">Evadez-vous dans l'élégance intemporelle de la France, où la beauté des villes lumière
            se mêle au charme paisible des villages pittoresques.</h4>
    </div>
    <div class="cut-blanc">

    </div>




    <!-- PROMO GRAND -->
    <section class="section-promos">
        <div class="conteneur-promo">
            <?php include 'promo.php' ?>
        </div>
    </section>
    <div class="cut-blanc"></div>


    <!--REGIONS-->
    <div class="cut-transp">
        <h2 class="titre-section">Découvrez,</h2>
        <h4 class="texte-section">Découvrez les trésors cachés de France, où chaque panorama dévoile un tableau vivant
            d'histoire, de culture et de beauté naturelle à couper le souffle.</h4>

    </div>

    <div class="cut-blanc">

    </div>
    <section id="section-regions" class="fade">

        <div id="background-regions">

            <h3 id="titre-region">L'Auvergne</h3>




            <button id="prevRegion" onclick="prevRegion()">&#10094;</button>

            <a href="index.php?region=auvergne" id="lienRegion"><span class="clickableRegion"></span></a>


            <button id="nextRegion" onclick="nextRegion()">&#10095;</button>

            <div class="prez-region"><img id="carte-region-img" src="img/regions/cartefr/carte-auvergne.png">

                <div class="conteneur-infos-region">

                    <p id="texte-region">Laissez-vous séduire par la beauté brute des volcans endormis et des vastes étendues
                        verdoyantes de l'Auvergne, une région où la nature règne en maître.</p>
                </div>
            </div>

        </div>



    </section>
    <div class="cut-blanc"></div>
    <div id="ancre-voyages"></div>
    <div class="cut-transp">



        <h2 class="titre-section">Vivez.</h2>
        <h4 class="texte-section">Vivez une escapade mémorable où les paysages de France se révèlent être le décor parfait
            pour vos moments d'aventure et de détente.</h4>
    </div>
    <div class="cut-blanc">

    </div>
    <section class="section-voyages">
        <div class="conteneur-voyages">

            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=plage">
                    <h3 class="titre-type-voyages">Plages de rêve</h3>
                </a>
                <hr>
                <a href="index.php?region=paca&envie=plage">
                    <div class="voyage"><img src="img/voyages/esterel.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Paca</h4>
                            <h5>Hôtel de l'Esterel</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=corse&envie=plage">
                    <div class="voyage"><img src="img/voyages/porto-vecchio-corse.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Corse</h4>
                            <h5>Porto-Vecchio</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>

                <a href="index.php?envie=harmonie">
                    <h3 class="titre-type-voyages">Harmonie naturelle</h3>
                </a>
                <hr>
                <a href="index.php?region=loire&envie=harmonie">
                    <div class="voyage"><img src="img/voyages/ombre-des-pins.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Pays de la Loire</h4>
                            <h5>Hôtel à l'ombre des pins </h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=grandest&envie=harmonie">
                    <div class="voyage"><img src="img/voyages/hotel-loges-parc.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Grand Est</h4>
                            <h5>Hôtel les loges du Parc </h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=centre&envie=harmonie">
                    <div class="voyage"><img src="img/voyages/hotel-roca.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Centre Val-de-Loire</h4>
                            <h5>Hôtel Rocaminori</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>

                <a href="index.php?envie=eco">
                    <h3 class="titre-type-voyages">Voyages Écoresponsables</h3>
                </a>
                <hr>
                <a href="index.php?region=loire&envie=eco">
                    <div class="voyage"><img src="img/voyages/domaine-de-pan.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Pays de la Loire</h4>
                            <h5>Le Domaine de Pan</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=normandie&envie=eco">
                    <div class="voyage"><img src="img/voyages/tente-suspendue.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Normandie</h4>
                            <h5>Woody park tentes suspendues</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=idf&envie=eco">
                    <div class="voyage"><img src="img/voyages/Le clos de Nathalie.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Île-de-France</h4>
                            <h5>Le clos de Nathalie</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=bourgogne&envie=eco">
                    <div class="voyage"><img src="img/voyages/La ferme des ruats.jpeg">
                        <div class="conteneur-titre-voyage">
                            <h4>Bourgogne</h4>
                            <h5>La ferme des ruats</h5>
                        </div>
                    </div>
                </a>
            </div>



            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=culture">
                    <h3 class="titre-type-voyages">Vibrations culturelles</h3>
                </a>
                <hr>
                <a href="index.php?region=bretagne&envie=culture">
                    <div class="voyage"><img src="img/voyages/La barbinais .jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Bretagne</h4>
                            <h5>Hotel le Barbinais</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=centre&envie=culture">
                    <div class="voyage"><img src="img/voyages/Le Clos de l'Hermitage.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Centre Val-de-Loire</h4>
                            <h5>Le Clos de l'Hermitage</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=grandest&envie=culture">
                    <div class="voyage"><img src="img/voyages/Hôtel A la Vignette.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Grand Est</h4>
                            <h5>Hôtel à la Vignette</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=idf&envie=culture">
                    <div class="voyage"><img src="img/voyages/La Fantaisie.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Île-de-France</h4>
                            <h5>Hôtel La Fantaisie</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=aquitaine&envie=culture">
                    <div class="voyage"><img src="img/voyages/Domaine Aubazen.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Aquitaine</h4>
                            <h5>Domaine Aubazen</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=sport">
                    <h3 class="titre-type-voyages">Sport Extrême</h3>
                </a>
                <hr>
                <a href="index.php?region=hdf&envie=sport">
                    <div class="voyage"><img src="img/voyages/Hôtel l'escale wissant.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Hauts-de-France</h4>
                            <h5>Hôtel l'escale Wissant</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=occitanie&envie=sport">
                    <div class="voyage"><img src="img/voyages/Gîte Les falaises.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Occitanie</h4>
                            <h5>Gîte Les falaises</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=auvergne&envie=sport">
                    <div class="voyage"><img src="img/voyages/Hôtel les ô d'Annecy.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Rhone-Alpes</h4>
                            <h5>Hôtel les ô d'Annecy</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=sommets">
                    <h3 class="titre-type-voyages">Atteignez des sommets</h3>
                </a>
                <hr>
                <a href="index.php?region=paca&envie=sommets">
                    <div class="voyage"><img src="img/voyages/Par des écrins.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>PACA</h4>
                            <h5>Le parc des Écrins</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=occitanie&envie=sommets">
                    <div class="voyage"><img src="img/voyages/Hôtel la perle des montagnes.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Occitanie</h4>
                            <h5>Hôtel la perle des montagnes</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=bienetre">
                    <h3 class="titre-type-voyages">Bien-être absolu</h3>
                </a>
                <hr>
                <a href="index.php?region=auvergne&envie=bienetre">
                    <div class="voyage"><img src="img/voyages/Cabane La Tour d'Auvergne 2.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Auvergne</h4>
                            <h5>Cabane La Tour d'Auvergne</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=normandie&envie=bienetre">
                    <div class="voyage"><img src="img/voyages/Hôte Ariane &Spa Mt St Michel.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Normandie</h4>
                            <h5>Hôtel Ariane</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=gourmande">
                    <h3 class="titre-type-voyages">Escapade gourmande</h3>
                </a>
                <hr>
                <a href="index.php?region=bourgogne&envie=gourmande">
                    <div class="voyage"><img src="img/voyages/Le panoramique Hôtel.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Bourgogne</h4>
                            <h5>Le panoramique Hôtel</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=grandest&envie=gourmande">
                    <div class="voyage"><img src="img/voyages/Hôtel Les Bateliers Colmar.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Grand Est</h4>
                            <h5>Hôtel Les Bateliers Colmar</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=marine">
                    <h3 class="titre-type-voyages">Escale marine</h3>
                </a>
                <hr>
                <a href="index.php?region=bretagne&envie=marine">
                    <div class="voyage"><img src="img/voyages/erquy.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Bretagne</h4>
                            <h5>Erquy et ses alentours</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=hdf&envie=marine">
                    <div class="voyage"><img src="img/voyages/Hôtel Spa les corderies.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Hauts-de-France</h4>
                            <h5>Hôtel Spa les corderies</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="type-voyage">
                <hr>
                <a href="index.php?envie=sentiers">
                    <h3 class="titre-type-voyages">Sentiers intrépides</h3>
                </a>
                <hr>
                <a href="index.php?region=corse&envie=sentiers">
                    <div class="voyage"><img src="img/voyages/Lac Bastani.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Corse</h4>
                            <h5>10 jours de Trek</h5>
                        </div>
                    </div>
                </a>
                <a href="index.php?region=aquitaine&envie=sentiers">
                    <div class="voyage"><img src="img/voyages/Auberge du bois de l'etang.jpg">
                        <div class="conteneur-titre-voyage">
                            <h4>Aquitaine</h4>
                            <h5>Auberge du bois de l'etang</h5>
                        </div>
                    </div>
                </a>
            </div>

        </div>


    </section>

    <div class="cut-blanc"></div>
    <!-- SECTION AVIS-->
    <div class="cut-transp">
        <h2 class="titre-section">L'avis de nos clients</h2>
        <h4 class="texte-section">Découvrez les expériences inoubliables à travers les yeux de nos voyageurs. Des avis
            authentiques pour des aventures sur mesure.</h4>

    </div>

    <div class="cut-blanc"></div>

    <section class="section-avis">
        <div class="conteneur-avis">
            <article class="avis">
                <figure>
                    <img title="Photo d'Emmanuel Macron" src="img/avis/manu.jpg" alt="Photo d'Emmanuel Macron" />
                    <figcaption>

                        <p class="titre-avis">Très déçu !!</p>
                        <p class="texte-avis">La bouffe était bonne mais y'avait pas une seule vielle à pécho</p>
                        <span class="note-avis"><img src="img/avis/star.png"></span>
                        <span class="nom-avis">Macrotte mon petit pote</span>

                    </figcaption>
                </figure>
            </article>
            <article class="avis">
                <figure>
                    <img title="Photo de Jean Luc Reichmann" src="img/avis/jean-luc.jpg" alt="Photo de Jean Luc Reichmann" />
                    <figcaption>
                        <p class="titre-avis">Excellent !</p>
                        <p class="texte-avis">Tout était parfait! La réservation, l'organisation du voyage, l'hôtel .. merveilleux !
                            Merci beaucoup, je recommande !</p>
                        <span class="note-avis"><img src="img/avis/star.png"><img src="img/avis/star.png"><img src="img/avis/star.png"><img src="img/avis/star.png"><img src="img/avis/star.png"></span>
                        <span class="nom-avis">Jean Luc le grand duc</span>
                    </figcaption>
                </figure>
            </article>
            <article class="avis">
                <figure>
                    <img title="Photo de Brigitte Macron" src="img/avis/brigitte.jpg" alt="Photo de Brigitte Macron" />
                    <figcaption>
                        <p class="titre-avis">Peut mieux faire</p>
                        <p class="texte-avis">C'était pas si mal pour un voyage aux frais du contribuable, même si la vaisselle
                            était pas très jolie ..</p>
                        <span class="note-avis"><img src="img/avis/star.png"><img src="img/avis/star.png"><img src="img/avis/star.png"></span>
                        <span class="nom-avis">Braguette la kekette</span>
                    </figcaption>
                </figure>
            </article>


        </div>



    </section>

    <div class="cut-blanc"></div>
    <!-- SECTION AVIS-->
    <div id="ancre-contact"></div>
    <div class="cut-transp">
        <h2 class="titre-section">Contactez-nous</h2>
        <h4 class="texte-section">Prêt à partir à l'aventure ? Contactez-nous dès maintenant pour planifier votre prochain
            voyage mémorable en quelques clics!</h4>

    </div>

    <div class="cut-blanc"></div>

    <section class="contact">
        <div class="conteneur-contact">
            <div class="conteneur-contact-gauche">
                <form action="#" method="post">
                    <div class="form-gauche">

                        <input placeholder="Nom" type="text" id="nom" name="nom" required>

                        <input placeholder="Prénom" type="text" id="prenom" name="prenom" required>


                        <input placeholder="Adresse email" type="email" id="email" name="email" required>


                        <select id="objet" name="objet" required>
                            <option value="Motif" selected disabled>Ma demande</option>
                            <option value="monvoyage">Planifier mon voyage</option>
                            <option value="renseignements">Obtenir des renseignements</option>
                            <option value="reclamation">Faire une réclamation</option>
                            <option value="autres">Autres demande</option>
                        </select>
                    </div>
                    <div class="form-droite">


                        <textarea placeholder="Votre message" id="message" name="message" rows="4" required></textarea>

                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
            <div class="conteneur-contact-droite">
                <p class="type-contact">Par téléphone</p>
                <p class="infos-contact">01.65.32.66.44</p>

                <p class="type-contact">Par email</p>
                <p class="infos-contact">contact@bleublancbouge.com</p>

            </div>
        </div>
    </section>

</main>
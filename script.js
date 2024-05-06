// MENU BURGER
let iconeMenuBurger = document.getElementById('burger-button');
iconeMenuBurger.addEventListener("click", showOrHideBurgerMenu);

let menuBurger = document.getElementById('menu-petit');

function showOrHideBurgerMenu() {
    document.body.className = "";

    if (menuBurger.classList == "menu-petit-cache") {
        menuBurger.classList.replace("menu-petit-cache", "menu-petit-visible");
        iconeMenuBurger.style.transform = "rotate(90deg)";


    }
    else {

        menuBurger.classList.replace("menu-petit-visible", "menu-petit-cache");
        iconeMenuBurger.style.transform = "rotate(0deg)";

    }

}

// RECHERCHE MASQUEE
let rechercheMobile = document.getElementById('recherche-voyage-mobile');
let rechercheMobileCachee = document.getElementById('recherche-cachee');

rechercheMobile.addEventListener("click", showMobileSearch);

function showMobileSearch() {
    rechercheMobile.classList.replace("recherche-voyage-mobile-fermee", "recherche-voyage-mobile-ouverte");
    rechercheMobileCachee.style.display = "block";
    document.getElementById('trouver-mon-voyage').style.display = "none";
    let closeSearchIcon = document.getElementById('close-search-mobile-icon');
    rechercheMobile.removeEventListener("click", showMobileSearch, false);
    closeSearchIcon.addEventListener("click", hideMobileSearch);

}

function hideMobileSearch() {
    rechercheMobile.classList.replace("recherche-voyage-mobile-ouverte", "recherche-voyage-mobile-fermee");
    rechercheMobileCachee.style.display = "none";
    document.getElementById('trouver-mon-voyage').style.display = "flex";
    rechercheMobile.addEventListener("click", showMobileSearch, true);

}



// BACKGROUND REGIONS

let sectionRegion = document.getElementById('background-regions');
let backgroundIndex = 0;
let regions = ["auvergne", "bourgogne", "bretagne", "centre", "corse", "grandest", "hdf", "idf", "normandie", "aquitaine", "occitanie", "loire", "paca"];
let titreRegions = ["L'Auvergne", "La Bourgogne", "La Bretagne", "Le Centre-Val de Loire", "La Corse", "Le Grand Est", "Les Hauts-de-France", "L'Île-de-France", "La Normandie", "La Nouvelle-Aquitaine", "L'Occitanie", "Les Pays de la Loire", "La Provence-Alpes-Côté d'Azur"];
let texteRegions = ["Laissez-vous séduire par la beauté brute des volcans endormis et des vastes étendues verdoyantes de l'Auvergne, une région où la nature règne en maître.",
    "Vivez l'art de vivre à la bourguignonne en déambulant dans les ruelles médiévales des villes historiques et en dégustant les délices culinaires de cette région emblématique.",
    "Embarquez pour un voyage au cœur de la Bretagne, où les falaises escarpées, les plages de sable fin et les légendes celtiques vous transportent dans un monde de mystère et de magie.",
    "Explorez la douceur de vivre du Centre-Val de Loire, entre vignobles renommés, villages pittoresques et forêts mystérieuses. Ici, vivre est une véritable expression d'harmonie.",
    "Partez à la découverte de la Corse, une île aux mille visages, où l'authenticité des traditions corses se mêle à la splendeur des plages de sable fin et des eaux cristallines.",
    "Découvrez la magie du Grand Est, une terre d'accueil où les traditions ancestrales se perpétuent et où la gastronomie raffinée se marie à la convivialité légendaire.",
    "Explorez les trésors cachés des Hauts-de-France, entre cités fortifiées, vastes plages de sable fin et traditions ancestrales, une région où chaque coin recèle des merveilles à découvrir.",
    "Découvrez la diversité des visages de l'Île-de-France, entre art de vivre urbain et espaces naturels préservés, offrant aux voyageurs une expérience contrastée et captivante.",
    "Explorez les paysages envoûtants de la Normandie, entre plages immenses, villages authentiques et vestiges médiévaux, une région où l'art de vivre prend tout son sens au rythme des marées.",
    "Découvrez la Nouvelle-Aquitaine, une terre d'aventure et de contrastes, où la convivialité du sud-ouest se mêle à la douceur de vivre des régions côtières, promettant une escapade inoubliable.",
    "Embarquez pour un voyage envoûtant au cœur de l'Occitanie, où les vignobles infinis, les cités médiévales et les paysages préservés vous transportent dans un univers de raffinement et de dépaysement.",
    "Plongez dans la douceur de vivre des Pays de la Loire, où les châteaux majestueux, les jardins luxuriants et les bords de Loire paisibles vous invitent à une escapade hors du temps.",
    "Embarquez pour un voyage sensoriel en Provence-Alpes-Côte d'Azur, où les champs de lavande parfumés, les sommets enneigés des Alpes et les eaux scintillantes de la Méditerranée vous offrent un spectacle époustouflant à chaque tournant."];
let zoneCarteRegions = document.getElementById('carte-region-img');
let zoneTitreRegion = document.getElementById('titre-region');
let zoneTexteRegion = document.getElementById('texte-region');



function nextRegion() {

    if (backgroundIndex < regions.length - 1) {
        backgroundIndex++;
    }
    else {
        backgroundIndex = 0;
    }
    let regionBackground = `url("img/regions/${regions[backgroundIndex]}.jpg")`;
    let carteRegionBackground = `img/regions/cartefr/carte-${regions[backgroundIndex]}.png`;

    sectionRegion.style.backgroundImage = regionBackground;
    zoneCarteRegions.src = carteRegionBackground;
    zoneTitreRegion.innerHTML = titreRegions[backgroundIndex];
    zoneTexteRegion.innerHTML = texteRegions[backgroundIndex];
}

function prevRegion() {

    if (backgroundIndex == 0) {
        backgroundIndex = 12;
    }
    else {
        backgroundIndex--;
    }

    let regionBackground = `url("img/regions/${regions[backgroundIndex]}.jpg")`;
    let carteRegionBackground = `img/regions/cartefr/carte-${regions[backgroundIndex]}.png`;
    sectionRegion.style.backgroundImage = regionBackground;
    zoneCarteRegions.src = carteRegionBackground;
    zoneTitreRegion.innerHTML = titreRegions[backgroundIndex];
    zoneTexteRegion.innerHTML = texteRegions[backgroundIndex];
}


function autoNextRegion() {
    setInterval(nextRegion, 2500);
}



autoNextRegion();
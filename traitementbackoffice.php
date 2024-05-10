<?php
if (isset($_GET['action']) && $_GET['action'] === 'retirerpromo') {
    include 'retirerpromo.php';
} elseif (isset($_GET['action']) && $_GET['action'] === 'retirervoyage') {
    include 'retirervoyage.php';
} elseif (isset($_GET['action']) && $_GET['action'] === 'ajouterpromo') {
    include 'ajouterpromo.php';
} elseif (isset($_GET['action']) && $_GET['action'] === 'ajoutervoyage') {
    include 'ajoutervoyage.php';
} else {
    echo 'Erreur de traitement';
}

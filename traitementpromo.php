<?php
if (isset($_GET['action']) && $_GET['action'] === 'retirerpromo') {
    include 'retirerpromo.php';
} else {
    include 'ajouterpromo.php';
}

<?php
$regionSet = false;
$envieSet = false;
$actionSet = false;
$promoSet = false;
$zoneProSet = false;
$region = '';
$envie = '';
if (isset($_GET['region'])) {
    $region = $_GET['region'];
    $regionSet = true;
}
if (isset($_GET['envie'])) {
    $envie = $_GET['envie'];
    $envieSet = true;
}
if (isset($_GET['promo'])) {
    $promoSet = true;
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $actionSet = true;
}
if (isset($_GET['zonePro'])) {
    $zonePro = $_GET['zonePro'];
    $zoneProSet = true;
}
?>

<?php include 'prebody.html' ?>
<?php include 'header.html' ?>

<?php
if ($promoSet == true) {
    include("pages/{$region}{$envie}promo.php");
} else if ($regionSet == true && $envieSet == true) {
    include("pages/$region$envie.php");
} else if ($regionSet == true) {
    foreach (glob("pages/*$region*.php") as $filename) {
        if (basename($filename) !== "$region.php") {
            include $filename;
        }
    }
} else if ($envieSet == true) {
    foreach (glob("pages/*$envie*.php") as $filename) {
        if (basename($filename) !== "$envie.php") {
            include $filename;
        }
    }
} else if ($actionSet == true) {
    include 'traitementbackoffice.php';
} else if ($zoneProSet == true) {
    include 'zonepro.php';
} else {
    include 'accueil.php';
}
?>

<?php include 'footer.php' ?>
<?php include 'postbody.html' ?>
<?php
$regionSet = false;
$envieSet = false;
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
?>

<?php include 'prebody.html' ?>
<?php include 'header.html' ?>

<?php
if ($regionSet == true && $envieSet == true) {
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
} else {
    include 'accueil.php';
}
?>

<?php include 'footer.html' ?>
<?php include 'postbody.html' ?>
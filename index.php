<?php
$pathSet = false;
$region = ''; // Initialisation de la variable $region
$envie = ''; 
if(isset($_GET['region'])) {
    $region = $_GET['region'];
    $pathSet = true;
}
if(isset($_GET['envie'])) {
    $envie = $_GET['envie'];
    $pathSet = true;
}
?>



<?php include 'prebody.html'?>
<?php include 'header.html'?>

<?php if ($pathSet === true){

 include ("pages/$region$envie.html");
}
else{

 include 'accueil.html';}
 
 ?>


<?php include 'footer.html'?>
<?php include 'postbody.html'?>
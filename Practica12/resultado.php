<link rel="stylesheet" href="css/style.css"> 
<?php
$calculoRadio = $_POST['calculoradio'];
$pi=3.1416;
$area=$pi*pow($calculoRadio,2);
print 'El area de tu circulo es: '.$area;
?>
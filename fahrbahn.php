<?php
require 'Auto.php';

use Bacher\Auto;
// @include 'Auto1.php';

$auto = new Auto('rosa');
$auto->fahre(); // Zugriff auf Methode mittels ->

echo 'Farbe des Autos: ' . $auto->getFarbe() . '<br/>';

$auto->setFarbe('grün');
echo 'Farbe des Autos: ' . $auto->getFarbe();

$vw = new Auto('gelb');
$vw->setFarbe('lila');

$autos = [];
$autos[] = $vw;
$autos[] = $auto;
?>
<h1>Autos fahren</h1>
<?php


foreach ($autos as $auto) {
    $auto->fahre();
}

?>
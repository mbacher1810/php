<?php
function sayHello (){
    echo "Hallo Welt <br/>";
}


sayHello();
sayHello();

function greetPerson($name = "Fritz"){
    echo "Hallo, $name<br/>";
}

greetPerson("Jana");
greetPerson("Josef");
greetPerson("Agnesa");
greetPerson("Robin");
greetPerson(); // Wenn in einer Doku eckige Klammer stehen, so bedeutet dies, dass der Wert optional ist.

/**
 * um zu berechnen weren Mehotden/Funktionen
 * mit einem Rückgabewert benätigt
 */
function berechneBrutto($netto, $steuer = 20){
    $brutto = $netto * (1 + $steuer/100);
    return $brutto;
}

$betrag1 = 50;
$steuer1 = 10;
$brutto1 = berechneBrutto($betrag1, $steuer1);
echo "Netto $betrag1 + $steuer1 % = $brutto1 <br/>";

$betrag2 = 50;
$brutto2 = berechneBrutto($betrag2);
echo "Netto $betrag2 + 20 % = $brutto2 <br/>";

// 50, 100, 60, 10, 20

$beträge = [50, 100, 60, 10, 20];

for ($i = 0; $i < count($beträge); $i++)
{
    $steuersatz = rand(1,2);
    if ($steuersatz == 1){
        $steuersatz = 10;
    }
    elseif ($steuersatz == 2){
        $steuersatz = 20;
    }
    $ausgabe = berechneBrutto($beträge[$i], $steuersatz);
    echo "Netto $beträge[$i] + $steuersatz %= $ausgabe<br/>";
}

$steuersatz = 3;
switch ($steuersatz){
    case 1 :
        echo "Die Steuer beträgt 10 % <br/>";
        break;
    case 2 :
        echo "Die Steuer beträgt 20 %";
        break;
    default:
        echo "Der Steuersatz ist in diesem Beispiel nicht möglich";
}
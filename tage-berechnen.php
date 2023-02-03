<?php

$verbleibendetage = 7 - date('N');
echo("Verbleibende Wochentage: $verbleibendetage<br />");

// Ferienbeginn
// 8. Juli 2023

$tag = 1;

$vorhanden = array_key_exists('tag', $_GET);

if ($vorhanden){
    $tag = (int)$_GET['tag'];
}

/*
if (!isset($tag)){
    $tag = 8;
}
*/

// Variante 1
$ferien = mktime(
    0,
    0,
    0,
    7,
    $tag,
    2023
);
$heute = date('U'); // time()

$sec = ($ferien - $heute) / (3600 * 24);
echo "Tage bis zu den Ferien: $sec<br />";

// Variante 2
$heute2 = new DateTimeImmutable('2023-02-01');
$ferienbeginn = new DateTimeImmutable('2023-07-08');
$tagebisferien = $heute2->diff($ferienbeginn);
echo $tagebisferien->format("Tage bis zu den Ferien: %R%a <br />");

// Variante 3
$heute3 = date('z');
$ferien2 = date('z',mktime(0,0,0,7,8,2023));
$tagebisferien2 = $ferien2 - $heute3;
echo "Tage bis zu den Ferien: $tagebisferien2<br />";


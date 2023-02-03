<!doctype html>
<html>
<head>
    <title>Klassenliste :: Alternative</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-3">
<?php

// Daten werden in einem Array $school gespeichert
// pro Klasse wird ein eigenes assoziatives Array mit den Schlüsseln "name", "w" und "m" erstellt
$school = array(
    array(
        'name' => '2BHAK',
        'w' => 10,
        'm' => 5
    ),
    array(
        'name' => '3BHAK',
        'w' => 5,
        'm' => 7
    )
);


/**
 * BEGINN DER ALTERNATIVE LÖSUNG mit den Funktionen array_column und array_map
 * PHP8 wird benötigt
 */
$namesKlassen = array_column($school, 'name'); // Es wird ein Array erzeugt, das nur die "namen" beinhaltet: array(0 => 2BHAK, 1 => 3BHAK);
// mittels array_map wird für jedes Element in dem Array eine Zeichenkette (= zB "3BHAK") zurückgegeben und im Array $namesKlassenArr gespeichert
$namesKlassenArr = array_map(fn($value): string => '"' . $value . '"', $namesKlassen);
// Verbindung der Array-Elemente mit , => "2BHAK","3BHAK"
$strKlassen = join(',', $namesKlassenArr);

// vom Array $school werden nur die Felder mit w ausgelesen und schließlich werden diese mittels , verbunden
$strKlasseW = join(',', array_column($school, 'w'));

// vom Array $school werden nur die Felder mit m ausgelesen und schließlich werden diese mittels , verbunden
$strKlasseM = join(',', array_column($school, 'm'));
/**
 * ENDE DER ALTERNATIVEN LÖSUNG
 */

?>
<h1 class="text-3xl font-bold mb-6">
    Klassenauswertung :: Alternative
</h1>

<div class="h-64">
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?= $strKlassen; ?>],
            datasets: [{
                label: 'männlich',
                data: [<?= $strKlasseM; ?>],
                borderWidth: 1
            }, {
                label: 'weiblich',
                data: [<?= $strKlasseW; ?>],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
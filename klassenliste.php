<!doctype html>
<html>
<head>
    <title>Klassenliste</title>
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

    /*
     * Es werden nur die passenden "Schlüssel" ausgelesen
     */

    // leeres Array zur Erfassung der einzelnen Namen
    $klassennamen = [];
    for ($i=0; $i < count($school); $i++) {
        // $school[$i] - pro Durchgang erhält man den Zugriff auf eine bestimmte Klasse

        // mit $klassennamen[] wird zum Array $klassennamen ein Wert (= Name der Klasse) hinzufgefügt.
        $klassennamen[] = $school[$i]['name'];
    }
    // das Array $klassennamen wird als Zeichenkette dargestellt
    // "2BHAK","3BHAK"
    $strKlassen = '"' . join('","', $klassennamen) . '"';

    /*
     * analoge Vorgehensweise zu $klassennamen
     */
    $klasseW = [];
    for ($i=0; $i < count($school); $i++) {
        // $school[$i]
        $klasseW[] = $school[$i]['w'];
    }
    // $strKlasseW = '"' . join('","', $klassennamen) . '"'; // ist nicht notwendig, da die Anzahl jeweils Zahlen sind
    // und Zahlen nicht mit Anfürhungszeichen geschrieben werden
    // 10,5
    $strKlasseW = join(',', $klasseW);

    /*
     * analoge Vorgehensweise zu $klassennamen
     */
    $klasseM = [];
    for ($i=0; $i < count($school); $i++) {
        // $school[$i]
        $klasseM[] = $school[$i]['m'];
    }
    // 5,7
    $strKlasseM = join(',', $klasseM);






?>
<h1 class="text-3xl font-bold mb-6">
    Klassenauswertung
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
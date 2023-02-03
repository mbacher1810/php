<?php
/*
 * Uebung 1
 */

$name = 'Max Muster';
$pos = strpos($name, ' ');

if ($pos !== false) {
    $nachname = substr($name, $pos+1);
    $nachname = strtoupper($nachname);

    echo "Name: $name<br/>";
    echo "Nachname: $nachname<br/>";
}


/*
 * Uebung 2
 */

$zahlen = array(2,3,4,5,6);

for ($i=0;$i<count($zahlen);$i++) {
    if ($zahlen[$i] % 2 == 0) {
        echo "$zahlen[$i]<br/>";
    }
}



/*
 * Uebung 3
 */
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <canvas id="myChart"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <?php
        $year = date('Y');
        $anzahlAuswertung = 5;
        $yearto = $year - $anzahlAuswertung; // 2018

        $labels = [];

        for ($i=$yearto; $i<=$year;$i++) {
            $labels[] = $i;
        }

        $labels = join(',', $labels);
        $kursAnzahl = 4;
        ?>

        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?= $labels ?>],
                    datasets: [
                        <?php
                            for ($i=0;$i<$kursAnzahl;$i++) {

                                $zz = array();
                                for ($j=0;$j<=$anzahlAuswertung;$j++) {
                                    $zz[] = mt_rand(1,100);
                                }

                                $zz = join(',', $zz);
                                

                                echo "{ label: 'Kurs " . $i+1 ."', data: [$zz], borderWidth: 1},";
                            }
                        ?>
                    ]
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
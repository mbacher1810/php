<html>
    <head>
        <title>Schülerzahlen</title>
    </head>
    <body>

    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php
    $schuelerzahlen = [27, 23, 20, 18, 18];
    ?>

    <script>
        const ctx = document.getElementById('myChart');
        const myData = {
            labels: ['1. Jg.', '2. Jg.', '3. Jg.', '4. Jg.', '5. Jg.'],
            datasets: [{
                label: 'Schüler:innen-Zahlen',
                data: [
                    // das soll im Array stehen
                    // 27, 23, 20, 18, 18

                    <?= implode(',', $schuelerzahlen); ?>

                    <?php
                    /*
                    foreach ($schuelerzahlen as $zahl){
                        echo $zahl . ', ';
                    }
                    */
                    ?>

                    /*
                    <?=$schuelerzahlen[0];?>,
                    <?=$schuelerzahlen[1];?>,
                    <?=$schuelerzahlen[2];?>,
                    <?=$schuelerzahlen[3];?>,
                    <?=$schuelerzahlen[4];?>
                    */
                ],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        new Chart(ctx, {
            type: 'line',
            data: myData,
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


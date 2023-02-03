<?php
    $autos = [
        ['Toyota', 'Yaris'],
        ['Honda', 'Civic'],
        ['VW', 'Polo']
    ];

    // TODO: Warning
    // TODO: assoziative Arrays
    var_dump($autos);

    for ($i=0; $i < count($autos); $i++) {
        echo "Auto: $autos[$i][0] - $autos[$i][1]<br />";
    }
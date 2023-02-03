<html>
    <head>
        <title>Zeichenketten</title>
    </head>
    <body>
        <?php
        $vorname = 'Michael';
        $nachname = 'Bacher';

        // . dient zur Zeichenkettenverknüpfung
        $name = $vorname . ' ' . $nachname;

        echo "Der Name lautet: $name";

        /**
         * Arbeit mit Zeichenketten
         */
        $wetter = ' Heute schneit es. ';

        // strlen - Anzahl der Zeichen in der Zeichenkette
        $anzahl = strlen($wetter);
        echo "Anzahl: $anzahl<br />";
        // TODO: strlen in php.net suchen
        // www.php.net/strlen

        /**
         * Exkurs - Zeichen mit mehreren Bytes
         */
        $anzahlMb = mb_strlen($wetter);
        echo "Anzahl mb: $anzahlMb<br />";
        /**
         * Exkurs Ende
         */

        $wetterOhneW = trim($wetter);
        echo "Das Wetter ohne Leerzeichen/Whitespaces: $wetterOhneW<br />";
        $wetterOhneWAnzahl = strlen($wetterOhneW);
        echo "Anzahl der Zeichen: $wetterOhneWAnzahl<br />";

        $adresse = 'XYZ ';
        echo 'Die Anzahl der Buchstaben ist ' . strlen(trim($adresse)) . '<br />';

        $wetterG = strtoupper($wetterOhneW);
        echo "Wetter: $wetterG<br />";

        $wetterK = strtolower($wetterOhneW);
        echo "Wetter: $wetterK<br />";
        ?>
        <h1>Teilzeichenketten und Zeichen suchen</h1>
        <?php
        $heute = substr($wetterOhneW, 0,5);
        echo 'Heute: ' . strtolower($heute) . '<br />';

        $pos = strpos($wetterOhneW, 'H');

        /**
         * !!! WICHTIG !!!
         * strpos gibt int oder bool zurück. Mit === wird ein Vergleich inkl. Datentypüberprüfung durchgeführt!
         */
        if ($pos === false){
            echo 'Das Zeichen wurde nicht gefunden.<br />';
        }
        else {
            echo "Position: $pos<br />";
        }

        $zahl = 0;

        if ($zahl == 0) {
            echo "Zahl ist 0.<br />";
        }
        if ($zahl == false) {
            echo "Zahl ist falsch.<br />";
        }

        $zahl1 = (bool)0;
        if ($zahl === false) {
            echo 'Die Zahl ist ein Wahrheitswert.<br />';
        }

        ?>
    </body>
</html>

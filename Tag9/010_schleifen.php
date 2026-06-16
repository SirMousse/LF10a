<?php
// for-schleife
// -> benutzt man dann, wenn man weiß wie oft etwas passieren soll

// for (Start; Bedingung; Veränderung) {
//      CODE
// }

// Beispiel for-Schleife: Hund bellt

for ($i = 1; $i <= 5; $i++) {
    echo "Der Hund hat $i mal gebellt!\n";
}

// while-Schleife
// -> man weiß nicht, wie oft etwas passieren soll, JEDOCH soll die Bedingung erfüllt sein
// GEFAHR: Endlosschleife

// while (Bedingung) {
//      code
// }

// Beispiel while-Schleife: Katzenfutter

$futter = 3;

while ($futter > 0) {
    echo "Die Katze bekommt Futter!\n";
    $futter--;
}

// do-while Schleife
// -> wird mindestens einmal ausgeführt, egal ob die Bedingung stimmt oder nicht

// do {
//      code läuft zuerst
// } while (Bedingung)

// Beispiel für do-while Schleife: Affe

$affe = 0;

do {
    echo "Der Affe springt $affe!\n";
    $affe++;
} while ($affe < 3);

// foreach-Schleife
// -> wichtigste Schleife in PHP
// wird benutzt, wenn man mehrere Werte (Arrays) nacheinander durchgehen möchte

// foreach ($array as $wert) {
//      code
// }

// Unser vorgegebenes Array
$tiere = ["Hund", "Katze", "Hamster", "Löwe", "Bär", "Kuh"];

foreach ($tiere as $tier) {                // geht jedesmal durch die Liste $tiere und speichert den aktuellen Wert in $tier
    echo "Das ist ein/e $tier!\n";
}

// foreach = Schleife
// $tiere = array -> die Liste/Araay auf das wir zugreifen
// as = als
// $tier = aktuelle Wert aus der Liste (Name frei auswählbar)


// Verschachtelte Schleifen
// Man benutzt verschachtelte Schleifen, wenn man Kombinationen braucht!

// Beispiel: Hund

for ($hund = 1; $hund <= 3; $hund++){                               // zählt nur Hunde
    for ($spielzeug = 1; $spielzeug <= 6; $spielzeug++) {           // zählt nur Spielzeug
        echo "Hund $hund spielt mit dem Spielzeug $spielzeug!\n";
    }
}

// Schleifen mit if
$tiere = ["Hund", "Katze","Kuh", "Hamster", "Löwe", "Bär"];

foreach ($tiere as $tier){
    if ($tier == "Kuh"){
        echo "Gefunden Kuh Elsa!\n";
    } elseif ($tier == "Katze"){
        echo "Das ist keine Kuh, das ist eine $tier!\n";
    }
    else {
        echo "Das ist keine Kuh, das ist ein $tier!\n";
    }
}

?>
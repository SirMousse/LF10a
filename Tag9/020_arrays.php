<?php
// Indizierte Array (Numerische Array)
// -> hier werden die Elemente über Zahlen angesprochen

// Aussehen Array für uns
$tiere = ["Hund", "Katze", "Hamster", "Nilpferd"];

// Aussehen intern für PHP/ Computer:
$tiere = [
    0 => "Hund",
    1 => "Katze",
    2 => "Hamster",
    3 => "Nilpferd"
];

echo $tiere[0];        // Hund

// Automatische Indizes
// -> PHP vergibt automatisch den nächsten freien Index
$tiere[] = "Fuchs";

echo $tiere[0];
echo $tiere[1];
echo $tiere[2];
echo $tiere[3];
echo $tiere[4];

print_r($tiere);        // print_r = Ausgabe readable (lesbar)

var_dump($tiere);


// Assoziatives Array
// ...hier besteht der Schlüssel aus einem Namen statt einer Zahl

$hund = [
    "name" => "Mousse",
    "alter" => 5,
    "farbe" => "gold-schwarz"
];

// Möchte Namen ausgeben
echo $hund["name"]."\n";

// MERKE:
// Man verwendet diese Art von Arrays besonders häufig bei Benutzern, Produkten, Datenbankeinträgen und Konfigurationen

foreach ($hund as $ball => $eisblume) {
    echo "$ball $eisblume\n";
}


// Mehrdimensionale Arrays
// -> Arrays können in anderen Arrays stehen

$zoo = [
    ["Hund", "Katze"],
    ["Kuh", "Pferd"],
    ["Tiger", "Löwe"]
];

echo $zoo[2][1];            // 1. [] = gibt das Array an, welches wir ansprechen wollen -> Liste 3 ODER Array 2
                            // 2. [] = gibt den Wert im Array an, den wir haben möchten -> 2 Wert ODER Listenelement 1

foreach ($zoo as $gruppe){          // 1. Im Array Zoo alle Arrays ansprechen
    foreach ($gruppe as $tier) {    // 2. Alle angesprochenen Arrays Inhalte einzeln aufführen
        echo "$tier\n";
    }
}

$nummer = 1;

foreach ($zoo as $gruppe){   
    echo "Gehege $nummer: \n";       
    
    foreach ($gruppe as $tier) {    
        echo "$tier\n";
    }

    $nummer++;
}

// Mehrdimensionale assoziative Arrays

$personen = [
    [
        "name" => "Mousse",
        "alter" => 5
    ],
    [
        "name" => "Max",
        "alter" => 35
    ],
    [
        "name" => "Lisa",
        "alter" => 29

    ]
];

echo $personen[2]["name"];

$personen[2]["alter"] = 35;
?>
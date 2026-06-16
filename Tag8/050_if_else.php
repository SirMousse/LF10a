<?php
// if-else

$tier = "Hund";

if ($tier == "Hund") {
    echo "Das Tier bellt!\n";
} else {
    echo "Das Tier macht ein anderes Geräuch!\n";
}

// if-elseif-else

$tier = "Katze";

if ($tier == "Hund") {
    echo "Das Tier bellt!\n";
} elseif ($tier == "Katze"){
    echo "Das Tier miaut!\n";
} else {
    echo "Das Tier macht ein anderes Geräuch!\n";
}

// if-elseif-else mit Vergleichsoperatoren

$tiergewicht = 800;

if ($tiergewicht > 700) {
    echo "Die Kuh braucht eine Diät!\n";
} elseif ($tiergewicht >= 600) {
    echo "Die Kuh hat Normalgewicht!\n";
} else{
    echo "Bitte FÜTTERE die Kuh!!!!!!!!!!\n";
}

if ($tiergewicht > 800) {
    echo "Die Kuh braucht eine Diät!\n";
} elseif ($tiergewicht >= 600 && $tiergewicht <=800) {
    echo "Die Kuh hat Normalgewicht!\n";
} else{
    echo "Bitte FÜTTERE die Kuh!!!!!!!!!!\n";
}


// Mehrere Bedingungen gleichzeitig

$tier = "Hund";
$alter = 4;
$hatLeckerli = true;
$istMüde = false;


// UND -> &&
if ($tier == "Hund" && $alter >= 3 && $hatLeckerli) {
    echo "Der Hund fühlt sich erwachsen und hat einen Snack!\n";
} else {
    echo "Der Hund ist entweder zu jung oder hat hunger!\n";
}

if ($tier == "Hund" && !$istMüde){
    echo "Zoomies aktivert, renn um dein Leben!\n";
} else{
    echo "Der Dino ist müde!\n";
}

// ODER -> ||

$tier = "Krokodil";
$hatFell = false;
$istGefährlich = true;

if (($tier == "Hund" || $tier == "Katze") && !$istGefährlich){
    echo "Das Tier darf auf die Couch\n";
} else {
    echo "Das Tier sollte vielleicht nicht im Wohnzimmer wohnen!\n";
}


// Verschachtelte ifs (Nested ifs)
$tier = "Katze";
$uhrzeit = 3;
$hatEtwasVomTischGeworfen = true;

if ($tier == "Katze"){
    if ($uhrzeit >= 0 && $uhrzeit <=5) {
        if($hatEtwasVomTischGeworfen) {
            echo "Mission erfolgreich! Das Katzenkartell ist zufrieden!\n";
        } else {
            echo "Die Katze muss ihre Ausbildung wiederholen! DURCHGEFALLEN!\n";
        }
    } else {
        echo "Tagsüber wird nur geschlafen!\n";
    }
} else {
    echo "Die Hunde haben das Kartell gestürmt!\n";
}

// Verschachtelung mit elseif

$tier = "Katze";
$alter = 5;
$stimmung = "faul";
$spielzeug = true;
$spiel = "Ball";

if ($tier = "Katze") {
    
    echo "Katzen Analyse startet... \n";
    
    if ($alter < 1 ){
        echo "Das ist ein kleines Kätzchen \n";
    } else {
        
        if ($stimmung == "hungrig") {
            echo "Die Katze start dich an, als wärst du die wandelde Futterdose!\n";

        } elseif ($stimmung == "müde") {
            echo "Die Katze schläft seit 18h und ist immer noch müde!\n";

        } elseif ($stimmung == "verspielt")         {
            echo "Die Katze jagt einen unsichtbaren Geist durchs Wohnzimmer.\n";

            if ($spielzeug){
                echo "Die Katze hat den Spaß ihres Lebens.\n";

                if ($spiel == "Ball") {
                    echo "Die Katze möchte das du den Ball wirfst!\n";
                } elseif($spiel == "Maus"){
                    echo "Katze hat neues Level erreicht!\n";

                } else {
                    echo "Die katze will nicht mehr Spielen!\n";
                }


            } else{
                echo "Die Katze macht dich dafür verantwortlich!\n";
            }



        } elseif ($stimmung == "genervt") {
            echo "Die Katze plant vermutlich deine Kündigung als Dosenöffner.\n";

        } elseif ($stimmung == "neugierig") {
            echo "Die Katze untersucht eine leere Kiste wissenschaftlich.\n";

        } elseif ($stimmung == "faul") {
            echo "Die Katze bewegt sich nur, wenn Futter involviert ist.\n";

        } elseif ($stimmung == "chaotisch") {
            echo "Drei Blumentöpfe wurden bereits geopfert.\n";

        } elseif ($stimmung == "kuschelig") {
            echo "Die Katze möchte schmusen. Genieße die seltene Gelegenheit!\n";

        } elseif ($stimmung == "dramatisch") {
            echo "Die Katze tut so, als hätte sie seit drei Wochen nichts gegessen.\n";

        } elseif ($stimmung == "königlich") {
            echo "Die Katze erwartet, mit 'Eure Majestät' angesprochen zu werden.\n";

        } elseif ($stimmung == "verrückt") {
            echo "Die Katze sprintet um 3 Uhr nachts mit Lichtgeschwindigkeit durchs Haus.\n";    
    }
}
}
?>
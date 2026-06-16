<?php
// Rechenoperatoren

$a = 10;
$b = 5;

// Addieren (+)
$sum = $a + $b;
echo $sum."\n";

// Subtrahieren (-)
$dif = $a - $b;
echo $dif."\n";

// Multiplikation
$pro = $a * $b;
echo $pro."\n";

// Division
$quo = $a / $b;
echo $quo."\n";

// Rest
$rest = $a % $b;
echo $rest."\n";

// Exponent
$expo = $a ** $b;
echo $expo."\n";

// Zuweisungsoperatoren
// = -> Zuweisungsoperatore -> Wert zuweisen

// Additions- Zuweisungsoperatore
$start = 10;
$start += 7;
echo $start."\n";

// Subtraktions-Zuweisungsoperatore
$leben = 100;
$leben -= 20;           // Schaden genommen von zu trockener Theorie
echo $leben."\n";

// Modulo-Zuweisung
$buchseiten = 250;
$buchseiten %= 27;
echo $buchseiten."\n";

// Zuweisungsoperatoren funktionieren auch mit /= | *= / **= und .=
// Verkettungs- Zuweisungsoperator
$text = "Willkommen in der schönen Welt, von PHP!";
echo $text."\n";
$text .= " Hier ein Taschentuch!";
echo $text."\n";

// Vergleichsoperatoren
$x = 6;
$y = "6";
$z = 7;

// == -> lose Vergleich (prüft ob die Werte gleich sind)
$gleich = ($x == $y);
var_dump($gleich);          // true
$gleich = ($z == $y);
var_dump($gleich);          // false

// === -> strenge Vergleich (prüft Wert UND Typ )
$identisch = ($x === $y);
var_dump($identisch);       // false
$identisch = ($z === $y);
var_dump($identisch);       // false

// != -> nicht wahr/ nicht richtig
$ungleich = ($x != $y);
var_dump($ungleich);        // false
$ungleich = ($z != $y);
var_dump($ungleich);        // true
// strenges ist nicht wahr!
$ungleich = ($x !== $y);
var_dump($ungleich);        // true

// < = Kleiner als 
$kleiner = $y < $z;
var_dump($kleiner);         // true

// > = Größer als
$groesser = $x > $z;
var_dump($groesser);        // false

// <= -> Kleiner oder gleich
$small = $z <= $y;
var_dump($small);           // false

// >= -> Größer oder gleich
$big = $z >= $y;
var_dump($big);             // true

// Logische Operatoren
$eingeloggt = true;
$istAdmin = false;

// && = UND
$darfSehen = ($eingeloggt && $istAdmin);
var_dump($darfSehen);                       // true && false = false -> alle Aussagen müssen gleich sein!

// || = ODER
$irgendwoRein = ($eingeloggt || $istAdmin);
var_dump($irgendwoRein);                    // true || false = true -> eine Aussage muss nur stimmen

// ! = NICHT
$nichtEingeloggt = !$eingeloggt;
var_dump($nichtEingeloggt);                 // false

$nichtEingeloggt = (!$eingeloggt || !$istAdmin);
var_dump($nichtEingeloggt);
?>
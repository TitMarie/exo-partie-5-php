<?php

// exercice 1

$month = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

// exercice 2 

echo $month[2];
echo "<br>";

// exercice 3

echo $month[5];
echo "<br>";

// exercice 4

$position = array_search("aout", $month);
echo $month[$position] = "août";
echo "<br>";

// exercice 5

$departements = [
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas de Calais",
    "80" => "Somme" 
];

// exercice 6

echo $departements["59"];
echo "<br>";

// exercice 7

$departements["51"] = "Marne";

// exercice 8

foreach($month as $element) {
    echo $element . "<br>";
}

// exercice 9

foreach($departements as $element) {
    echo $element . "<br>";
}

// exercice 10  

foreach($departements as $cle => $element) {
    echo "Le département " .$element. " a le numéro " .$cle. "<br>";
}



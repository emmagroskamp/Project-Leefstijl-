<!-- Author: Emma Groskamp, Klas: JLSD1B -->
<?php
$leeftijd = $_POST["leeftijd"];
$lengte = $_POST["lengtecm"];
$gewicht = $_POST["gewichtbmr"];
$geslacht = $_POST["geslacht"];
//Maakt variabelen aan met de waarde van het formulier BMR.

if($geslacht == "vrouw")
{
    $totaal = (((9.5634 *$gewicht) + (1.8496 * $lengte)- (4.6756 *$leeftijd)) + 655.0955);
    $afgerond = round($totaal, 2);
    echo "BMR-waarde (vrouw) is: {$afgerond} kcal per dag";
    //als de radiobutton vrouw wordt aangeklikt wordt de BMR voor een vrouw uitgerekend.
}

else if ($geslacht == "man")
{
    $totaal = (((13.7516 * $gewicht) + (5.0033 * $lengte)-(6.755 *$leeftijd)) + 66.473);
    $afgerond = round($totaal, 2);
    echo "BMR-waarde (man) is: {$afgerond} kcal per dag";
    //als de radiobutton man wordt aangeklikt wordt de BMR voor een man uitgerekend. 
}


?>

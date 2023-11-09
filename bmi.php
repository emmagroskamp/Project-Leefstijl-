<!-- Author: Emma Groskamp, Klas: JLSD1B -->
<?php
    $lengte = $_POST["lengte"];
    $gewicht = $_POST["gewicht"];

    $totaal = $gewicht / ($lengte * $lengte);
    $afgerond = round($totaal, 2);
    echo "Je BMI-waarde is: {$afgerond}";
    /* Wanneer de button van BMI is aangeklikt wordt de variabele lengte vermenigvuldigd met lengte, daarna wordt gewicht door de uitkomst
    van lengte gedeeld. de uitkomst wordt naar een nieuw scherm geprint. */
?>

<html>
<!--Author: Emma Groskamp, klas: JLSD1B -->
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="leefstijl.css">
</head>
<body>
<div class="container-fluid">
    <h1 style="text-align: center;">Leefstijl</h1>
 <!-- container die zich aanpast aan de grootte van je scherm -->
<div class="row">
    <div class="col-6">
    <div class="BMI">
        <br><br>
        <div class="bmi-tekst">
        <h4>BMI</h4><br>
        Bereken snel of je een gezond gewicht hebt.<br>
        <form name="formBMI" method="post" action="bmi.php">
            Lengte (in meter)<br>
            <input type="text" name="lengte" value=""><br>
            Gewicht (in kg)<br>
            <input type="text" name="gewicht" value=""><br>
            <input type="submit" name="berekenbmi" value="Bereken je BMI"><br>
        </form>
        <!-- Formulier voor het berekenen van gebruikers BMI-waarde. -->

        <br></div>
    <img class="weegschaal" src="img/bmi-weegschaal.jpg" alt="BMI image"><br><br>
    <!-- image voor onder het formulier van BMI -->

    </div>
    </div>
    <div class="col-sm"></div>
    <div class="col-5">
    <div class="BMR">
        <br><br>
        <div class="bmr-tekst">
       <h4>BMR</h4><br>
       Bereken snel je energieverbruik.<br>
       <form name="formBMR" method="post" action="bmr.php">
           Leeftijd (in jaar)<br>
           <input type="text" name="leeftijd" value=""><br>
           Lengte (in cm)<br>
           <input type="text" name="lengtecm" value=""><br>
           Gewicht (in kg)<br>
           <input type="text" name="gewichtbmr" value=""><br>
           <br>
           Geslacht:
           <input type="radio" name="geslacht" value="man">
           Man
           <input type="radio" name="geslacht" value="vrouw">
           Vrouw<br>
           <input type="submit" name="berekenbmr" value="Bereken je BMR"><br><br>
       </form>
       <!-- formulier voor het berekenen van de gebruikers BMR-waarde.-->

       <img src="img/fruit.jpg" alt="foto van fruit" class="fruit"><br><br>
       <!-- image voor onder het formulier van BMR -->

    </div>
    </div>
    </div>
</div>
</div>
<footer>
    <div class="footer">
    ©️ Leefstijl - 2022
    </div>
</footer>
</body>
</html>
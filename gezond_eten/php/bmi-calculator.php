<!DOCTYPE html>
<html>

<head>
    <title>Gezond eten</title>
    <link rel="stylesheet" type="text/css" href="/gezond_eten/css/style.css">
</head>

<body>

    <header>
        <nav>
            <a href="/gezond_eten/html/index.html">VOORPAGINA</a>
            <a href="/gezond_eten/php/bmi-calculator.php" class="mnav">BMI CALCULATOR</a>
            <a href="/gezond_eten/html/recepten.html">GEZONDE RECEPTEN</a>
        </nav>
    </header>
    <main>
        <h1>BMI Calculator</h1>
    
        <div class="bmicalculator">
        
        <form method="post">
        <h2> Bereken je BMI<h2> 
            <label for="weight">Gewicht(kg):</label>
            <input type="text" id="vak" name="weight" required>
            <br>
            <label for="height">Lengte(m):</label>
            <input type="text" id="vak" name="height" required>
            <br>
            <label for="age">Age:</label>
            <input type="text" id="vak" name="age" required>
            <br>
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
            <br>
            <div class="button">
            <input type="submit" name="bmi" value="Bereken BMI"><br>
            </div>
        </form>
        </div>

        <div class="bmi-result">
     
             <?php
             $show_table = false;
             if (isset($_POST['bmi'])) {
                 $weight = $_POST['weight'];
                 $height = $_POST['height'] / 100;
                 $bmi = $weight / ($height * $height);
                 $bmi = round($bmi, 1);
                 $gender = $_POST['gender'];
                 echo "Je BMI is: $bmi";
                 $show_table = true;
             }
                ?>
             </div>

             <table class="table">
             
             <?php if ($show_table) : ?>
        <tbody>
            <tr>
                <td style="text-align: left;">BMI grenzen  </td>
                <td style="text-align: left;"> Betekenis</td>
            </tr>
            <tr <?php if ($bmi < 18.5) {
                echo "class='slecht'";
                } ?>>
                <td style="text-align: left;">
                <p>Lager dan 18,5</p>
                </td>
                <td style="text-align: left;">
                <p> Ondergewicht</p>
                </td>
            </tr>
            <tr <?php if ($bmi >= 18.5 && $bmi < 25) {
                echo "class='goed'";
                } ?>>
                <td style="text-align: left;">
                <p> Vanaf 18,5 tot 25</p>
                </td>
                <td style="text-align: left;">
                <p> Gezond gewicht</p>
                </td>
            </tr>
            <tr <?php if ($bmi >= 25 && $bmi < 30) {
                echo "class='slecht'";
                } ?>>
                <td style="text-align: left;">
                <p>Vanaf 25 tot 30</p>
                </td>
                <td style="text-align: left;">
                <p> Overgewicht</p>
                </td>
            </tr>
            <tr <?php if ($bmi >= 30) {
                echo "class='slecht'";
                } ?>>
                <td style="text-align: left;">
                <p>30 en hoger</p>
                </td>
                <td style="text-align: left;">
                <p> Ernstig overgewicht</p>
                </td>
            </tr>
        </tbody>
    </table>
             <?php endif; ?>

     

<div class="footer2">
<footer>

<p>© Chadi Hashem  &nbsp &nbsp &nbsp &nbspVolg ons op <a href="#"> Twitter</a>&nbsp en <a href="#">&nbspFacebook</a>
   &nbsp &nbsp  &nbsp Neem contact met ons op via <a href="mailto:gezondeeten@ministerie.nl">gezondeeten@ministerie.nl</a></p>
</footer>
</div>
</body>

</html>

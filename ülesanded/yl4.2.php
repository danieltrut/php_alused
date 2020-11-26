<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
/*Ülesanne 4.2 Daniil Tr 24.11.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vanus1 = test_input($_POST["vanus1"]);
    $vanus2 = test_input($_POST["vanus2"]);


}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Vanus1: <input type="number" name="vanus1"> <br>

        Vanus2: <input type="number" name="vanus2"><br>


        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

    if (empty(test_input($_POST["vanus1"]))) {
        echo "<h2>Lahtrid on tühjad</h2>";
    }
    else if ($vanus1>$vanus2)  {
        echo "<h2>Esimene inimene on vanem</h2>";
    }
    else if ($vanus1<$vanus2) {
        echo "<h2>Teine inimene on vanem</h2>";
    }
    else if ($vanus1==$vanus2) {
        echo "<h2>Inimeste vanused on võrdsed</h2>";
    }

    else  {
        echo "<h2>Error</h2>";
    }
    ?>


</div>


</body>
</html>


<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
/*Ülesanne 4.3 Daniil Tr 24.11.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $laius = test_input($_POST["laius"]);
    $pikkus = test_input($_POST["pikkus"]);


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
        Laius: <input type="number" name="laius"> <br>

        Pikkus: <input type="number" name="pikkus"><br>


        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

    if ((empty($_POST["laius"])) or (empty($_POST["pikkus"]))) {
        echo "<h2>Lahtrid on tühjad</h2>";
    }
    else if ($_POST["laius"]> ($_POST["pikkus"]))  {
        echo "<h2>See on Ristkülik</h2>";
    }
    else if ($_POST["laius"] < ($_POST["pikkus"])) {
        echo "<h2>See on Ristkülik</h2>";
    }
    else if ($_POST["laius"] == ($_POST["pikkus"])) {
        echo "<h2>See on Ruut</h2>";
    }

    else  {
        echo "<h2>Kirjuta midagi</h2>";
    }
    ?>


</div>


</body>
</html>
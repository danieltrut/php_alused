

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
/*Ülesanne 4.4 Juubel Daniil Tr 24.11.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $syn = test_input($_POST["synniaasta"]);
    $year = test_input($_POST["aasta"]);



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
        Sünniaasta: <input type="number" name="synniaasta"> <br>
        Praegune aasta: <input type="number" name="aasta"> <br>



        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    $juubel = $year - $syn;

    if ((empty($_POST["synniaasta"])) or (empty($_POST["aasta"]))) {
        echo "<h2>Lahtrid on tühjad</h2>";
    }
    else if ($juubel == 25)  {
        echo "<h2>See on juubeli aasta</h2>";
    }

    else  {
        echo "<h2>See ei ole juubeli aasta</h2>";
    }
    ?>


</div>


</body>
</html>
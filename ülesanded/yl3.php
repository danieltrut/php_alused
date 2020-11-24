<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
/*Ülesanne 3 Trapetsi pindala Daniil Tr 24.11.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $korgus = test_input($_POST["korgus"]);
    $pikkus1 = test_input($_POST["pikkus1"]);
    $pikkus2 = test_input($_POST["pikkus2"]);

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Sisesta trapetsi kõrgus pikkus1 ja pikkus 2</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Trapetsi Kõrgus: <input type="number" name="korgus">
    <br><br>
    Trapetsi pikkus 1: <input type="number" name="pikkus1">
    <br><br>
    Trapetsi pikkus 2: <input type="number" name="pikkus2">


    <input type="submit" name="submit" value="Submit">
</form>

<?php
$pindala = (($pikkus1+$pikkus2)/2)*$korgus;
echo "<h2>Trapetsi pindala:</h2>";
echo "<p style='color: red; font-size: 28px;'>$pindala</p>";


?>

</body>
</html>
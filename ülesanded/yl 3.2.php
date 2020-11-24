<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
/*Ülesanne 3 Trapetsi pindala Daniil Tr 24.11.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $korgus = test_input($_POST["korgus"]);


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
    Rombi külg: <input type="number" name="korgus">
    <br><br>


    <input type="submit" name="submit" value="Submit">
</form>

<?php
$umbermiit = 4*$korgus;
echo "<h2>Rombi ümbermõõt:</h2>";
echo "<p style='color: red; font-size: 28px;'>$umbermiit</p>";


?>

</body>
</html>
<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

</html>
<?php
/*Ülesanne 7 Daniil Tr 28.12.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arv1 = test_input($_POST["arv1"]);
    $arv2 = test_input($_POST["arv2"]);


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
        Esimene täisarv: <input type="number" name="arv1"> <br>

        Teine täisarv: <input type="number" name="arv2"><br>


        <input type="submit" name="submit" value="Submit">
    </form>
<?php
$x = 1;
for ($x = $arv1; $x <= $arv2; $x++) {
    echo "$x <br>";
}

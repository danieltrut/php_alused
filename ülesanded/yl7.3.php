<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

</html>
<?php
/*Ülesanne 7 Daniil Tr 30.12.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arv1 = test_input($_POST["arv1"]);



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
       Isikukood: <input type="" name="arv1"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>
<?php
$isikukood = strlen($arv1);
echo 'Pikkus: ' . $isikukood;

if ($isikukood > 11) {
    echo '<br>'."Isikukood on vale - liiga pikk";
}
elseif ($isikukood < 11) {
    echo '<br>'."Isikukood on vale - liiga lühike";
}

$filename = ($_POST["arv1"]);

$rest = substr( $filename, 0, 1);

echo '<br>'.$rest;



if ($rest == 3) {
        echo '<br>'."Sugu: Mees";
}
    elseif ($rest == 4) {
        echo '<br>'."Sugu: Naine";
    }

?>

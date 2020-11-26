
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
/*Ülesanne 4.5 Hinne Daniil Tr 24.11.2020*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arv = test_input($_POST["punktid"]);


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
        Sisesta punktid: <input type="number" max="10" name="punktid"> <br>



        <input type="submit" name="Edasta" value="Submit">
    </form>
    <?php

    switch($arv){

        case (empty($_POST["punktid"])): echo 'Lahter on tühi';
            break;
        case ($arv < 6): echo 'Kasin';
            break;
        case ($arv > 5 and $arv < 10): echo 'Tehtud';
            break;
        case ($arv == 10): echo 'Super!!!';
            break;
        default: echo 'Sisesta';
    }
    ?>


</div>


</body>
</html>
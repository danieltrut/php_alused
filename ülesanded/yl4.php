<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
/*Ülesanne 4 Daniil Tr 24.11.2020*/

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
        $jagamine = $arv1 / $arv2;


        if (empty(test_input($_POST["arv1"]))) {
            echo 'Esimene lahter on tühi';
        }
        else if (empty(test_input($_POST["arv2"]))) {
            echo 'Teine lahter on tühi';

        }
        else {
            echo $jagamine;
        }
        ?>

       
    </div>


</body>
</html>
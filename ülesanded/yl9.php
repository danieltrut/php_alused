<?php
/*Ülesanne 9 Daniil Tr 30.12.2020*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = test_input($_POST["nimi"]);



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
        Nimi <input type="" name="nimi"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>
<?php
echo "Tere ".ucfirst(strtolower($nimi));
?>

<br>

<?php
$arr1 = str_split($nimi);
print_r($arr1);
?>

<br>

<?php
foreach ($arr1 as $letters) {
   echo strtoupper($letters).'.';
}
?>

<br>
<?php
        $otsi = array('hren', 'loll', 'kurwa');
        $asenda = array('***', '***', '***');
        echo str_replace($otsi, $asenda, $nimi);
?>

<br>

<?php
$email = "@hkhk.edu.ee";

    $otsi2 = array('ja', ' ');
    $asenda2 = array('.','');
    echo strtolower(str_replace($otsi2, $asenda2, $nimi).$email);
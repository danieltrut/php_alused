<?php
/*Ülesanne 6 Daniil Tr 08.12.2020*/

	$arv = 1;
	while($arv <=100){
        echo $arv;
        $arv++;

    }
?>
<br>
<br>


<?php
$i = 1;
for ($i = 10; $i <= 100; $i++) {
    if( $i % 10 === 0 ) {
        echo $i . '<br>';
    }
}

?>
<br><br>
<?php
for($nr=1;$nr<=10;$nr++){
    echo $nr.'.<br>';
}
?>
<br>
<?php
for($rida=1; $rida<=10; $rida++){
echo '*<br>';
}
?>
<br>
<?php
for($rida=1; $rida<=1; $rida++){
for($veerg=1; $veerg<=5; $veerg++){
echo '*';
}
echo '<br>';
}
?>
<br>
<?php
for($rida=1; $rida<=1; $rida++){
    for($veerg=1; $veerg<=5; $veerg++){
        echo '*';
    }
    echo '<br>';
}
?>

<br>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pikkus = test_input($_POST["pikkus"]);
    $korgus = test_input($_POST["korgus"]);


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<br>
<h2>Sisesta ruudu kõrgus ja pikkus </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Ruut pikkus: <input type="number" name="pikkus">
    Ruut korgus: <input type="number" name="korgus">
    <br><br>


    <input type="submit" name="submit" value="Submit">
</form>

<?php
$pikkus2 = $pikkus - 1;
$korgus2 = $korgus - 1;
$rida = 0;
$veerg = 0;
for ($rida =0; $rida <= $korgus2; $rida++) {
    for ($veerg =0; $veerg <= $pikkus2; $veerg++) {
        echo '* ';
    }
    echo '<br>';
}


?>

<br>
<?php
for($nr=10;$nr>=1;$nr--){
    echo $nr.'<br>';
}
?>
<br><br>
<?php
$i = 1;
for ($i = 1; $i <= 100; $i++) {
    if( $i % 3 === 0 ) {
        echo $i . '<br>';
    }
}

?>
    <br><br>
<?php
$w = array('mari', 'kati', 'Diana', 'miku', 'uku');
$m = array('Toomas', 'Henrik', 'Vasya', 'Toto', 'Jimbo');

foreach($w as $ws){
    foreach($m as $ms){
        if( $ms == [''] ){
        echo $ms.$ws.'<br>';
    }
        if( $ws == $ws ){
            echo $ms.$ws.'<br>';
        }

}
}

?>



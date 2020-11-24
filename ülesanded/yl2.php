<body style="font-size: 22px;">
<?php
/*Ülesanne 2 Daniil Tr 24.11.2020*/
//aritmeetilised operaatorid
    $x = 8;
    $y = 2;
    $liitm = $x + $y;
    $lahut = $x - $y;
    $korru = $x * $y;
    $jagam = $x / $y;
    $jaak = $x % $y;
    echo "Vastused: $liitm, $lahut, $korru, $jagam, $jaak!<br>";
?>
<div style="height: 50px;"></div>
<?php
//teisendamine
    $i = 726;
    $j = $i / 10;
    $k = $i / 1000;
    printf('Vastus meetrid:' .$k.'m' );
    echo "<br>";
    printf('Vastus sentimeetrit:' .$j.'sm');
?>
    <div style="height: 50px;"></div>
<?php

//ümbermõõt ja pindala
    $uks = 8;
    $kaks = 2;
    $kolm = 6;
    $umbermuut = $uks + $kaks + $kolm;
    $pindala = ($kaks * $kolm)/2;
    echo "Ümbermõõt: $umbermuut!<br>";
    echo "Pindala: $pindala!<br>";

?>
</body>

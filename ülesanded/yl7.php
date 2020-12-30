<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

</html>
<div class="container">
<?php
/*Ülesanne 7 Daniil Tr 09.12.2020*/


function tervita($pnimi = "päiksekesekene!")
{
    return "Tere $pnimi";
}

echo tervita();
echo "<br>";
echo tervita( "Õpetaja");

?>

<br><br>

</div>




<?php
function form(){

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
echo '<div class="container">
<h2>Liitu uudiskirjaga </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
    Liidu: <input  name="pikkus">
    <br><br>


    <input type="submit" name="submit" value="Submit">
</form>
</div>';
}
?>
<br><br>
<?php
echo form();
?>
<br><br>
<?php
$input_str = "All Is Well";
function vaiketnimi($input_str){



    return $result_str = strtolower($input_str);
}

'<div class="container">';
echo vaiketnimi($input_str);
'</div>';
?>
<br><br>
<?php

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

// Output: iNCHNGzByPjhApvn7XBD
echo generate_string($permitted_chars, 7);
?>


<br><br>


<?php
$eesnimi = 'Artur';
$perenimi = "Aleksejev";
$täisnimi = $eesnimi.' '.$perenimi;
$vanus = 19;
$kaal = 65;
$sugu = 'ei tea';

switch ($sugu) {
    case 'mees':
        echo '<p style="color: blue">';
        break;
    case 'naine':
        echo '<p style="color: red">';
        break;
    default:
        echo '<p style="color: green">';
        break;
}
//var_dump($eesnimi); // muutuja sisu test vaatamine
echo 'Mina olen '.$täisnimi.'!<br>';
echo 'Minu vanus: '.$vanus.'<br>';
echo 'Minu kaal: '.$kaal.'<br>';
?>
<?php
$eesnimi = 'Artur';
$perenimi = "Aleksejev";
$täisnimi = $eesnimi.' '.$perenimi;
$vanus = 19;
$kaal = 65;
$sugu = 'mees';

if($sugu == 'mees') {
    echo '<p style="color: blue;">';
}   else {
    echo '<p style="color: red;">';
}
//var_dump($eesnimi); // muutuja sisu test vaatamine
echo 'Mina olen '.$täisnimi.'!<br>';
echo 'Minu vanus: '.$vanus.'<br>';
echo 'Minu kaal: '.$kaal.'<br>';
?>
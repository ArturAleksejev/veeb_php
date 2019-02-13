<?php
// juhusliku täisarvu genereerime
$arv = rand(0, 100);
// arvutame jääk 2-ga jagamisel
$jaak = $arv % 2;
echo $arv.' - ';
if ($jaak == 0) {
    echo 'paaris';
}   else {
    echo 'paaritu';
}
?>
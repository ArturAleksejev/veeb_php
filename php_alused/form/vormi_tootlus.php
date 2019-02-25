<?php
//$nimi = $_GET['nimi'];
//$parool = $_GET['parool'];
extract($_GET);

if(strlen($nimi) == 0 or strlen($parool) == 0) {
    header('Location:index.html');
}  else {
    echo 'Tere '.$nimi.'!<br>';
    echo 'Sinu parool on'.$parool;
}


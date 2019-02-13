<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<?php
echo '<div id="punane"></div>';
echo '<div id="kollane"></div>';
echo '<div id="roheline"></div>';
//aritmeetilised operaatorid
$x = 20;
$y = 2;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;
echo "Vastused: $liitm, $lahut, $korru, $jagam, $jaak";
?>
    </body>
</html>

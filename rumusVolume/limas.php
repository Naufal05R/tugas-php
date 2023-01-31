<?php

function volume_limas($alas, $tinggi) {
    return (1/3) * pow($alas, 2) * $tinggi;
}

function luas_permukaan_limas($alas, $tinggi, $sisi) {
    return $alas * $sisi + (3/2) * pow($sisi, 2);
}

$alas = floatval(readline("Masukkan alas limas: "));
$tinggi = floatval(readline("Masukkan tinggi limas: "));
$sisi = floatval(readline("Masukkan sisi limas: "));
$vol = volume_limas($alas, $tinggi);
$luas = luas_permukaan_limas($alas, $tinggi, $sisi);

echo "Volume limas: " . $vol . "\n";
echo "Luas permukaan limas: " . $luas . "\n";

?>

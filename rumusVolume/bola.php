<?php

function volume_bola($r) {
    return (4/3) * pi() * pow($r, 3);
}

function luas_permukaan_bola($r) {
    return 4 * pi() * pow($r, 2);
}

$jari_jari = floatval(readline("Masukkan jari-jari bola: "));
$vol = volume_bola($jari_jari);
$luas = luas_permukaan_bola($jari_jari);

echo "Volume bola: " . $vol . "\n";
echo "Luas permukaan bola: " . $luas . "\n";

?>

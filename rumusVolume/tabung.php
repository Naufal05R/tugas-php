<?php

function volume_tabung($jari_jari, $tinggi) {
    return pi() * pow($jari_jari, 2) * $tinggi;
}

function luas_permukaan_tabung($jari_jari, $tinggi) {
    return 2 * pi() * $jari_jari * ($tinggi + $jari_jari);
}

$jari_jari = floatval(readline("Masukkan jari-jari tabung: "));
$tinggi = floatval(readline("Masukkan tinggi tabung: "));
$vol = volume_tabung($jari_jari, $tinggi);
$luas = luas_permukaan_tabung($jari_jari, $tinggi);

echo "Volume tabung: " . $vol . "\n";
echo "Luas permukaan tabung: " . $luas . "\n";

?>

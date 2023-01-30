<?php
  // fungsi untuk menghitung volume bola
  function volume_bola($r) {
    return (4/3) * pi() * pow($r, 3);
  }
  
  // fungsi untuk menghitung luas permukaan bola
  function luas_permukaan_bola($r) {
    return 4 * pi() * pow($r, 2);
  }
  
  // contoh penggunaan
  $jari_jari = 5;
  echo "Volume bola dengan jari-jari " . $jari_jari . " adalah: " . volume_bola($jari_jari) . "\n";
  echo "Luas permukaan bola dengan jari-jari " . $jari_jari . " adalah: " . luas_permukaan_bola($jari_jari);
?>

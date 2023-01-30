<?php
  // fungsi untuk menghitung volume tabung
  function volume_tabung($r, $t) {
    return pi() * pow($r, 2) * $t;
  }
  
  // fungsi untuk menghitung luas permukaan tabung
  function luas_permukaan_tabung($r, $t) {
    return 2 * pi() * $r * ($r + $t);
  }
  
  // contoh penggunaan
  $jari_jari = 5;
  $tinggi = 7;
  echo "Volume tabung dengan jari-jari " . $jari_jari . " dan tinggi " . $tinggi . " adalah: " . volume_tabung($jari_jari, $tinggi) . "\n";
  echo "Luas permukaan tabung dengan jari-jari " . $jari_jari . " dan tinggi " . $tinggi . " adalah: " . luas_permukaan_tabung($jari_jari, $tinggi);
?>

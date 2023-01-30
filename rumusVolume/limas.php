<?php
  // fungsi untuk menghitung volume limas segi enam
  function volume_limas_segi_enam($a, $t) {
    return (pow($a,2)*$t)/3;
  }
  
  // fungsi untuk menghitung luas permukaan limas segi enam
  function luas_permukaan_limas_segi_enam($a, $t) {
    return (pow($a,2)+(2*$a*$t))*2;
  }
  
  // contoh penggunaan
  $a = 5;
  $t = 7;
  echo "Volume limas segi enam dengan alas " . $a . " dan tinggi " . $t . " adalah: " . volume_limas_segi_enam($a, $t) . "\n";
  echo "Luas permukaan limas segi enam dengan alas " . $a . " dan tinggi " . $t . " adalah: " . luas_permukaan_limas_segi_enam($a, $t);
?>

<?php
  function faktorial($angka) {
    $hasil = 1;
    for ($i = 1; $i <= $angka; $i++) {
      $hasil *= $i;
    }
    return $hasil;
  }
  
  $angka = 4;
  echo "Faktorial dari " . $angka . " adalah " . faktorial($angka);

  echo "\n\n";

  $angka = 3;
  echo "Faktorial dari " . $angka . " adalah " . faktorial($angka);
?>

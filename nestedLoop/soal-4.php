<?php

$angka = intval(readline("Masukkan angka: "));
$faktorial = 1;

for ($i = 1; $i <= $angka; $i++) {
    $faktorial *= $i;
}

echo "Faktorial dari $angka adalah $faktorial";

?>

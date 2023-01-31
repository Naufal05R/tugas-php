<?php

$nilai = intval(readline("Masukkan nilai: "));

if ($nilai < 0) {
    echo "Nilai anda tidak terdefinisi (undefined)";
} elseif ($nilai < 60) {
    echo "Nilai anda kurang, harus remedial (e)";
} elseif ($nilai < 70) {
    echo "Nilai anda cukup (d)";
} elseif ($nilai < 80) {
    echo "Nilai anda bagus (c)";
} elseif ($nilai < 90) {
    echo "Nilai anda baguss (b)";
} elseif ($nilai <= 100) {
    echo "Nilai anda sangat bagus (a)";
} else {
    echo "Nilai anda tidak terdefinisi (undefined)";
}

?>

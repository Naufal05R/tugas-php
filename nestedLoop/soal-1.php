<?php

$baris = intval(readline("Masukkan jumlah baris: "));

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

?>

<?php

$baris = intval(readline("Masukkan jumlah baris: "));

for ($i = $baris; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

?>

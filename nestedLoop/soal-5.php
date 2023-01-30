<?php
  function cek_nilai($nilai) {
    if ($nilai < 0) {
      return "tidak terdefinisi - code nilai: undefined";
    } elseif ($nilai < 60) {
      return "nilai anda kurang, harus remedial - code nilai: e";
    } elseif ($nilai < 70) {
      return "nilai anda cukup - code nilai: d";
    } elseif ($nilai < 80) {
      return "nilai anda bagus - code nilai: c";
    } elseif ($nilai < 90) {
      return "nilai anda bagus - code nilai: b";
    } elseif ($nilai <= 100) { //Note: terdapat Bug pada tugas yang diberikan sehingga saya memperbaiki langsung pada codenya
      return "nilai anda sangat bagus - code nilai: a";
    } elseif ($nilai > 100) {
      return "tidak terdefinisi - code nilai: undefined";
    }
  }
  
  $nilai = -1;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";

  $nilai = 59;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";
  
  $nilai = 69;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";
  
  $nilai = 79;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";
  
  $nilai = 89;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";
  
  $nilai = 99;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";
  
  $nilai = 100;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";
  
  $nilai = 101;
  echo "Nilai Anda : " . cek_nilai($nilai) . "\n\n";
?>

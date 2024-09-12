<?php

function cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar) {
  $hasil = array();  // Array untuk menyimpan hasil
  
  foreach ($jawabanSiswa as $key => $value) {
      // Bandingkan jawaban siswa dengan jawaban benar
      $status = ($value == $jawabanBenar[$key]) ? "Benar" : "Salah";
      
      // Tambahkan hasil ke array
      $hasil[] = array(
          "nama" => $namaSiswa, 
          "soal" => $key, 
          "jawaban" => $value, 
          "status" => $status
      );
  }
  
  return $hasil;  // Kembalikan hasil pengecekan
}


// Nama siswa
$namaSiswa = "Putri";

// Jawaban siswa
$jawabanSiswa = ["A", "B", "C", "D", "E", "A", "B", "C", "D", "A"];

// Jawaban benar
$jawabanBenar = ["A", "B", "C", "D", "E", "B", "B", "B", "A", "B"];

// Memanggil fungsi
$hasil = cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);

// Menghitung jumlah jawaban benar dan salah
$jumlahBenar = 0;
$jumlahSalah = 0;

foreach ($hasil as $item) {
    if ($item["status"] == "Benar") {
        $jumlahBenar++;
    } else {
        $jumlahSalah++;
    }
}

// Menampilkan hasil
echo "Nama: $namaSiswa<br>";
echo "Jumlah Jawaban Benar: $jumlahBenar<br>";
echo "Jumlah Jawaban Salah: $jumlahSalah<br>";
?>
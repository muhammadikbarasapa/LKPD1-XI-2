<?php
// Fungsi untuk membuat persegi dengan simbol bintang
function buatPersegi($baris, $kolom)
{
    for ($i = 0; $i < $baris; $i++) {
        for ($j = 0; $j < $kolom; $j++) { //$j untuk mengontrol jumlah karakter
            echo "* ";
        }
        echo "<br>";
    }
}

// Membuat persegi dua kali ke bawah
$baris = 4; // Jumlah baris
$kolom = 8; // Jumlah kolom

// Membuat persegi pertama
buatPersegi($baris, $kolom);

// Tambahkan pemisah (opsional)
echo "<br>";

// Membuat persegi kedua
buatPersegi($baris, $kolom);
?>
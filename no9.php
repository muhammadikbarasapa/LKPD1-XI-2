<?php

function pecahanUang($uang) {
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000];
    $arr = [];

    foreach ($pecahan as $nilai) {
        if ($uang >= $nilai) {
            $jumlah = floor($uang / $nilai);
            $uang = $nilai;
            array_push($arr, "Rp. " . number_format($nilai, 0, "", "") . " x $jumlah");
        }
    }

    foreach ($arr as $value) {
        echo "<br>$value";
    }  
}

pecahanUang(325500);
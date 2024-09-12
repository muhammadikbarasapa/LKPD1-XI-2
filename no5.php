<?php

$array1 = [80, 77, 65, 89, 55, 12, 90, 86];
$array2 = [77, 99, 55, 81, 45, 90, 98];

$combined_array = array_merge($array1, $array2); //array marge untuk menggabungkan semua array menjadi 1

$unique_array = array_unique ($combined_array); //untuk menghapus elemen duplikat combined dan meyinmpan hasilnya dalam si array unique
    

sort($unique_array);


foreach ($unique_array as $key) { // untuk menyimpan kunci si elemen uniqeu
    echo $key . "\n";
}

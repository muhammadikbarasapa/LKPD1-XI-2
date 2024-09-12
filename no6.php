<?php

$barang = [
    [
        'nama_barang' => 'Pasta GIgi',
        'harga_barang' => 180000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ]
    ];
    $price = 0;

    echo "Daftar belanjaan :  <br>";
    echo "<ol>";


    foreach ($barang as $item) {
        $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

        echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") " . number_format($subPrice, 0, ".", ".");

        $price += $subPrice;
    }

    echo "</ol>";
    echo "</br>";

    echo 'Total harga yang harus di bayar adalah <b> Rp. ' . number_format($price, 0, '.', '.') . '</b>';

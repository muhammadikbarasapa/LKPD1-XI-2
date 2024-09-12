<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pencari Simbol</title>
    </head>

    <body>
        <form method="post">
            <label for="teks">Masukkan Teks:</label>
            <input type="text" name="teks" id="teks" required>
            <input type="submit" value="Cari Simbol">
        </form>

        <?php
        //Memeriksa apakah data dikirimkan menggunakan metode POST.
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['teks'])) { //memeriksa apakah ada data yang dikirim dalam variable 
            //empty memerika variable tidak memiliki nilai
            $teks = htmlspecialchars($_POST['teks']);//digunakan untuk mengonversi karakter
            preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches); //digunakan untuk mencari pola menyimpan pencaria n pola si /[^a-zA-Z0-9\s]/

            if (!empty($matches[0])) { //memeriksa simbol yang ditemukan 
                $uniqueSymbols = array_unique($matches[0]); //menghapus duplikat array // 
                echo "Karakter simbol yang terdapat pada teks: " . implode(', ', $uniqueSymbols); //implode menggabungkan elemen dalam array menjadi string //niqueSymbols digabungkan sebuah sting dengan pisahan koma dan spasi
            } else {
                echo "Tidak terdapat simbol pada teks.";
            }
        }
        ?>
    </body>

    </html>
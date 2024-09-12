<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Bayar</title>
</head>
<body>
    <form method="post">
        <label for="totalPembelian">Total Pembelian (Rp):</label>
        <input type="number" name="totalPembelian" id="totalPembelian" required>
        
        <input type="date" name="tanggalPembelian" id="tanggalPembelian" required>
        
        <button type="submit">Hitung</button>
    </form>

    <?php
    function hitungTotalBayar($totalPembelian, $tanggalPembelian)
    {
        $hariIni = date('l', strtotime($tanggalPembelian));

        $diskon = 0;

        if ($hariIni == "Tuesday") {
            $diskon = 0.05; 
        }

        if ($totalPembelian > 100000) {
            $diskon = 0.07; 
        }

        $totalDiskon = $totalPembelian * $diskon;

        $totalBayar = $totalPembelian - $totalDiskon;

        return $totalBayar;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalPembelian = floatval($_POST['totalPembelian']);
        $tanggalPembelian = $_POST['tanggalPembelian'];

        $totalBayar = hitungTotalBayar($totalPembelian, $tanggalPembelian);

        echo "Tanggal pembelian: <strong>" . htmlspecialchars($tanggalPembelian) . "</strong><br>";
        echo "Total pembelanjaan: <strong>Rp" . number_format($totalPembelian, 0, ',', '.') . "</strong><br>";
        echo "Total yang harus dibayar: <strong>Rp" . number_format($totalBayar, 0, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>
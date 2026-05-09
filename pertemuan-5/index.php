<?php
// Data Barang (Array)
$namabarang = ["Memori", "Komputer", "Keyboard", "Handphone", "Mouse"];
$hargasatuan = [550, 500, 150, 200, 50];
$jumlahbeli = 2;

// Indeks barang yang dipilih (misal: Keyboard di index 2)
$indexTerpilih = 2;

// Perhitungan
$totalharga = $jumlahbeli * $hargasatuan[$indexTerpilih];
define("PAJAK", 0.1);
$pajak = $totalharga * PAJAK;
$totalbayar = $totalharga + $pajak;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web Emil Maulana - Pertemuan 5</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="judul">Emil Maulana</h1>
            <p>Pertemuan 5 - Implementasi Array & Variabel dalam PHP</p>
        </div>
        <nav>
            <ul>
                <li><a href="../pertemuan-1/index.html">Pertemuan 1</a></li>
                <li><a href="../pertemuan-2/index.html">Pertemuan 2</a></li>
                <li><a href="../pertemuan-3/index.html">Pertemuan 3</a></li>
                <li><a href="../pertemuan-4/index.html">Pertemuan 4</a></li>
                <li><a href="index.php">Pertemuan 5</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <main class="content">
            <!-- Box yang sesuai dengan gambar tugas -->
            <div class="task-box">
                <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
                <hr>
                <div class="task-info">
                    <p>Nama Barang: <?php echo $namabarang[$indexTerpilih]; ?></p>
                    <p>Harga Satuan: Rp <?php echo number_format($hargasatuan[$indexTerpilih], 0, '.', '.'); ?>.000</p>
                    <p>Jumlah Beli: <?php echo $jumlahbeli; ?></p>
                    <p>Total Harga (Sebelum Pajak): Rp <?php echo number_format($totalharga, 0, '.', '.'); ?>.000</p>
                    <p>Pajak (10%): Rp <?php echo number_format($pajak, 0, '.', '.'); ?>.000</p>
                    <p><b>Total Bayar: Rp <?php echo number_format($totalbayar, 0, '.', '.'); ?>.000</b></p>
                </div>
            </div>
        </main>

        <aside class="sidebar">
            <div class="sidebar-card">
                <h2>Penjelasan Tugas</h2>
                <div class="sidebar-content">
                    <p>Hasil di samping adalah output dari script PHP yang menggunakan <b>Array</b> untuk menyimpan data barang dan <b>Konstanta</b> untuk pajak.</p>
                </div>
                <hr>
                <h2>Navigasi Lanjutan</h2>
                <a href="../praktikum6/nilai.php" class="sidebar-link">Ke Halaman Nilai →</a>
            </div>
        </aside>
    </div>

    <footer>
        <p>&copy; 2024 <b>Emil Maulana</b>. All rights reserved. | Tugas Praktikum PBW Pertemuan 5</p>
    </footer>
</body>
</html>
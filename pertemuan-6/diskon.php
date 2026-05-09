<?php
// Inisialisasi variabel hasil
$showResult = false;
if (isset($_POST['bukt'])) {
    $showResult = true;
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $bukt = $_POST['bukt'];

    // Logika penentuan diskon berdasarkan ketentuan tugas
    if ($bukt >= 5000000 && $semester > 8) {
        $diskonPersen = 15;
        $diskon = 0.15;
    } else if ($bukt >= 5000000) {
        $diskonPersen = 10;
        $diskon = 0.10;
    } else {
        $diskonPersen = 0;
        $diskon = 0;
    }

    $bayar = $bukt - ($bukt * $diskon);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web Emil Maulana - Pertemuan 6</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="judul">Emil Maulana</h1>
            <p>Pertemuan 6 - Implementasi Percabangan PHP (Studi Kasus Diskon UKT)</p>
        </div>
        <nav>
            <ul>
                <li><a href="../pertemuan-1/index.html">Pertemuan 1</a></li>
                <li><a href="../pertemuan-2/index.html">Pertemuan 2</a></li>
                <li><a href="../pertemuan-3/index.html">Pertemuan 3</a></li>
                <li><a href="../pertemuan-4/index.html">Pertemuan 4</a></li>
                <li><a href="../pertemuan-5/index.php">Pertemuan 5</a></li>
                <li><a href="diskon.php">Pertemuan 6</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <main class="content">
            <div class="form-card">
                <h2>Input Data Pembayaran</h2>
                <p>Silakan masukkan data mahasiswa untuk menghitung diskon UKT secara otomatis.</p>
                <form method="post">
                    <div class="form-group">
                        <label for="npm">NPM :</label>
                        <input type="text" name="npm" id="npm" placeholder="Contoh: 12345xxxx" required value="<?php echo isset($npm) ? $npm : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA :</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap" required value="<?php echo isset($nama) ? $nama : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="prodi">PRODI :</label>
                        <input type="text" name="prodi" id="prodi" placeholder="Contoh: SAIN DATA" required value="<?php echo isset($prodi) ? $prodi : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="semester">SEMESTER :</label>
                        <input type="number" name="semester" id="semester" placeholder="Masukkan semester saat ini" required value="<?php echo isset($semester) ? $semester : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="bukt">BIAYA UKT (Rp) :</label>
                        <input type="number" name="bukt" id="bukt" placeholder="Contoh: 5900000" required value="<?php echo isset($bukt) ? $bukt : ''; ?>">
                    </div>

                    <input type="submit" value="Hitung Pembayaran" class="btn">
                </form>

                <?php if ($showResult): ?>
                    <!-- Luaran yang diharuskan (Sesuai Gambar Tugas) -->
                    <div class="task-box">
                        <h2>Luaran yang diharuskan</h2>
                        <hr>
                        <div class="task-info">
                            <p>NPM : <?php echo $npm; ?></p>
                            <p>NAMA : <?php echo strtoupper($nama); ?></p>
                            <p>PRODI : <?php echo strtoupper($prodi); ?></p>
                            <p>SEMESTER : <?php echo $semester; ?></p>
                            <p>BIAYA UKT : Rp. <?php echo number_format($bukt, 0, ',', '.'); ?>,-</p>
                            <p>DISKON : <?php echo $diskonPersen; ?>% (otomatis ditentukan oleh if)</p>
                            <p><b>YANG HARUS DIBAYAR : Rp. <?php echo number_format($bayar, 0, ',', '.'); ?>,-</b> (otomatis ditentukan oleh if)</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </main>

        <aside class="sidebar">
            <div class="sidebar-card">
                <h2>Ketentuan Diskon</h2>
                <div class="sidebar-content">
                    <ul style="list-style-type: lower-alpha; padding-left: 20px; font-size: 0.9rem;">
                        <li>Input data mahasiswa (NPM, Nama, Prodi, Semester, Biaya UKT).</li>
                        <li>UKT >= Rp. 5.000.000 -> <b>Diskon 10%</b>.</li>
                        <li>UKT >= Rp. 5.000.000 & Semester > 8 -> <b>Diskon 15%</b>.</li>
                    </ul>
                </div>
                <hr>
                <h2>Navigasi</h2>
                <p>Gunakan menu di atas untuk berpindah antar tugas praktikum.</p>
            </div>
        </aside>
    </div>

    <footer>
        <p>&copy; 2024 <b>Emil Maulana</b>. All rights reserved. | Tugas Praktikum PBW Pertemuan 6</p>
    </footer>
</body>
</html>
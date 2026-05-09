<?php
// Tentukan task mana yang aktif
$activeTask = isset($_GET['task']) ? (int)$_GET['task'] : 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web Emil Maulana - Pertemuan 7</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="judul">Emil Maulana</h1>
            <p>Pertemuan 7 - Struktur Kontrol & Perulangan PHP</p>
        </div>
        <nav>
            <ul>
                <li><a href="../pertemuan-1/index.html">Pertemuan 1</a></li>
                <li><a href="../pertemuan-2/index.html">Pertemuan 2</a></li>
                <li><a href="../pertemuan-3/index.html">Pertemuan 3</a></li>
                <li><a href="../pertemuan-4/index.html">Pertemuan 4</a></li>
                <li><a href="../pertemuan-5/index.php">Pertemuan 5</a></li>
                <li><a href="../pertemuan-6/diskon.php">Pertemuan 6</a></li>
                <li><a href="index.php" class="active">Pertemuan 7</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <main class="content">
            <div class="sub-nav">
                <a href="?task=1" class="<?php echo $activeTask == 1 ? 'active' : ''; ?>">Soal 1 (Switch)</a>
                <a href="?task=2" class="<?php echo $activeTask == 2 ? 'active' : ''; ?>">Soal 2 (For)</a>
                <a href="?task=3" class="<?php echo $activeTask == 3 ? 'active' : ''; ?>">Soal 3 (Foreach)</a>
                <a href="?task=4" class="<?php echo $activeTask == 4 ? 'active' : ''; ?>">Soal 4 (Ternary)</a>
            </div>

            <div class="task-container">
                <?php 
                // Soal 5: Menggunakan file include untuk setiap jawaban
                switch ($activeTask) {
                    case 1:
                        include('task1.php');
                        break;
                    case 2:
                        include('task2.php');
                        break;
                    case 3:
                        include('task3.php');
                        break;
                    case 4:
                        include('task4.php');
                        break;
                    default:
                        include('task1.php');
                        break;
                }
                ?>
            </div>
        </main>

        <aside class="sidebar">
            <div class="sidebar-card">
                <h2>Latihan Praktikum</h2>
                <div class="sidebar-content">
                    <p>Halaman ini mempraktekkan berbagai struktur kontrol di PHP:</p>
                    <ul style="padding-left: 20px; font-size: 0.85rem; margin-top: 10px;">
                        <li><b>Switch-Case</b>: Seleksi kondisi banyak.</li>
                        <li><b>For Loop</b>: Perulangan dengan hitungan pasti.</li>
                        <li><b>Foreach Loop</b>: Perulangan khusus array.</li>
                        <li><b>Ternary Operator</b>: If-else versi singkat.</li>
                        <li><b>Include</b>: Modularisasi file PHP.</li>
                    </ul>
                </div>
                <hr>
                <h2>Informasi</h2>
                <p>Silakan gunakan menu navigasi di atas konten untuk melihat masing-masing jawaban soal.</p>
            </div>
        </aside>
    </div>

    <footer>
        <p>&copy; 2024 <b>Emil Maulana</b>. All rights reserved. | Tugas Praktikum PBW Pertemuan 7</p>
    </footer>
</body>
</html>

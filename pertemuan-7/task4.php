<?php
// Soal 4: Gunakan ternary operator untuk menentukan apakah angka adalah genap atau ganjil.
$angka = isset($_POST['angka']) ? (int)$_POST['angka'] : 0;
$hasilTernary = ($angka % 2 == 0) ? "Genap" : "Ganjil";
?>

<div class="task-card">
    <h2>4. Cek Genap/Ganjil (Ternary)</h2>
    <p>Menentukan status bilangan menggunakan operator ternary.</p>
    
    <form method="POST" action="?task=4" style="margin: 20px 0;">
        <div style="display: flex; gap: 10px; align-items: center;">
            <label>Masukkan Angka:</label>
            <input type="number" name="angka" value="<?php echo $angka; ?>" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px; width: 100px;" required>
            <button type="submit" class="btn" style="padding: 8px 16px; margin: 0;">Cek</button>
        </div>
    </form>

    <div class="task-box">
        <p>Angka: <b><?php echo $angka; ?></b></p>
        <p>Hasil: <b><?php echo $hasilTernary; ?></b></p>
    </div>
</div>

<?php
// Soal 1: Program menggunakan switch untuk menentukan jenis kendaraan berdasarkan jumlah roda.
$roda = isset($_POST['roda']) ? (int)$_POST['roda'] : 0;
$jenis = "";

switch ($roda) {
    case 1:
        $jenis = "Sepeda Satu Roda (Unicycle)";
        break;
    case 2:
        $jenis = "Sepeda atau Motor";
        break;
    case 3:
        $jenis = "Bemo atau Bajaj";
        break;
    case 4:
        $jenis = "Mobil";
        break;
    case 6:
        $jenis = "Truk atau Bus Kecil";
        break;
    default:
        $jenis = "Jenis kendaraan tidak terdaftar atau roda tidak valid";
        break;
}
?>

<div class="task-card">
    <h2>1. Penentuan Jenis Kendaraan (Switch)</h2>
    <p>Gunakan form di bawah untuk mengecek jenis kendaraan berdasarkan jumlah rodanya.</p>
    
    <form method="POST" action="?task=1" style="margin: 20px 0;">
        <div style="display: flex; gap: 10px; align-items: center;">
            <label>Jumlah Roda:</label>
            <input type="number" name="roda" value="<?php echo $roda; ?>" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px; width: 80px;" required>
            <button type="submit" class="btn" style="padding: 8px 16px; margin: 0;">Cek</button>
        </div>
    </form>

    <?php if ($roda > 0): ?>
    <div class="task-box">
        <p>Jumlah Roda: <b><?php echo $roda; ?></b></p>
        <p>Jenis Kendaraan: <b><?php echo $jenis; ?></b></p>
    </div>
    <?php endif; ?>
</div>

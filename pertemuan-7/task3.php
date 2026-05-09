<?php
// Soal 3: Buat array daftar nama hewan dan tampilkan menggunakan foreach.
$hewan = ["Kucing", "Anjing", "Gajah", "Harimau", "Kuda", "Panda", "Koala"];
?>

<div class="task-card">
    <h2>3. Daftar Nama Hewan (Foreach)</h2>
    <p>Menampilkan isi array menggunakan perulangan <code>foreach</code>.</p>
    
    <div class="task-box">
        <ul style="padding-left: 20px;">
            <?php 
            foreach ($hewan as $item) {
                echo "<li>" . $item . "</li>";
            }
            ?>
        </ul>
    </div>
</div>

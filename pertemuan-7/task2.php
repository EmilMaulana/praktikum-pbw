<?php
// Soal 2: Gunakan for untuk mencetak bilangan genap dari 2 sampai 10.
?>

<div class="task-card">
    <h2>2. Bilangan Genap 2-10 (For)</h2>
    <p>Mencetak deret bilangan genap menggunakan perulangan <code>for</code>.</p>
    
    <div class="task-box">
        <p>Hasil Perulangan:</p>
        <div style="font-size: 1.5rem; font-weight: 700; margin-top: 10px;">
            <?php 
            for ($i = 2; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    echo $i . ( $i < 10 ? ", " : "" );
                }
            }
            ?>
        </div>
    </div>
</div>

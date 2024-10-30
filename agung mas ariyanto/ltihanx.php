<?php
// Membuat array dengan 4 elemen string
$colors = ["hijau", "kuning", "kelabu", "merah muda"];

// Menampilkan isi array dalam bentuk kalimat
echo "Balonku ada lima.<br>";
echo "Rupa-rupa warnanya:<br>";
echo implode(", ", $colors) . ", dan biru.<br>";
echo "Meletus balon " . $colors[0] . " DOR!!!<br>";
echo "Hatiku sangat kacau.";
?>
<?php
// Array nilai
$nilai = [80, 90, 75, 85, 100];

// Menghitung jumlah total nilai menggunakan perulangan
$total = 0;
for ($i = 0; $i < count($nilai); $i++) {
    $total += $nilai[$i];
}

// Menghitung rata-rata nilai
$rataRata = $total / count($nilai);

// Menampilkan hasil
echo "Jumlah total nilai: $total\n";
echo "Rata-rata nilai: $rataRata\n";
?>

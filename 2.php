<?php 

    $lamaJamKerja = 14;
    $jamNormal = 8;
    $jamLebih = $lamaJamKerja - $jamNormal;  
    $kompensiJamPertama = 50000;
    $kompensiJamBerikutnya = 25000;

    if ($jamLebih > 0){
        $totalKompensi = $kompensiJamPertama + ($jamLebih - 1 ) * $kompensiJamBerikutnya;
    } else {
        $totalKompensi = 0;
    }

    echo "Lama jam kerja : " . $lamaJamKerja . " Jam <br>"; 
    echo "Jam lebih : " . $jamLebih . " Jam <br>";
    echo "Jumlah kompensasi : Rp." . number_format($totalKompensi, 0, ',', '.');

?>
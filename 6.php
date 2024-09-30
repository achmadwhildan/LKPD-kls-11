<?php 

$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Deni',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($student as $s) {
    $nama = $s['nama'];
    $nilai = $s['nilai'];
    $rataRata = array_sum($nilai) / count($nilai);
    echo " $nama = $rataRata\n <br>";
}

?>

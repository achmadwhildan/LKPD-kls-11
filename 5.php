<?php 

    $bil1 = [80,77,65,89,55,12,90,86];
    $bil2 = [77,99,55,81,45,90,98];

    $arrayHasil = array_intersect($bil1, $bil2);
    echo implode(',', $arrayHasil);

    echo "<br><br>";

    $arraydiff = array_diff($bil1, $bil2);
    echo implode(',', $arraydiff);
?>
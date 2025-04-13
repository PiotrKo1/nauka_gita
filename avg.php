<?php
// avg.php

function srednia($liczby) {
    $suma = array_sum($liczby);
    $ilosc = count($liczby);
    if ($ilosc == 0) return 0; //
    return $suma / $ilosc;
}

//
$wynik = srednia([1, 2, 3, 4, 5]);
echo "Średnia: $wynik";
?>
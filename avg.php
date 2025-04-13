<?php

function srednia($liczby) {
    $suma = array_sum($liczby);
    $ilosc = count($liczby);
    if ($ilosc == 0) return 0;
    return $suma / $ilosc;
}

function sredniaWazona($liczby, $wagi) {
    if (count($liczby) != count($wagi)) {
        return "Liczba elementów w tablicach nie zgadza się z wagami!";
    }

    $sumaWazona = 0;
    $sumaWag = 0;

    for ($i = 0; $i < count($liczby); $i++) {
        $sumaWazona += $liczby[$i] * $wagi[$i];
        $sumaWag += $wagi[$i];
    }

    if ($sumaWag == 0) return 0;
    return $sumaWazona / $sumaWag;
}


$wynik = srednia([1, 2, 3, 4, 5]);
echo "Średnia arytmetyczna: $wynik\n";

$liczby = [1, 2, 3];
$wagi = [0.1, 0.3, 0.6];
$wynikWazona = sredniaWazona($liczby, $wagi);
echo "Średnia ważona: $wynikWazona";
?>
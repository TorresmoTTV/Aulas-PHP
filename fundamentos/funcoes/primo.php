<?php
function isPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

for ($i = 1; $i <= 100; $i++) {
    if (isPrimo($i)) {
        echo $i . " ";
    }
}
?>

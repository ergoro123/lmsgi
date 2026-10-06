<?php
function randInt($min, $max) {
    return rand($min, $max);
}
$nota = randInt(0, 10);
echo $nota;
if ($nota >= 9) {
    echo " Excel·lent";
} else if ($nota >= 7) {
    echo " Notable";
} else if ($nota >= 6) {
    echo " Bé";
} else if ($nota >= 5) {
    echo " Aprovat";
} else {
    echo " Suspès";
}

?>
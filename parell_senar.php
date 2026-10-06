<?php
function randInt($min, $max) {
    return rand($min, $max);
}
$parellsenar = randInt(1, 100);
echo $parellsenar;

if ($parellsenar % 2 == 0) {
    echo " és parell";
} else {
    echo " és imparell";
}
?>
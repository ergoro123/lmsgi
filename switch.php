<?php
$nom = "Joan";
$curs = "SMX1,SMX2";
$curs2 = "ASIX1,ASIX2";
$curs3 = "DAW1,DAW2";
$curs4 = "DAM1,DAM2";

switch ($curs) {
    case "ASIX1,ASIX2":
        echo "Joan, alumne d'administració de sistemes informàtics i xarxes de primer"
        break;
    case "SMX1,SMX2":
        echo "Joan, alumne de sistemes microinformàtics i xarxes de primer"
        break;
    case "DAW1,DAW2":
        echo "Joan, alumne de desenvolupament d'aplicacions web de primer"
        break;
    case "DAM1,DAM2":
        echo "Joan, alumne de desenvolupament d'aplicacions multiplataforma de primer"
        break;
    default:
        echo "Joan no és alumne de cicle superior de informàtica"
}



?>
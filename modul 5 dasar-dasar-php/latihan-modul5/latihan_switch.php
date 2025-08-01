<?php
$ukuran_baju = "M";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran kecil (Small)";
        break;
    case "M":
        echo "Ukuran sedang (Medium)";
        break;
    case "L":
        echo "Ukuran besar (Large)";
        break;
    case "XL":
        echo "Ukuran ekstra besar (Extra Large)";
        break;
    default:
        echo "Ukuran tidak diketahui";
}
?>

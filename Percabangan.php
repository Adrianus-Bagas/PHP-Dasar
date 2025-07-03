<?php
$nilai = 85;

echo "Percabangan if\n";
if($nilai > 85) {
    echo "Nilai anda A";
} elseif($nilai > 75) { 
    echo "Nilai anda AB";
} elseif($nilai > 65) {
    echo "Nilai anda B";
} elseif($nilai > 55) {
    echo "Nilai anda BC";
} else {
    echo "Anda tidak lulus";
}

echo "\nPercabangan switch case\n";
$level = 3;

switch($level) {
    case 1:
        echo "Level 1";
        break;
    case 2;
        echo "Level 2";
        break;
    case 3:
        echo "Level 3";
        break;
    case 4:
        echo "Level 4";
        break;
    default:
        echo "Tamat";
        break;
}
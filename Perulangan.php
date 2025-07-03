<?php
// for loop
echo "For Loop\n";
for ($i = 1; $i <= 10; $i++) {
    echo "Looping $i\n";
}

// while loop
echo "\nWhile Loop\n";
$i = 10;
while ($i > 0) {
    echo "Looping $i\n";
    $i--;
}

// do while loop
echo "\nDo While Loop\n";
$i = 10;
do {
    echo "Looping $i\n";
    $i--;
} while ($i > 0);

// for each loop
echo "\nfor each Loop\n";
$list = ["a","b", "c"];
foreach ($list as $value) {
    echo $value."\n";
}
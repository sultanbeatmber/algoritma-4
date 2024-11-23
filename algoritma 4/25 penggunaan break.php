<?php
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i . " ";
}
// Output: 0 1 2 3 4

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo $i . " ";
}
// Output: 1 3 5 7 9

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo $i . " ";
}
// Output: 1 3 5 7 9

$buah = "apel";

switch ($buah) {
    case "mangga":
        echo "Ini mangga";
        break;
    case "apel":
        echo "Ini apel";
        // Break disini menghentikan switch
        break;
    case "pisang":
        echo "Ini pisang";
        break;
    default:
        echo "Buah tidak dikenal";
}
echo "<i><p><strong> By : sultan";
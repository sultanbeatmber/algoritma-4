<?php

// Pernyataan While
$i = 1;
while ($i <= 5) {
  echo "<p>Nilai i: $i</p>";
  
  $i++;
}
echo "<hr>";

// Pernyataan Do-While
$i = 1;
do {
  echo "<p>Nilai i: $i</p>";
  
  $i++;
} while ($i <= 5);

echo "<hr>";
// Pernyataan For
for ($i = 1; $i <= 5; $i++) {
  echo "<p>Perulangan ke-$i</p>";
  
}

echo "<hr>";
// Pernyataan Foreach
$warna = array('merah', 'hijau', 'biru');
foreach ($warna as $w) {
  echo "<p>Warna: $w</p>";
}

echo "<hr>"; 
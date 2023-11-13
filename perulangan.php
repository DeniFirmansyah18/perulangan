<?php
/**
 * Perulangan For
 */
for ($i = 0; $i < 10; $i++) {
    echo "<h2>ini perulangan ke-$i</h2>";
}

/**
 * Perulangan While
 */
$ulangi = 0;

while ($ulangi < 10) {
    echo "<p> ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

/**
 * Perulangan do while
 */
$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi < 0);

/**
 * Perulangan foreach
 */
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun aplikasi web dengan php",
    "tutorial php dan mysql",
    "membuat chat bot dengan PHP"
];

echo "<h5>Judul buku PHP:</h5>";
echo "<ul>";
foreach ($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

/**
 * Perulangan bersarang
 */
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "ini perulangan ke ($i, $j) <br>";
    }
}
echo "</br>";

$i = 0;
while ($i < 10) {
    for ($j = 0; $j < 10; $j++) {
        echo "ini perulangan ke ($i,$j)<br>";
    }
    $i++;
}

?>
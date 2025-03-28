<?php
// 1. Números primos
echo "<h3>Números primos (1-1000):</h3>";
for ($n = 2; $n <= 1000; $n++) {
    $primo = true;
    for ($d = 2; $d <= $n / 2; $d++) {
        if ($n % $d == 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) echo "$n ";
}

// 2. Figura con tamaño 5
echo "<h3>Figura (tamaño=5):</h3>";
$t = 5;
for ($i = 1; $i <= $t; $i++) echo str_repeat('*', $i) . "<br>";
echo str_repeat('+', $t + 1) . "<br>";
for ($i = $t; $i >= 1; $i--) echo str_repeat('*', $i) . "<br>";
?><?php
// 1. Números primos
echo "<h3>Números primos (1-1000):</h3>";
for ($n = 2; $n <= 1000; $n++) {
    $primo = true;
    for ($d = 2; $d <= $n / 2; $d++) {
        if ($n % $d == 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) echo "$n ";
}

// 2. Figura con tamaño 5
echo "<h3>Figura</h3>";
$t = 5;
for ($i = 1; $i <= $t; $i++) echo str_repeat('*', $i) . "<br>";
echo str_repeat('+', $t + 1) . "<br>";
for ($i = $t; $i >= 1; $i--) echo str_repeat('*', $i) . "<br>";
?>
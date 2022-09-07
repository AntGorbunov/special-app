<?php

$slovo = 'batman';
$sdvig = 3;
$shifr = '';


for ($i = 0; $i < strlen($slovo); $i++) {
    $shifr .= chr(ord($slovo[$i]) + $sdvig);
}

echo "Зашифрованное слово - $shifr". "\n";

$rasshifr = '';

$i = 0;
while ($i < strlen($shifr)) {
    $rasshifr .= chr(ord($shifr[$i]) - $sdvig);
    $i++;
}

echo "Расшифрованное слово - $rasshifr";









<?php
$massiv_1 = [];

for ($i = 'A'; $i <= 'B'; $i++) {
    for ($z = 0; $z <= 999; $z++) {
        $z = sprintf('%03d', $z); {
            for ($h = 'A'; $h <= 'B'; $h++) {
                for ($p = 'A'; $p <= 'B'; $p++) {
                    $massiv_1[] = "$i$z$h$p";
                }
            }
        }
    }
}

$massiv_2 = [];
foreach ($massiv_1 as $key => $a) {
    $massiv_2[] = $a;
}

echo implode("\n", $massiv_2);


$massiv_3 = [];
foreach ($massiv_2 as $key => $b) {
    if (
        $b[1] === $b[2]
        && $b[2] === $b[3]
    ) {
       $massiv_3[] = array_slice($massiv_2, $key, 1);
    }
}

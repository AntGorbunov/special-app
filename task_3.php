<?php

$first_dep = 100000;
$current_dep = 100000;
$percent = 0.08;

for ($i = 1; ; $i++) {
    if (($i % 3) == 0) {
        $percent = $percent + 0.02;
    }
    $current_dep = $current_dep + $current_dep * $percent;
    if ($current_dep >= 200000) {
        break (1);
    }
}

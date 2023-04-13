<?php
try {
    $removeQuantity = 1;
    $inStoreStart   = 10;
    $coefficient = 28;
    $round = 3;
    $totalWriteOff = 0;

    for ($i = 0; $i < ($coefficient * $inStoreStart); $i++) {
        $totalWriteOff += round($removeQuantity / $coefficient, $round);
        $delta = round(round($totalWriteOff * $coefficient) / $coefficient, $round);

        $totalWriteOff = $delta;
        echo "$i:   " . $totalWriteOff . "\n";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}


/*function gcd($x, $y)
{
    if ($y == 0) {
        return $x;
    } else {
        return gcd($y, $x % $y);
    }
}

$inStore = 4;
$coefficient1 = 4.5;
$coefficient2 = 3;
$deltaC = (($coefficient2 * $coefficient1) / gcd($coefficient1, $coefficient2)*2);
$round = 3;
$give = 1;

for ($i = 0; $i < ($coefficient1 * 4); $i++) {
    $inStore -= round($give / $coefficient1, $round);
    $delta = round(round($inStore * $deltaC) / ($deltaC), $round);
    $inStore = $delta;
    echo "$i - $deltaC:   " . $inStore . "    (" . $inStore * $coefficient1 . ")\n";
}*/
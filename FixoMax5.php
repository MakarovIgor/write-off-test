<?php


$removeQuantity      = 0.5; //списываем каждый раз
$unitStorageQuantity = 10; //на складе уп
$coefficient         = 28; // в упаковке  таблеток
$totalWriteOff       = 0; //общее кол-во списанных
$round = 3;

for ($i = 0; $i < (($unitStorageQuantity * $coefficient) * 2); $i++) {
    $totalWriteOff += round($removeQuantity / $coefficient, $round);
    $delta = round(round($totalWriteOff * $coefficient) / $coefficient, $round);

    $totalWriteOff = $delta;
    echo "$i:   " . $totalWriteOff . " \n";
}

echo 'Total write-off: '.round($totalWriteOff, 11) . "\n";
echo 'Total write-off rounded: '.round($totalWriteOff, 3)."\n";
echo "\n";
echo 'In store after write-off: '.round($unitStorageQuantity - $totalWriteOff,11)."\n";
echo 'In store after write-off rounded: '.round($unitStorageQuantity - $totalWriteOff,3)."\n";


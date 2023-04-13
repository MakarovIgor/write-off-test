<?php


$removeQuantity      = 0.5; //списываем каждый раз
$unitStorageQuantity = 10;
$coefficient         = 1;
$totalWriteOff       = 0; //общее кол-во списанных
$round = 11;

for ($i = 0; $i < ($unitStorageQuantity * $coefficient)*2; $i++) {
    $quantity      = round($removeQuantity / $coefficient, $round);
    $totalWriteOff += $quantity;
    echo "$i:   " . $totalWriteOff . " \n";
}

echo 'Total write-off: '.round($totalWriteOff, $round) . "\n";
echo 'Total write-off rounded: '.round($totalWriteOff, 3)."\n";
echo "\n";
echo 'In store after write-off: '.round($unitStorageQuantity - $totalWriteOff,$round)."\n";
echo 'In store after write-off rounded: '.round($unitStorageQuantity - $totalWriteOff,3)."\n";
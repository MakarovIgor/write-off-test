<?php

$removeQuantity      = 0.7; //1
$unitStorageQuantity = 10; //кол-во флаконов
$coefficient         = 1; // в флаконе 10мл, в дозе 0,7мл
$totalWriteOff = 0; //общее кол-во списанных

for ($i = 0; $i < ($unitStorageQuantity * $coefficient); $i++) {
    $quantity      = round($removeQuantity / $coefficient, 11);
    $totalWriteOff += $quantity;
    echo "$i:   " . $totalWriteOff . " \n";
}

echo 'Total write-off: '.round($totalWriteOff, 11) . "\n";
echo 'Total write-off rounded: '.round($totalWriteOff, 3)."\n";
echo "\n";
echo 'In store after write-off: '.round($unitStorageQuantity - $totalWriteOff,11)."\n";
echo 'In store after write-off rounded: '.round($unitStorageQuantity - $totalWriteOff,3)."\n";
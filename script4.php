<?php


$removeQuantity      = 0.5; //списываем каждый раз
$unitStorageQuantity = 1000000; //кол-во флаконов
$coefficient         = 1; // в флаконе 10мл, в дозе 0,7мл
$totalWriteOff       = 0; //общее кол-во списанных

$result = [];
for ($i = 0; $i < ($unitStorageQuantity * $coefficient); $i++) {
    $quantity      = round($removeQuantity / $coefficient, 11);
    $totalWriteOff += $quantity;
}

echo 'Total write-off: '.round($totalWriteOff, 11) . "\n";
echo 'Total write-off rounded: '.round($totalWriteOff, 3)."\n";
echo "\n";
echo 'In store after write-off: '.round($unitStorageQuantity - $totalWriteOff,11)."\n";
echo 'In store after write-off rounded: '.round($unitStorageQuantity - $totalWriteOff,3)."\n";
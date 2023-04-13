<?php


$removeQuantity      = 1; //кол-во списания
$unitStorageQuantity = 10; //на складе уп
$coefficient         = 28;  // в упаковке  таблеток
$totalWriteOff = 0; //общее кол-во списанных


for ($i = 0; $i < ($unitStorageQuantity * $coefficient); $i++) {
    $totalBefore   = $unitStorageQuantity - $totalWriteOff;
    $quantity      = round($removeQuantity / $coefficient, 11);
    $totalWriteOff += $quantity;
    echo "$i:   " . $totalWriteOff . " \n";
}

echo 'Total write-off: '.round($totalWriteOff, 11) . "\n";
echo 'Total write-off rounded: '.round($totalWriteOff, 3)."\n";
echo "\n";
echo 'In store after write-off: '.round($unitStorageQuantity - $totalWriteOff,11)."\n";
echo 'In store after write-off rounded: '.round($unitStorageQuantity - $totalWriteOff,3)."\n";





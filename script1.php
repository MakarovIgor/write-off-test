<?php

$removeQuantity      = 1; //кол-во списания(кол-продажи за один раз)
$unitStorageQuantity = 1000000; //кол-во упаковок хранения
$coefficient         = 1; //кол-во каких-то штук в 1 упаковке
$totalWriteOff       = 0; //общее кол-во списанных


$result = [];
for ($i = 0; $i < ($unitStorageQuantity * $coefficient); $i++) {
    //$totalBefore   = $unitStorageQuantity - $totalWriteOff;
    $quantity      = round($removeQuantity / $coefficient, 11);
    $totalWriteOff += $quantity;

    /*$result[] = [
        'quantity_write_off' => $quantity,
        'quantity_before' => round($totalBefore, 11),
        'quantity_after'  => round($unitStorageQuantity - $totalWriteOff, 11)
    ];*/
}

echo 'Total write-off: '.round($totalWriteOff, 11) . "\n";
echo 'Total write-off rounded: '.round($totalWriteOff, 3)."\n";
echo "\n";
echo 'In store after write-off: '.round($unitStorageQuantity - $totalWriteOff,11)."\n";
echo 'In store after write-off rounded: '.round($unitStorageQuantity - $totalWriteOff,3)."\n";



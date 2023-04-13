<?php


$removeQuantity      = 1; //кол-во списания(кол-продажи за один раз)
$unitStorageQuantity = 10; //кол-во упаковок хранения
$coefficient         = 1; //кол-во каких-то штук в 1 упаковке
$totalWriteOff       = 0; //общее кол-во списанных
$round = 3;

$unitStorageAfter = $unitStorageQuantity; //кол-во упаковок хранения

for ($i = 0; $i < ($unitStorageQuantity * $coefficient); $i++) {
    $totalWriteOff += round($removeQuantity / $coefficient, $round);
    $delta = round(round($totalWriteOff * $coefficient) / $coefficient, $round);

    $totalWriteOff = $delta;

    echo "$i:   " . $unitStorageAfter . "\n";
}



echo 'Total write-off: '.round($totalWriteOff, $round) . "\n";
echo 'Total write-off rounded: '.round($totalWriteOff, 3)."\n";
/*echo "\n";
echo 'In store after write-off: '.round($unitStorageQuantity - $totalWriteOff,11)."\n";
echo 'In store after write-off rounded: '.round($unitStorageQuantity - $totalWriteOff,3)."\n";*/
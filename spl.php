<?php
/**
 * 跳过某些元素打印
 */
$fruits = [
    'Apple' => 'apple value',   //position = 0
    'Orange' => 'orange value', //position = 1
    'Grape' => 'grape value',
    'Plum' => 'plum value'
];

echo '<pre>';
print_r($fruits);

$arrIterator = new ArrayObject($fruits);
$getIter = $arrIterator->getIterator();

/**
 * Orange : orange value
 * Grape : grape value
 * Plum : plum value
 */
echo '<hr>使用ArrayIterator in while(){}跳过第一个元素遍历:<br>';
$getIter->rewind();
if ($getIter->valid()) {
    $getIter->seek(1);
    while ($getIter->valid()) {
        echo $getIter->key() . ' : ' . $getIter->current() . "\n";
        $getIter->next();
    }
}

/**
 * Apple : apple value
 * Grape : grape value
 * Orange : orange value
 * Plum : plum value
 */
echo '<hr>使用ksort() 对元素的key排序遍历:<br>';
$getIter->ksort();
foreach ($getIter as $key => $value) {
    echo $key . ' : ' . $value . "\n";
}

/**
 * Apple : apple value
 * Grape : grape value
 * Orange : orange value
 * Plum : plum value
 */
echo '<hr>使用asort() 对元素的value排序遍历:<br>';
$getIter->asort();
foreach ($getIter as $key => $value) {
    echo $key . ' : ' . $value . "\n";
}
echo '</pre>';
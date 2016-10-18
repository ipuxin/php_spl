<?php
/**
 * 迭代器:ArrayIterator
 * 遍历数组
 */
$fruits = [
    'Apple' => 'apple value',
    'Orange' => 'orange value',
    'grape' => 'grape value',
    'plum' => 'plum value'
];

echo '<pre>';

print_r($fruits);

/**
 * 普通遍历方法:foreach,
 * 其实,也是使用了ArrayIterator方法
 * Apple : apple value
 * Orange : orange value
 * grape : grape value
 * plum : plum value
 */
echo '<hr>使用foreach遍历:<br>';
foreach ($fruits as $key => $value) {
    echo $key . ' : ' . $value . "\n";
}

/**
 * 使用ArrayIterator遍历:
 * Apple : apple value
 * Orange : orange value
 * grape : grape value
 * plum : plum value
 */
echo '<hr>使用ArrayIterator in foreach(){}遍历:<br>';
/**
 * 获得数组的迭代器
 */
$arrIterator = new ArrayObject($fruits);
$getIter = $arrIterator->getIterator();
/**
 * 执行循环
 */
foreach ($getIter as $key => $value) {
    echo $key . ' : ' . $value . "\n";
}

/**
 * 使用while循环
 * Apple : apple value
 * Orange : orange value
 * grape : grape value
 * plum : plum value
 */
$getIter->rewind();
echo '<hr>使用ArrayIterator in while(){}遍历:<br>';
while ($getIter->valid()) {
    echo $getIter->key() . ' : ' . $getIter->current() . "\n";
    $getIter->next();
}

echo '</pre>';
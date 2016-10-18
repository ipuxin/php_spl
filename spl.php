<?php
/**
 * AppendIterator
 * 按顺序迭代访问多个迭代器.
 * 把多个数组放一起循环
 */
$fruits = [
    'Apple' => 'apple value',   //position = 0
    'Orange' => 'orange value', //position = 1
    'Grape' => 'grape value',
    'Plum' => 'plum value'
];
$sports = [
    'football' => 'football value',   //position = 0
    'basketball' => 'orange value', //position = 1
    'pingpang' => 'pingpang value'
];

echo '<pre>';

$fruIterator = new ArrayIterator($fruits);
$spoIterator = new ArrayIterator($sports);
$joinIterator = new AppendIterator();

$joinIterator->append($fruIterator);
$joinIterator->append($spoIterator);

/**
 * AppendIterator Object
 * (
 * )
 */
print_r($joinIterator);

/**
 * Apple : apple value
 * Orange : orange value
 * Grape : grape value
 * Plum : plum value
 * football : football value
 * basketball : orange value
 * pingpang : pingpang value
 */
foreach ($joinIterator as $key => $value) {
    echo $key . ' : ' . $value . "\n";
}

echo '</pre>';
<?php
/**
 * AppendIterator
 * 按顺序迭代访问多个迭代器.
 * 把多个数组放一起循环
 */
//$people = [
//    'people1' => '张三',   //position = 0
//    'people2' => '李四', //position = 1
//    'people3' => '王二',
//];
//$fruits = [
//    'Apple' => 'apple value',   //position = 0
//    'Orange' => 'orange value', //position = 1
//    'Grape' => 'grape value',
//];
//$sports = [
//    'football' => 'football value',   //position = 0
//    'basketball' => 'orange value', //position = 1
//    'pingpang' => 'pingpang value'
//];

$people = [
    '张三',   //position = 0
    '李四', //position = 1
    '王二',
];
$fruits = [
    'apple value',   //position = 0
    'orange value', //position = 1
    'grape value',
];
$sports = [
    'football value',   //position = 0
    'orange value', //position = 1
    'pingpang value'
];

echo '<pre>';

$peoIterator = new ArrayIterator($people);
$fruIterator = new ArrayIterator($fruits);
$spoIterator = new ArrayIterator($sports);
$joinIterator = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);

/**
 * AppendIterator 一维数组的拼合
 * Array
 * (
 * [姓名] => 张三
 * [爱吃的水果] => apple value
 * [喜欢的运动] => football value
 * )
 * Array
 * (
 * [姓名] => 李四
 * [爱吃的水果] => orange value
 * [喜欢的运动] => orange value
 * )
 * Array
 * (
 * [姓名] => 王二
 * [爱吃的水果] => grape value
 * [喜欢的运动] => pingpang value
 * )
 */
$joinIterator->attachIterator($peoIterator, '姓名');
$joinIterator->attachIterator($fruIterator, '爱吃的水果');
$joinIterator->attachIterator($spoIterator, '喜欢的运动');

/**
 * AppendIterator Object
 * (
 * )
 */
//print_r($joinIterator);

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
//    echo $key . ' : ' . $value . "\n";
    print_r($value);
}

echo '</pre>';
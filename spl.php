<?php
date_default_timezone_set('PRC');

$people = [
    [
        'people1' => '张三',   //position = 0
        'people2' => '李四', //position = 1
        'people3' => '王二',
        'people4' => '王二是',
    ],
    [
        'Apple' => 'apple value',   //position = 0
        'Orange' => 'orange value', //position = 1
        'Grape' => 'grape value',
    ],
];

/**
 * 计算数组的长度
 */
//2
echo count($people) . "\n";
//4
echo count($people[0]) . "\n";
//3
echo count($people[1]) . "\n";
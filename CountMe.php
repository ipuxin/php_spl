<?php
date_default_timezone_set('PRC');

/**
 * Class OuterImpl
 * 重写:current(),key()方法
 * 修改数组内容
 */
class OuterImpl extends IteratorIterator
{
    public function current()
    {
        return parent::current() . '_children';
    }

    public function key()
    {
        return parent::current() . '_children';
    }
}

$people = [
    'people1' => '张三',   //position = 0
    'people2' => '李四', //position = 1
    'people3' => '王二',
    'people4' => '王二是',
];

$arrIterator = new ArrayIterator($people);
$outObj = new OuterImpl($arrIterator);

/**
 * 张三_children : 张三_children
 * 李四_children : 李四_children
 * 王二_children : 王二_children
 * 王二是_children : 王二是_children
 */
foreach ($outObj as $key => $value) {
    echo $key . ' : ' . $value . "<br>";
}

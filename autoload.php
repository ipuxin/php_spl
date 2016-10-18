<?php
date_default_timezone_set('PRC');

/**
 * 设置autoload寻找php定义的类文件扩展名,
 * 多个扩展名逗号分隔
 */
spl_autoload_extensions('.class.php,.php');

/**
 * 设置autoload寻找php定义的类文件目录,
 * 多个目录用 PATH_SEPARATOR 进行分隔
 * .;C:\php\pear;libs/;tools/;libs/;tools/
 */
set_include_path(get_include_path() . PATH_SEPARATOR . "libs/" .PATH_SEPARATOR . "tools/");

/**
 * 注册加载类
 */
spl_autoload_register();

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

new Test();
new Bottom();
new HelpTools();
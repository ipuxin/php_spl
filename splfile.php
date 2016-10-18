<?php
date_default_timezone_set('PRC');

/**
 * SplFileInfo Object
 * (
 * [pathName:SplFileInfo:private] => libs/QuterImpl.php
 * [fileName:SplFileInfo:private] => QuterImpl.php
 * )
 */
$file = new SplFileInfo('./libs/Test.class.php');

/**
 * 读取时间
 */
echo "创建时间:" . date('Y-m-d h:i:s', $file->getCTime()) . "<br>";
echo "修改时间:" . date('Y-m-d h:i:s', $file->getMTime()) . "<br>";
echo "文件大小:" . $file->getSize() . "bytes<br>";

/**
 * 读取内容
 */
$fileObj = $file->openFile('r');
while ($fileObj->valid()) {
    //获取文件一行的内容
    echo $fileObj->fgets();
}

//关闭
$fileObj = null;
$file = null;

echo '<pre>';
print_r($file);
echo '</pre>';
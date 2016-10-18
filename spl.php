<?php
date_default_timezone_set('PRC');
/**
 * . 当前目录
 * .. 上一级目录
 */


/**
 * %s : 字符串
 * \t : 制表符
 * %8s : 设定宽度为8
 */
$it = new FilesystemIterator('.');
foreach ($it as $finfo) {
    echo '<br>';
    printf(
        "%s\t%s\t%8s\t%s\n",
        date('Y-m-d H:i:s', $finfo->getMTime()),
        $finfo->isDir() ? "<DIR>" : "",

        /**
         * 格式化数字
         */
        number_format($finfo->getSize()),
        $finfo->getFileName()
    );
}

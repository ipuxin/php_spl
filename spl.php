<?php
/**
 * 堆栈:
 * 是双向链表的一个分支
 * 许多方法通用
 */
$stack = new SplStack();

$stack->push('a');
$stack->push('b');
$stack->push('c');
$stack->push('d');
$stack->push('e');

echo '<pre>';
print_r($stack);

//遍历堆栈
$stack->rewind();
while ($stack->valid()) {
    echo $stack->key() . ' => ' . $stack->current() . '<br>';
//    echo '键 key: ' . $stack->key() . '<br>';
//    echo '值 current: ' . $stack->current() . '<br>';
    /**
     * 移动指针
     */
    $stack->next();
}

echo '</pre>';
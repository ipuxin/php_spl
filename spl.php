<?php
/**
 * 双向链表
 */

$obj = new SplDoublyLinkedList();
echo '<pre>';

$obj->push(1);
$obj->push(2);
$obj->push(3);
$obj->unshift(10);
print_r($obj);

/**
 * 使用rewind后current才有指向
 */
$obj->rewind();

/**
 * 当前节点:10
 */
echo '当前节点:' . $obj->current();

echo '</pre>';
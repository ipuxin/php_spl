<?php
$obj = new SplDoublyLinkedList();
echo '<pre>';

$obj->push(1);
$obj->push(2);
$obj->push(3);
$obj->unshift(10);
echo '当前节点:' . $obj->current() . '<br>';
$obj->rewind();
$obj->next();
$obj->next();
$obj->next();

/**
 * pop():
 *  删除top元素,若,正好current()指向此,则,current为空
 */
$obj->pop();

echo '当前节点:' . $obj->current() . '<br>';
print_r($obj);
echo '</pre>';
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

/**
 * SplStack Object
 * (
 * [flags:SplDoublyLinkedList:private] => 6
 * [dllist:SplDoublyLinkedList:private] => Array
 * (
 * [0] => a
 * [1] => b
 * [2] => c
 * [3] => d
 * [4] => e
 * )
 *
 * )
 */
print_r($stack);

/**
 * bottom: a
 * top: e
 */
echo 'bottom: ' . $stack->bottom() . '<br>';
echo 'top: ' . $stack->top() . '<br>';

/**
 * SplStack Object
 * (
 * [flags:SplDoublyLinkedList:private] => 6
 * [dllist:SplDoublyLinkedList:private] => Array
 * (
 * [0] => a
 * [1] => b
 * [2] => c
 * [3] => d
 * [4] => ww
 * )
 *
 * )
 * offsetSet(),中0,是top
 */
$stack->offsetSet(0, 'ww');
print_r($stack);

/**
 * rewind()后,current指向top
 * 这一点和双向列表不同
 */
$stack->rewind();
//current: ww
echo 'current: ' . $stack->current() . '<br>';

echo '</pre>';
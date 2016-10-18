<?php
/**
 * 堆栈
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

echo '</pre>';
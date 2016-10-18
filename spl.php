<?php
/**
 * 双向链表
 */

$obj = new SplDoublyLinkedList();
echo '<pre>';
/**
 * 查看对象,发现看不到
 * object(SplDoublyLinkedList)[1]
 */
var_dump($obj);

/**
 * 换种方式查看对象:
 * SplDoublyLinkedList Object
 * (
 * [flags:SplDoublyLinkedList:private] => 0
 * [dllist:SplDoublyLinkedList:private] => Array
 * (
 * )
 *
 * )
 */
print_r($obj);

/**
 * push:
 * 把新的数据添加到top,顶部
 * 添加数据,默认key从0开始
 *
 */
$obj->push(1);
$obj->push(2);
$obj->push(3);

/**
 * unshift:
 * 把元素添加到bottom,根部
 *
 * SplDoublyLinkedList Object
 * (
 * [flags:SplDoublyLinkedList:private] => 0
 * [dllist:SplDoublyLinkedList:private] => Array
 * (
 * [0] => 10
 * [1] => 1
 * [2] => 2
 * [3] => 3
 * )
 *
 * )
 */
$obj->unshift(10);
print_r($obj);

echo '</pre>';
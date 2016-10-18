<?php
$queue = new SplQueue();

$queue->enqueue('a');
$queue->enqueue('b');
$queue->enqueue('c');
$queue->enqueue('d');
$queue->enqueue('e');

echo '<pre>';
print_r($queue);

/**
 * offsetSet(0,'A');
 * 0,是从根节点开始的
 *
 * current: A
 * 0 => A
 * 1 => b
 * 2 => c
 * 3 => d
 * 4 => e
 */
$queue->offsetSet(0, 'A');

/**
 * 遍历堆栈
 * current: a
 * 0 => a
 * 1 => b
 * 2 => c
 * 3 => d
 * 4 => e
 *
 * 指针的next()由bottom->top
 */
$queue->rewind();
echo 'current: ' . $queue->current() . '<br>';
while ($queue->valid()) {
    echo $queue->key() . ' => ' . $queue->current() . '<br>';
    $queue->next();
}

/**
 * dequeue:删除节点
 * 从bottom开始删除:先进,先出
 *
 * SplQueue Object
 * (
 * [flags:SplDoublyLinkedList:private] => 4
 * [dllist:SplDoublyLinkedList:private] => Array
 * (
 * [0] => b
 * [1] => c
 * [2] => d
 * [3] => e
 * )
 *
 * )
 */
$del = $queue->dequeue();
echo '$del: ' . $del . '<br>';
print_r($queue);
echo '</pre>';
<?php
$queue = new SplQueue();
/**
 * 典型的排队买票模型
 * SplQueue Object
 * (
 * [flags:SplDoublyLinkedList:private] => 4
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
$queue->enqueue('a');
$queue->enqueue('b');
$queue->enqueue('c');
$queue->enqueue('d');
$queue->enqueue('e');

echo '<pre>';
print_r($queue);

/**
 * bottom: a
 * top: e
 */
echo 'bottom: ' . $queue->bottom() . '<br>';
echo 'top: ' . $queue->top() . '<br>';


//遍历堆栈
$queue->rewind();
while ($queue->valid()) {
    echo $queue->key() . ' => ' . $queue->current() . '<br>';
//    echo '键 key: ' . $stack->key() . '<br>';
//    echo '值 current: ' . $stack->current() . '<br>';
    /**
     * 移动指针
     */
    $queue->next();
}

/**
 * 删除指针:pop()
 * 出栈:从top中删除
 */
//$popObj = $queue->pop();
//echo '$popObj: ' . $popObj . '<br>';
//print_r($queue);
echo '</pre>';
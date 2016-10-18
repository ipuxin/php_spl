<?php
$stack = new SplStack();
/**
 * 典型的插包子模型:
 * 从top()添加数据,push()
 * 从top()删除数据,pop()
 */
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

/**
 * 删除指针:pop()
 * 出栈:从top中删除
 */
$popObj = $stack->pop();
echo '$popObj: ' . $popObj . '<br>';
print_r($stack);
echo '</pre>';
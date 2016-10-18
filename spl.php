<?php
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
$obj->next();
/**
 * 当前节点:10
 * 如果到达最后一个,$obj->currrent()为空
 */
echo '当前节点:' . $obj->current() . '<br>';
$obj->next();
$obj->next();
$obj->next();
$obj->next();

if ($obj->current()) {
    echo "Current node valid\n";
} else {
    echo "Current node invalid\n";
}

/**
 * 下面这个和current作用一样
 */
if ($obj->valid()) {
    echo "Current node valid\n";
} else {
    echo "Current node invalid\n";
}

echo '当前节点:' . $obj->current() . '<br>';
echo '</pre>';
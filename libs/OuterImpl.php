<?php
/**
 * Class OuterImpl
 * 重写:current(),key()方法
 * 修改数组内容
 */
class OuterImpl extends IteratorIterator
{
    public function current()
    {
        return parent::current() . '_children';
    }

    public function key()
    {
        return parent::current() . '_children';
    }
}
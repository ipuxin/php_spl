<?php
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
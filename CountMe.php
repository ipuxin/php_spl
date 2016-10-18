<?php

class CountMe
{
    protected $_myConunt = 3;

    public function count()
    {
        return $this->_myConunt;
    }
}

$obj = new CountMe();
//1
echo count($obj);
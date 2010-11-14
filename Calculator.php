<?php

class Calculator
{
    public function push($num)
    {
        if (!isset($this->items)) {
            $this->items = array($num);
        }
    }

    public function add()
    {
        throw new Exception('Undefined');
    }

    public function result()
    {
        throw new Exception('Undefined');
    }
}


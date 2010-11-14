<?php

class Calculator
{
    public function push($num)
    {
        if (!isset($this->items)) {
            $this->items = array($num);
        } else {
            array_push($this->items, $num);
        }
    }

    public function add()
    {
        $this->result = array_sum($this->items);
    }

    public function result()
    {
        return $this->result;
    }
}


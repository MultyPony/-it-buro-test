<?php

class ArrayWorker
{
    protected $array = [];

    function __construct() {
        $this->fill();
        // var_dump($this->array);
        $this->reindex();
        // var_dump($this->array);
    }

    protected function fill()
    {
        $n = 10;

        for ($i = 0; $i < $n; $i++) {
            $this->array[$i] = rand(1, 100);
        }
    }

    protected function reindex() {
        $maxIndex = array_keys($this->array, max($this->array))[0];
        $minIndex = array_keys($this->array, min($this->array))[0];
        
        $temp = $this->array[$minIndex];
        $this->array[$minIndex] = $this->array[$maxIndex];
        $this->array[$maxIndex] = $temp;

    }

    public function dump() {
        $maxIndex = array_keys($this->array, max($this->array))[0];
        $minIndex = array_keys($this->array, min($this->array))[0];

        print $maxIndex + $minIndex;
    }
}
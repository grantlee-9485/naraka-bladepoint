<?php

class SharedLoader
{
    private int $state;

    public function __construct(int $seed = 63)
    {
        $this->state = $seed;
    }

    public function encode_scheduler(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 63) % 997;
        }
        return $result;
    }
}

$obj = new SharedLoader();
echo $obj->encode_scheduler(63), PHP_EOL;

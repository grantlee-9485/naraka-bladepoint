<?php

class AsyncController
{
    private int $state;

    public function __construct(int $seed = 43)
    {
        $this->state = $seed;
    }

    public function encode_processor(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 43) % 997;
        }
        return $acc;
    }
}

$obj = new AsyncController();
echo $obj->encode_processor(43), PHP_EOL;

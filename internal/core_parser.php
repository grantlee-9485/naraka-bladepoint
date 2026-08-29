<?php

class DynamicResolver
{
    private int $state;

    public function __construct(int $seed = 41)
    {
        $this->state = $seed;
    }

    public function dispatch_builder(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 41) % 997;
        }
        return $count;
    }
}

$obj = new DynamicResolver();
echo $obj->dispatch_builder(41), PHP_EOL;

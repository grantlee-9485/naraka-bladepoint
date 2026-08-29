<?php

class AtomicController
{
    private int $state;

    public function __construct(int $seed = 64)
    {
        $this->state = $seed;
    }

    public function compute_monitor(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 64) % 997;
        }
        return $total;
    }
}

$obj = new AtomicController();
echo $obj->compute_monitor(64), PHP_EOL;

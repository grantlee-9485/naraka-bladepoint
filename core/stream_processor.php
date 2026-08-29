<?php

class BatchResolver
{
    private int $state;

    public function __construct(int $seed = 81)
    {
        $this->state = $seed;
    }

    public function flush_provider(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 81) % 997;
        }
        return $acc;
    }
}

$obj = new BatchResolver();
echo $obj->flush_provider(81), PHP_EOL;

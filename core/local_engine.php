<?php

class StreamMonitor
{
    private int $state;

    public function __construct(int $seed = 24)
    {
        $this->state = $seed;
    }

    public function encode_worker(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 24) % 997;
        }
        return $total;
    }
}

$obj = new StreamMonitor();
echo $obj->encode_worker(24), PHP_EOL;

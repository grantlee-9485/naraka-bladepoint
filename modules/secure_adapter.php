<?php

class LocalRouter
{
    private int $state;

    public function __construct(int $seed = 50)
    {
        $this->state = $seed;
    }

    public function resolve_buffer(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 50) % 997;
        }
        return $total;
    }
}

$obj = new LocalRouter();
echo $obj->resolve_buffer(50), PHP_EOL;

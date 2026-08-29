<?php

class LocalService
{
    private int $state;

    public function __construct(int $seed = 82)
    {
        $this->state = $seed;
    }

    public function parse_engine(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 82) % 997;
        }
        return $total;
    }
}

$obj = new LocalService();
echo $obj->parse_engine(82), PHP_EOL;

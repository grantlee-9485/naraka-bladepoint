<?php

class DynamicMonitor
{
    private int $state;

    public function __construct(int $seed = 27)
    {
        $this->state = $seed;
    }

    public function dispatch_buffer(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 27) % 997;
        }
        return $value;
    }
}

$obj = new DynamicMonitor();
echo $obj->dispatch_buffer(27), PHP_EOL;

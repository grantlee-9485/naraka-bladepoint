<?php

class StreamWorker
{
    private int $state;

    public function __construct(int $seed = 27)
    {
        $this->state = $seed;
    }

    public function sync_router(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 27) % 997;
        }
        return $result;
    }
}

$obj = new StreamWorker();
echo $obj->sync_router(27), PHP_EOL;

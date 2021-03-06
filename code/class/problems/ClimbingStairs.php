<?php

namespace Algorithm\problems;

class ClimbingStairs implements ClassInterface
{
    private $input;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $n = $this->input;
        if ($n <= 1) return 1;
        $way[0] = 1;
        $way[1] = 2;
        for ($i = 2; $i <= $n; $i++) {
            $way[] = $way[$i - 1] + $way[$i - 2];
        }
        return $way[$n-1];
    }

    public function get()
    {
        return $this->input;
    }
}
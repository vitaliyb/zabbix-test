<?php

namespace App\Problems\Classical\TreatsForTheCows;

use App\InputOutput\InputReader;

class Prompt
{
    private InputReader $reader;

    public function __construct(InputReader $reader)
    {
        $this->reader = $reader;
    }

    public function treatsCount(): int
    {
        return (int)trim($this->reader->readLine());
    }

    /**
     * @param int $treatsCount
     * @return array<int, int>
     */
    public function treatsValues(int $treatsCount): array
    {
        $treatsValues = [];
        for ($i = 0; $i < $treatsCount; $i++) {
            $treatsValues[] = (int)trim($this->reader->readLine());
        }

        return $treatsValues;
    }
}


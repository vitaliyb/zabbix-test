<?php

namespace Tests\Utilities;

use App\InputOutput\InputReader;

class TestInputReader implements InputReader
{
    /**
     * @var array<int, string>
     */
    private array $lines;
    private int $pos = 0;

    public function __construct(array $lines)
    {
        $this->lines = $lines;
    }

    public function readLine(): string
    {
        return $this->lines[$this->pos++] ?? '';
    }
}
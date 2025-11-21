<?php

namespace Tests\Unit\App\Problems\Classical\TreatsForTheCows;

use App\Problems\Classical\TreatsForTheCows\Prompt;
use PHPUnit\Framework\TestCase;
use Tests\Utilities\TestInputReader;

class PromptTest extends TestCase
{
    public function testTreatsCount(): void
    {
        $reader = new TestInputReader([5]);
        $prompt = new Prompt($reader);

        $this->assertSame(5, $prompt->treatsCount());
    }

    public function testTreatsValues(): void
    {
        $reader = new TestInputReader([10, 20, 30]);
        $prompt = new Prompt($reader);

        $this->assertSame([10, 20, 30], $prompt->treatsValues(3));
    }

    public function testTreatsValuesWithWhitespace(): void
    {
        $reader = new TestInputReader(["   700  \n"]);
        $prompt = new Prompt($reader);

        $this->assertSame([700], $prompt->treatsValues(1));
    }
}
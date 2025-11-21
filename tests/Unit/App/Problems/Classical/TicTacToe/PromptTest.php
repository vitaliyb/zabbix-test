<?php

namespace Tests\Unit\App\Problems\Classical\TicTacToe;


use App\Problems\Classical\TicTacToe\Prompt;
use PHPUnit\Framework\TestCase;
use Tests\Utilities\TestInputReader;

class PromptTest extends TestCase
{
    public function testItReadsCasesCount(): void
    {
        $prompt = new Prompt(new TestInputReader(['3']));
        $this->assertSame(3, $prompt->casesCount());
    }

    public function testItReadsCases(): void
    {
        $input = [
            'XXX',
            'OOO',
            '...',
        ];

        $prompt = new Prompt(new TestInputReader($input));
        $cases = $prompt->cases(1);

        $this->assertSame([
            'XXXOOO...'
        ], $cases);
    }

    public function testItReadsMultipleCases(): void
    {
        $input = [
            'XXX',
            'OOO',
            '...',

            'X..',
            'O..',
            'O.O',
        ];

        $prompt = new Prompt(new TestInputReader($input));
        $cases = $prompt->cases(2);

        $this->assertSame([
            'XXXOOO...',
            'X..O..O.O'
        ], $cases);
    }


}

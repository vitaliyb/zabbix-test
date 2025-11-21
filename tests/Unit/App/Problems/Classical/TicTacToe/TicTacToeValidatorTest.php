<?php

namespace Tests\Unit\App\Problems\Classical\TicTacToe;


use App\Problems\Classical\TicTacToe\TicTacToeValidator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class TicTacToeValidatorTest extends TestCase
{
    #[DataProvider('validCasesProvider')]
    public function testValidCases(string $cells): void
    {
        $game = new TicTacToeValidator();
        $this->assertTrue($game->isValid($cells));
    }

    #[DataProvider('invalidCasesProvider')]
    public function testInvalidCases(string $cells): void
    {
        $game = new TicTacToeValidator();
        $this->assertFalse($game->isValid($cells));
    }

    public static function validCasesProvider(): array
    {
        return [
            ['.........'],
            ['X........'],
            ['X.OOO.XXX'],
            ['OOXOOXXXX'],
            ['XX.X..OOO'],
            ['XOXO.OXOX'],
            ['XOXOXOXOX'],
            ['OXOXXXOXO'],
            ['OOXOXXXOX'],
            ['XXXXOOXOO'],
            ['..X.O.X..'],
            ['XXOXO.O..'],
            ['XXX..O..O'],
        ];
    }

    public static function invalidCasesProvider(): array
    {
        return [
            ['O........'],
            ['XX.......'],
            ['OO.......'],
            ['O.XXX.OOO'],
            ['XXXOXOXOX'],
            ['O.XXX.OOO...'],
            ['O.XXX.OOO.'],
            ['XXX.OOO..'],
            ['OX.OX.OX.'],
            ['X.OXXOX.O'],
            ['O.XOXXO.X'],
            ['XXOOOXOXX'],
            ['XXXOO...O'],
            ['XXXOOXOO.'],
            ['XXXOOO...'],
        ];
    }
}

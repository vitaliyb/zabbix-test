<?php


namespace App\Problems\Classical\TicTacToe;

class TicTacToeValidator
{
    public function isValid(string $cells): bool
    {
        $xCount = substr_count($cells, CellState::X->value);
        $oCount = substr_count($cells, CellState::O->value);

        $xWon = $this->hasWon(CellState::X, $cells);
        $oWon = $this->hasWon(CellState::O, $cells);

        if ($xWon && $oWon) {
            return false;
        }

        if ($xWon && $xCount - $oCount != 1) {
            return false;
        }

        if ($oWon && $xCount - $oCount != 0) {
            return false;
        }

        if ($xCount - $oCount < 0 || $xCount - $oCount > 1) {
            return false;
        }

        return true;
    }

    private function hasWon(CellState $cellState, string $cells): bool
    {
        $winningCombinations = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [0, 4, 8],
            [2, 4, 6],
        ];

        foreach ($winningCombinations as $combination) {
            if ($cells[$combination[0]] === $cellState->value &&
                $cells[$combination[1]] === $cellState->value &&
                $cells[$combination[2]] === $cellState->value
            ) {
                return true;
            }
        }

        return false;
    }
}




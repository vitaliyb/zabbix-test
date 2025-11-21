<?php

namespace App\Problems\Classical\TicTacToe;

enum CellState: string
{
    case EMPTY = '.';
    case X = 'X';
    case O = 'O';
}
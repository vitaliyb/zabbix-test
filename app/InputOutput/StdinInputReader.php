<?php

namespace App\InputOutput;

class StdinInputReader implements InputReader
{
    public function readLine(): string
    {
        return fgets(STDIN);
    }
}

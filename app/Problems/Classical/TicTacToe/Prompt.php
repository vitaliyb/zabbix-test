<?php

namespace App\Problems\Classical\TicTacToe;

use App\InputOutput\InputReader;

class Prompt
{
    private InputReader $reader;

    public function __construct(InputReader $reader)
    {
        $this->reader = $reader;
    }

    public function casesCount(): int
    {
        return (int)trim($this->reader->readLine());
    }

    /**
     * @return array<int, string>
     */
    public function cases(int $casesCount): array
    {
        $cases = [];
        for ($i = 0; $i < $casesCount; $i++) {
            $field = '';
            $rows = 0;

            while ($rows < 3) {
                $line = trim($this->reader->readLine());

                if ($line === '') {
                    continue;
                }

                $field .= $line;
                $rows++;
            }

            $cases[] = $field;
        }

        return $cases;
    }
}
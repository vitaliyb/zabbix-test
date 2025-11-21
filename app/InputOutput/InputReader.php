<?php

namespace App\InputOutput;

interface InputReader
{
    public function readLine(): string;
}
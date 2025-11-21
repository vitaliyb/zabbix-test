<?php
namespace App\Problems\Classical\TicTacToe;

use App\InputOutput\StdinInputReader;

require_once __DIR__ . '/../../../../vendor/autoload.php';

$prompt = new Prompt(new StdinInputReader());
$validator = new TicTacToeValidator();

$casesCount = $prompt->casesCount();
$cases = $prompt->cases($casesCount);

foreach($cases as $field) {
    echo $validator->isValid($field) ? "yes" : "no";
    echo "\n";
}
<?php

namespace App\Problems\Classical\TreatsForTheCows;

use App\InputOutput\StdinInputReader;

require_once __DIR__ . '/../../../../vendor/autoload.php';

$prompt = new Prompt(new StdinInputReader());
$treatsCount = $prompt->treatsCount();
$treatsValues = $prompt->treatsValues($treatsCount);

$maxRevenue = new MaxRevenue();
echo $maxRevenue->calculate($treatsCount, $treatsValues);

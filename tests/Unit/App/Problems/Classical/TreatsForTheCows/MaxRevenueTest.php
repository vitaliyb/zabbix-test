<?php

namespace Tests\Unit\App\Problems\Classical\TreatsForTheCows;

use App\Problems\Classical\TreatsForTheCows\MaxRevenue;
use PHPUnit\Framework\TestCase;

class MaxRevenueTest extends TestCase
{

    public function testItCalculates(): void
    {
        $maxRevenue = new MaxRevenue();

        $this->assertSame(43, $maxRevenue->calculate(5, [1, 3, 1, 5, 2]));
    }

    public function testItIsNotGreedy(): void
    {
        $maxRevenue = new MaxRevenue();

        $this->assertSame(50, $maxRevenue->calculate(5, [2, 3, 5, 1, 4]));
    }
}

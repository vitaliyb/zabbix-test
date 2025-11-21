<?php

namespace App\Problems\Classical\TreatsForTheCows;

class MaxRevenue
{

    private int $treatsCount;

    /**
     * @var array<int, int>
     */
    private array $treatsValues;

    /**
     * @var array<int, array<int, int>>
     */
    private array $cache;

    const DEFAULT_CACHE_VALUE = -1;

    public function calculate(int $treatsCount, array $treatsValues): int
    {
        $this->treatsCount = $treatsCount;
        $this->treatsValues = $treatsValues;
        $this->cache = $this->initCache($this->treatsCount);

        return $this->solve(0, $this->treatsCount - 1);
    }

    /**
     * @param int $treatsCount
     * @return array<int, array<int, int>>
     */
    private function initCache(int $treatsCount): array
    {
        return array_fill(0, $treatsCount, array_fill(0, $treatsCount, self::DEFAULT_CACHE_VALUE));
    }

    private function solve(int $left, int $right): int
    {
        if ($left > $right) {
            return 0;
        }

        if ($this->cache[$left][$right] !== self::DEFAULT_CACHE_VALUE) {
            return $this->cache[$left][$right];
        }

        $year = $this->treatsCount - ($right - $left);

        $leftRevenue = $this->treatsValues[$left] * $year + $this->solve($left + 1, $right);
        $rightRevenue = $this->treatsValues[$right] * $year + $this->solve($left, $right - 1);

        $max = max($leftRevenue, $rightRevenue);

        $this->cache[$left][$right] = $max;

        return $max;
    }
}

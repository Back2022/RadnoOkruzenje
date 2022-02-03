<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd(float $a, float $b,  float $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [1, 1, 2],
            [-2, 3, 1],
            [5.4, -1.4, 4],
            [10000000000000, 10000000000000, 20000000000000],
            [0.00000000000001, 0.00000000000001, 0.00000000000002]
        ];
    }
}
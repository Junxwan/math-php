<?php
namespace MathPHP\Tests\Statistics\Regression;

use MathPHP\Statistics\Regression\HanesWoolf;

class HanesWoolfTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider dataProviderForParameters
     */
    public function testGetParameters(array $points, $V, $K)
    {
        $regression = new HanesWoolf($points);
        $parameters = $regression->getParameters();
        $this->assertEquals($V, $parameters['V'], '', 0.0001);
        $this->assertEquals($K, $parameters['K'], '', 0.0001);
    }

    public function dataProviderForParameters(): array
    {
        return [
            [
                [ [.038, .05], [.194, .127], [.425, .094], [.626, .2122], [1.253, .2729], [2.5, .2665], [3.740, .3317] ],
                0.361512337, 0.554178955,
            ],
        ];
    }
}

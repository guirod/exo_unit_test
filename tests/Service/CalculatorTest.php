<?php
require '/var/www/html/back/exo_unit_test/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Guirod\ExoUnitTest\Service\ICalculator;
use Guirod\ExoUnitTest\Service\Calculator;
class CalculatorTest extends TestCase
{
    private ICalculator $calculator;
    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = Calculator::getInstance();
    }

    public static function testAddData():array
    {
        return [
            [0,0,0],
            [0.5,1.5,2],
            [5.4,-2.8,2.6],
            [10.5,-23.4,-12.9]
        ];
    }

    /**
     * @dataProvider testAddData
     * @return void
     */
    public function testAdd(float $nb1, float $nb2, float $expected)
    {
        $this->fail('TODO');
    }

    public function testSubstract(float $nb1, float $nb2, float $expected)
    {
        $this->fail('TODO');
    }

    public function testMultiply(float $nb1, float $nb2, float $expected)
    {
        $this->fail('TODO');
    }

    public function testDivide(float $nb1, float $nb2, float $expected)
    {
        $this->fail('TODO');
    }
}
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

    public static function testSubstractData():array
    {
        return [
            [0,0,0],
            [0.5,1.5,-1],
            [5.4,-2.8,8.2],
            [10.5,23.4,-12.9],
            [33,5,28]
        ];
    }

    public static function testMultiplyData():array
    {
        return [
            [0,0,0],
            [0.5,1.5,0.75],
            [5.4,-2.8,-15.12],
            [10.5,23.4,245.7],
            [33,5,165]
        ];
    }

    public static function testDivideData():array
    {
        return [
            [0,0,0],
            [0.5,1.5,0.33],
            [5.4,-2.8,-1.93],
            [10.5,23.4,0.45],
            [33,5,6.6],
            [10,2,5],
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

    /**
     * @dataProvider testSubstractData
     * @return void
     */
    public function testSubstract(float $nb1, float $nb2, float $expected)
    {
        $this->fail('TODO');
    }

    /**
     * @dataProvider testMultiplyData
     * @return void
     */
    public function testMultiply(float $nb1, float $nb2, float $expected)
    {
        $this->fail('TODO');
    }

    /**
     * @dataProvider testDivideData
     * @return void
     */
    public function testDivide(float $nb1, float $nb2, float $expected)
    {
        $this->fail('TODO');
    }
}
<?php
require '/var/www/html/back/exo_unit_test/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Guirod\ExoUnitTest\Service\ICalculator;
use Guirod\ExoUnitTest\Service\Calculator;
use Guirod\ExoUnitTest\Service\CalculatorException;
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
     * data provider dans le cas où on souhaiterait globaliser le jeu de données de test pour tous les calculs.
     */
    public static function testCalculatorData():array
    {
        return [
            [0,0],
            [0.5,1.5],
            [5.4,-2.8],
            [10.5,23.4],
            [33,5]
        ];
    }
    /**
     * @dataProvider testAddData
     * @return void
     */
    public function testAdd(float $nb1, float $nb2, float $expected)
    {
        $this->assertEquals($expected, $this->calculator->add($nb1,$nb2));
    }

    /**
     * @dataProvider testSubstractData
     * @return void
     */
    public function testSubstract(float $nb1, float $nb2, float $expected)
    {
        $this->assertEquals($expected, $this->calculator->substract($nb1,$nb2));
    }

    /**
     * @dataProvider testMultiplyData
     * @return void
     */
    public function testMultiply(float $nb1, float $nb2, float $expected)
    {
        $this->assertEquals($expected, $this->calculator->multiply($nb1,$nb2));
    }

    /**
     * Ici nous devrons gérer une erreur dans le cas de la division par 0
     * PHPUnit permet de faire des assertions sur les exceptions mais c'est un peu plus compliqué pour les erreurs. En effet, les erreurs devraient être gérées en amont.
     * Nous allons donc faire en sorte que notre service throw une exception en cas de division par 0
     * https://docs.phpunit.de/en/10.4/error-handling.html
     *
     * @dataProvider testDivideData
     * @return void
     */
    public function testDivide(float $nb1, float $nb2, float $expected)
    {
        if ($nb2 === 0.0) {
            $this->expectException(CalculatorException::class);
        }
        $this->assertEquals($expected, $this->calculator->divide($nb1,$nb2));
    }
}
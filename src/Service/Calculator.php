<?php
declare(strict_types=1);

namespace Guirod\ExoUnitTest\Service;

class Calculator implements ICalculator
{
    private static ?Calculator $instance = null;

    //On définit les fonctions __construct et __clone en private pour empêcher d'appeler directement ces fonctions
    private function __construct()
    {
    }
    private function __clone()
    {
    }

    public static function getInstance(): Calculator
    {
        if (self::$instance === null) {
            self::$instance = new Calculator();
        }

        return self::$instance;
    }

    /**
     * On va arrondir le return pour éviter les problème de précision des nombres à virgule flottante en programmation
     * Pour plus d'infos, voir : https://www.php.net/manual/en/language.types.float.php et https://floating-point-gui.de/
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function add(float $a, float $b): float
    {
        return round($a + $b, 2);
    }

    public function substract(float $a, float $b): float
    {
        return round($a - $b, 2);
    }

    public function multiply(float $a, float $b): float
    {
        return round($a * $b, 2);
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     * @throws CalculatorException
     */
    public function divide(float $a, float $b): float
    {
        try {
            return round($a / $b, 2);
        } catch(\DivisionByZeroError $e) {
            throw new CalculatorException();
        }
    }
}
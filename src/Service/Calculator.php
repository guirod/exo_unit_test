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

    public function getInstance(): Calculator
    {
        if (self::$instance === null) {
            self::$instance = new Calculator();
        }

        return self::$instance;
    }
}
<?php
declare(strict_types=1);

namespace Guirod\ExoUnitTest\Service;

interface ICalculator
{
    public function add(float $a, float $b): float;
    public function substract(float $a, float $b): float;
    public function multiply(float $a, float $b): float;
    public function divide(float $a, float $b): float;
    public function getInstance(): Calculator;
}
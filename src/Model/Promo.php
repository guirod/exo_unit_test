<?php
declare(strict_types=1);

namespace Guirod\ExoUnitTest\Model;
use Guirod\ExoUnitTest\Service\ICalculator;

class Promo
{
    private ICalculator $calculator;
    private array $eleves;
    private array $moyenneParMatiere;
    private float $moyenneGenerale;


    public function getEleves(): array
    {
        return $this->eleves;
    }

    public function setEleves(array $eleves): void
    {
        $this->eleves = $eleves;
    }

    public function getMoyenneParMatiere(): array
    {
        return $this->moyenneParMatiere;
    }

    public function setMoyenneParMatiere(array $moyenneParMatiere): void
    {
        $this->moyenneParMatiere = $moyenneParMatiere;
    }

    public function getMoyenneGenerale(): float
    {
        return $this->moyenneGenerale;
    }

    public function setMoyenneGenerale(float $moyenneGenerale): void
    {
        $this->moyenneGenerale = $moyenneGenerale;
    }
}
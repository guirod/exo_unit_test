<?php
declare(strict_types=1);

namespace Guirod\ExoUnitTest\Model;

use Guirod\ExoUnitTest\Service\ICalculator;

class Eleve
{
    private ICalculator $calculator;
    private string $nom;
    private array $moyenneParMatiere;
    private float $moyenneGenerale;

    public function __construct(ICalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
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
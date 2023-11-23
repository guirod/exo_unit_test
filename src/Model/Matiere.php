<?php
declare(strict_types=1);

namespace Guirod\ExoUnitTest\Model;

class Matiere
{
    private string $nom;
    private int $coeff;

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getCoeff(): int
    {
        return $this->coeff;
    }

    public function setCoeff(int $coeff): void
    {
        $this->coeff = $coeff;
    }
}
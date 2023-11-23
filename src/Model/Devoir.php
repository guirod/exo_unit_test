<?php
declare(strict_types=1);

namespace Guirod\ExoUnitTest\Model;
class Devoir
{
    private Matiere $matiere;
    private int $note;

    public function getMatiere(): Matiere
    {
        return $this->matiere;
    }

    public function setMatiere(Matiere $matiere): void
    {
        $this->matiere = $matiere;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function setNote(int $note): void
    {
        $this->note = $note;
    }
}
<?php

namespace App\Services;

class Projet
{
    public string $titre;
    public string $lienProjet;
    public string $lienDemo;
    public string $descrition;
    public string $classeRealisation;
    public string $anneeRealisation;
    public string $languageutlises;

    /**
     * @param string $titre
     */
    public function __construct(string $titre)
    {
        $this->titre = $titre;
    }
}
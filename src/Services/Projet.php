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
     * @param string $lienProjet
     * @param string $lienDemo
     * @param string $descrition
     * @param string $classeRealisation
     * @param string $anneeRealisation
     * @param string $languageutlises
     */
    public function __construct(string $titre, string $lienProjet, string $lienDemo, string $descrition, string $classeRealisation, string $anneeRealisation, string $languageutlises)
    {
        $this->titre = $titre;
        $this->lienProjet = $lienProjet;
        $this->lienDemo = $lienDemo;
        $this->descrition = $descrition;
        $this->classeRealisation = $classeRealisation;
        $this->anneeRealisation = $anneeRealisation;
        $this->languageutlises = $languageutlises;
    }
}

function getProjetVars():array
{
    $toReturn = [];
    $toReturn[]=new Projet
    ("Super Breaker",
    "https://github.com/SNEAXIII/Super_Breaker",
    "",
    "Super Breaker est une version modernisée du jeu Brick Breaker. Ce projet à été réalisé dans le cadre d'un"
    ." projet de NSI en terminale. Mon role au sein de ce projet de groupe à été de réaliser la partie backend"
    ." uniquement, je ne suis pas responsable de l'audio... Ce projet a été conçu en Programmation Orientée Objet, afin"
    ." de permettre une fluité dans le dévelloppement. La difficulté principale a été de faire les rebonds de la balle"
    ." sur sur la barre où j'ai du utiliser le théorème des barycentres dans mes calculs.",
    "1ère Terminale",
    2021,
    "Python 3"
    );
    $toReturn[]=new Projet
    ("Star Invader",
    "https://scratch.mit.edu/projects/636081295/fullscreen/",
    "",
    "Star Invader est une version modernisée du jeu Space Invader avec un thème Star Wars. Ce projet à été réalisé"
    ." suite à un défi de mon professeur de technologie. Scratch étant un langage de programmation assez particuler,"
    ." étonnement assez intuitif à prendre en main. N'ayant pas d'experience en programmation, ce projet à été un défi"
    ." intéressant à réaliser. Malgré mon manque d'experience, j'ai quand même réussi à imagiger des artifices pour"
    ."réaliser ce jeu.",
    "4ème",
    2017,
    "Scratch 2"
    );
    return $toReturn;
}
<?php

class Projet
{
    public string $titre;
    public string $lienProjet;
    public string $lienDemo;
    public string $description;
    public string $classeRealisation;
    public string $anneeRealisation;
    public string $languageUtlises;
    public string $lienImage;

    /**
     * @param string $titre
     * @param string $lienProjet
     * @param string $lienDemo
     * @param string $description
     * @param string $classeRealisation
     * @param string $anneeRealisation
     * @param string $languageUtlises
     * @param string $lienImage
     */
    public function __construct(string $titre, string $lienProjet, string $lienDemo, string $description, string $classeRealisation, string $anneeRealisation, string $languageUtlises, string $lienImage)
    {
        $this->titre = $titre;
        $this->lienProjet = $lienProjet;
        $this->lienDemo = $lienDemo;
        $this->description = $description;
        $this->classeRealisation = $classeRealisation;
        $this->anneeRealisation = $anneeRealisation;
        $this->languageUtlises = $languageUtlises;
        $this->lienImage = $lienImage;
    }
}
    function getProjetObjects():array
{
    $toReturn = [];
    $toReturn["SuperBreaker"]=new Projet
    (
        "Super Breaker",
        "https://github.com/SNEAXIII/Super_Breaker",
        "",
        "Super Breaker est une version modernisée du jeu Brick Breaker. Ce projet à été réalisé dans le cadre d'un"
        ." projet de NSI en terminale. Mon role au sein de ce projet de groupe à été de réaliser la partie backend"
        ." uniquement, je ne suis pas responsable de l'audio... Ce projet a été conçu en Programmation Orientée Objet, afin"
        ." de permettre une fluité dans le dévelloppement. La difficulté principale a été de faire les rebonds de la balle"
        ." sur sur la barre où j'ai du utiliser le théorème des barycentres dans mes calculs.",
        "1ère Terminale",
        2021,
        "Python 3",
        "images/projets/SuperBreaker/Menu_Super_Breaker.png"
    );
    $toReturn["StarInvader"]=new Projet
    (
        "Star Invader",
        "https://scratch.mit.edu/projects/636081295/fullscreen/",
        "",
        "Star Invader est une version modernisée du jeu Space Invader avec un thème Star Wars. Ce projet à été réalisé"
        ." suite à un défi de mon professeur de technologie. Scratch étant un langage de programmation assez particuler,"
        ." étonnement assez intuitif à prendre en main. N'ayant pas d'experience en programmation, ce projet à été un défi"
        ." intéressant à réaliser. Malgré mon manque d'experience, j'ai quand même réussi à imagiger des artifices pour"
        ."réaliser ce jeu.",
        "4ème",
        2017,
        "Scratch 2",
        "images/projets/SpaceInvader/Menu_Space_Invader.png"
    );
    $toReturn["SiteVitrine"] = new Projet
    (
        "Site Vitrine Fictif",
        "",
        "",
        "Ce projet a été réalisé pour un projet de site vitrine fictif. Il fallait imaginer un site qui présente l'entreprise, son histoire en bref, les services proposés",
        "1ère année de BTS SIO",
        2022,
        "PHP 8, HTML 5, CSS 3 et SQL",
        "images/projets/SiteVitrine/Menu_Site_Vitrine.png"
    );
    return $toReturn;
}
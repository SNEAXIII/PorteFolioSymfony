<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('printGlobVars', [$this, 'printGlobVars']),
            new TwigFunction('getGlobVars', [$this, 'getGlobVars']),
            new TwigFunction('getProjets', [$this, 'getProjets']),
        ];
    }

    public function printGlobVars($variableName): void
    {
        echo $GLOBALS[$variableName];
    }
    public function getGlobVars($variableName): mixed
    {
        return $GLOBALS[$variableName];
    }
    public function getProjets(): array
    {
        return getProjetObjects();
    }
}

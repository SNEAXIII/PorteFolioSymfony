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
        ];
    }

    public function printGlobVars($variableName): void
    {
        echo $GLOBALS[$variableName];
    }
}

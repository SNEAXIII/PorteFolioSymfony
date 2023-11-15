<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CustomExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('getIcon', [$this, 'getIcon']),
        ];
    }

    public function getIcon($path, $color)
    {
        echo'<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
    <style> svg {fill:'.$color.'}
    </style>
    <path d='.$path.'/>
    </svg>';
    }
}
<?php
namespace App\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use function App\Services\getProjetVars;

class globalVarTwig implements EventSubscriberInterface
{
    public function onKernelController(ControllerEvent  $event)
    {
        foreach (getIconVars() as $id => $icon)
        {
            $GLOBALS[$id] = $icon;
        }
        foreach (getProjetVars() as $id => $projet)
        {
            $GLOBALS[$id] = $projet;
        }

    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}
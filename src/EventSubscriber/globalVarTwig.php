<?php
namespace App\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class globalVarTwig implements EventSubscriberInterface
{
    public function onKernelController(ControllerEvent  $event)
    {
        foreach (getIconVars() as $id => $icon)
        {
            $GLOBALS[$id] = $icon;
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}
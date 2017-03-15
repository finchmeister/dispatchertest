<?php

namespace Test;

use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class OrderConfirmationSubscriber
 * @package AppBundle\EventSubscriber
 */
class OrderPlacedSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            'testEventName' => [
                ['onOrderConfirmation', 10],
                ['onOrderConfirmationTwo', 11],
            ],
            'test2EventName' => 'onOrderConfirmationTwo',
        ];
    }

    public function onOrderConfirmation(GenericEvent $event)
    {
        echo 'Hello ';
        echo $event['name'];
        echo ' ('. __FUNCTION__ . ')';
        echo PHP_EOL;
    }

    public function onOrderConfirmationTwo(GenericEvent $event)
    {
        echo 'I\'m fed up with this ';
        echo $event['name'];
        echo ' ('. __FUNCTION__ . ')';
        echo PHP_EOL;
    }
}
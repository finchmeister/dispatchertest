<?php
$loader = require __DIR__ . '/vendor/autoload.php';
// Initialise the dispatcher
$dispatcher = new \Symfony\Component\EventDispatcher\EventDispatcher();

// Get the appropriate subscriber, we need this to add to the dispatcher
$subscriber = new \Test\OrderPlacedSubscriber();
$dispatcher->addSubscriber($subscriber);

// Get a generic event
$event = new \Symfony\Component\EventDispatcher\GenericEvent();
// Add context, we would typically extend the event object to do this
$event['name'] = 'world';

echo 'dispatch test2EventName' . PHP_EOL;
$dispatcher->dispatch('test2EventName', $event);

echo 'dispatch testEventName' . PHP_EOL;
$dispatcher->dispatch('testEventName', $event);
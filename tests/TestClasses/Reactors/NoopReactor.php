<?php

namespace Spatie\EventSourcing\Tests\TestClasses\Reactors;

use Illuminate\Support\Facades\Mail;
use Spatie\EventSourcing\EventHandlers\EventHandler;
use Spatie\EventSourcing\EventHandlers\HandlesEvents;
use Spatie\EventSourcing\Tests\TestClasses\Events\MoneySubtractedEvent;
use Spatie\EventSourcing\Tests\TestClasses\Mailables\AccountBroke;

class NoopReactor implements EventHandler
{
    use HandlesEvents;

    protected array $handlesEvents = [
        MoneySubtractedEvent::class => 'onMoneySubtracted',
    ];

    public function onMoneySubtracted(MoneySubtractedEvent $event)
    {
        // Does nothing.
    }
}

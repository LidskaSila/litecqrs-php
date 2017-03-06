<?php

namespace LidskaSila\Glow\Eventing;

use Lidskasila\Glow\DefaultDomainEvent;

class EventExecutionFailed extends DefaultDomainEvent
{

	public $service;

	public $exception;

	public $event;
}


<?php

namespace LiteCQRS\EventStore;

use LiteCQRS\AggregateRoot;
use Ramsey\Uuid\Uuid;

class EventSourcedAggregate extends AggregateRoot
{

	public $eventApplied = false;

	public function __construct(Uuid $uuid)
	{
		$this->setId($uuid);
	}

	protected function applyTest(TestEvent $event)
	{
		$this->eventApplied = true;
	}
}

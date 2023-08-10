<?php

declare(strict_types=1);

namespace Blulantern\Architect\Model\Rooms;

use Blulantern\Architect\Model\Features\BathTub;
use Blulantern\Architect\Model\Features\Shower;
use Blulantern\Architect\Model\Features\Sink;

class Bathroom extends Room {
    private array $bathTubs;

    public function __construct(
        Sink ...$sinks,
        Shower ...$showers,
        BathTub ...$bathTubs,
    )
    {

    }
    public function isFull(): bool 
    {
        return;
    }

    public function hasTub(): bool
    {

    }

    public function has
}
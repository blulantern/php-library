<?php

declare(strict_types=1);

namespace Blulantern\Architect\Model\Rooms;

use Blulantern\Architect\Interface\RoomInterface;

abstract class Room implements RoomInterface {
    private $id;
    protected float $sqFt;
    protected array $windows;

    public function getSqFt(): float 
    {
        return $this->sqFt;
    }
    public function setSqFt() 
    {

    }
}
<?php 

declare(strict_types=1);

namespace Blulantern\Architect\Model\Rooms;

use Blulantern\Architect\Model\Features\Closet;

class Bedroom extends Room {
    private bool $master;
    private Bathroom $bathroom;
    private array $closets;

    public function __construct(
        Closet ...$closets,
        Bathroom $bathroom = null, 
    )
    {
        $this->closets = $closets;
        $this->bathroom = $bathroom;
    }
    public function isMaster(): bool
    {
        return $this->master;
    }

    public function hasBathroom(): bool
    {
        return !empty($this->bathroom);
    }
}
?>
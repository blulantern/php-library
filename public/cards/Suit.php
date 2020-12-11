<?php
require_once('SuitInterface.php');

class Suit implements iSuit {
    private $name;
    private $color;

    public function __construct(string $name, string $color)
    {
        $this->setSuitName($name);
        $this->setSuitColor($color);
    }

    public function setSuitName(string $name)
    {
        $this->name = $name;
    }
    
    public function getSuitName():string
    {
        return $this->name;
    }
    
    public function setSuitColor(string $color)
    {
        $this->color = $color;
    }

    public function getSuitColor():string
    {
        return $this->color;
    }

    public function getSuitCards():array
    {

    }
    
    public function getSuitCardCount():int
    {

    }
}
?>
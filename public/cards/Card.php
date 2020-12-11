<?php

require_once('CardInterface.php');

abstract class Card implements iCard {
    private $suit;
    private $value;
    private $name;

    public function __construct(int $value, string $name = null, Suit $suit = null)
    {
        $this->setValue($value);
        if (!is_null($name)) {
            $this->setName($name);
        }
        if (!is_null($suit)) {
            $this->setSuit($suit);
        }
    }
    public function setValue(int $value)
    {
        $this->value = $value;
    }
    public function getValue():int
    {
        return $this->value;
    }
    public function setName(string $name): string
    {
        $this->name = $name;
        return $this->name;
    }
    public function getName():string
    {
        return $this->name;
    }
    public function setSuit(Suit $suit)
    {
        $this->suit = $suit;
    }
    public function getSuit():Suit
    {
        return $this->suit;
    }
}
?>
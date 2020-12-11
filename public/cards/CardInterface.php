<?php 

interface iCard {
    public function setValue(int $value);
    public function getValue():int;
    public function setName(string $name): string;
    public function getName():string;
    public function setSuit(Suit $suit);
    public function getSuit():Suit;
}
?>
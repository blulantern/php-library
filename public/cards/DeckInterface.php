<?php 

interface iDeck {
    public function dealCard();
    public function addCard(Card $card):void;
    public function getCardCount():int;
    public function getSuits():array;
}
?>
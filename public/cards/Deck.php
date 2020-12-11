<?php 
require_once('DeckInterface.php');
require_once('Suit.php');
require_once('Card.php');
require_once('NumberCard.php');
require_once('FaceCard.php');
require_once('WildCard.php');

class Deck implements iDeck {
    private $cards = array();
    private $cardCount = 0;
    private $suits = array();

    
    public function __construct()
    {
    }
    
    public function dealCard()
    {
    }

    public function addCard(Card $card):void
    {
        $this->cards[] = $card;
    }
    
    public function getCardCount():int
    {
        return count($this->cards);
    }

    public function getSuits():array 
    {
        return $this->suits;
    }

    public function printCards()
    {
        echo '<pre>';
        print_r($this->cards);
        echo '</pre>';
    }
}
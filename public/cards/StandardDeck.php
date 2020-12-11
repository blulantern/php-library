<?php 
require_once('DeckInterface.php');
require_once('Suit.php');
require_once('Card.php');
require_once('NumberCard.php');
require_once('FaceCard.php');
require_once('WildCard.php');

class StandardDeck implements iDeck {
    private $cards = array();
    private $cardCount = 0;
    private $suits = array();

    
    public function __construct()
    {
        $this->generateStandardDeck();
    }
    
    public function dealCard()
    {

    }

    public function addCard(Card $card):void
    {
        $this->cards[] = $card;
    }

    public function generateStandardDeck()
    {
        $this->createStandardSuits();
        $this->addStandardNumberCards();
        $this->addStandardFaceCards();
        $this->addStandardWildCards();
        shuffle($this->cards);        
    }
    
    private function createStandardSuits()
    {
        $this->suits[] = new Suit('Diamonds', 'Red');
        $this->suits[] = new Suit('Clubs', 'Black');
        $this->suits[] = new Suit('Hearts', 'Red');
        $this->suits[] = new Suit('Spades', 'Black');
    }

    private function addStandardNumberCards()
    {
        foreach ($this->suits as $suit)
        {
            for ($i = 1; $i <= 10; ++$i)
            {
                $card = new NumberCard($i, null, $suit);
                $this->addCard($card);
            }
        }
    }

    private function addStandardFaceCards()
    {
        foreach ($this->suits as $suit)
        {
            $jack = new FaceCard(11, 'Jack', $suit);
            $queen = new FaceCard(12, 'Queen', $suit);
            $king = new FaceCard(13, 'King', $suit);
            $this->addCard($jack);
            $this->addCard($queen);
            $this->addCard($king);
        }
    }

    private function addStandardWildCards()
    {
        $littleJoker = new WildCard(14, 'Little Joker');
        $bigJoker = new WildCard(15, 'Big Joker');
        $this->addCard($littleJoker);
        $this->addCard($bigJoker);
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
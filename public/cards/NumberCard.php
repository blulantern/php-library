<?php
require_once('CardInterface.php');
require_once('NumberCardInterface.php');
require_once('Card.php');
require_once('Suit.php');
class NumberCard extends Card implements iNumberCard { 
    public function __construct(int $value, string $name = null, Suit $suit = null)
    {
        parent::__construct($value, $name, $suit);
        $this->createName();
    }

    private function createName():string
    {
        $suit = $this->getSuit();
        if($this->getValue() === 1) {
            $name = "Ace of {$suit->getSuitName()}";     
        } else {
            $name = "{$this->getValue()} of {$suit->getSuitName()}"; 
        }
        return $this->setName($name);
    }
}  
?>
<?php
require_once('CardInterface.php');
require_once('FaceCardInterface.php');
require_once('Card.php');
require_once('Suit.php');
class FaceCard extends Card implements iFaceCard { 
    public function __construct(int $value, string $name = null, Suit $suit = null)
    {
        parent::__construct($value, $name , $suit);
        $this->createName();
    }

    private function createName():string
    {
        $suit = $this->getSuit();
        $name = "{$this->getName()} of {$suit->getSuitName()}"; 
        return $this->setName($name);
    }
}  
?>
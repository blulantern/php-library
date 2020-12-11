<?php

require_once('CardInterface.php');
require_once('Card.php');
require_once('Suit.php');
class WildCard extends Card { 
    public function __construct(int $value, string $name = null, Suit $suit = null)
    {
        parent::__construct($value, $name, $suit);
    }
}  

?>
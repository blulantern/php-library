<?php
require('StandardDeck.php');

$deck = new StandardDeck();
echo $deck->getCardCount();
$deck->printCards(); 

?>
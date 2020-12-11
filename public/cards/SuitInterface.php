<?php
interface iSuit {
    public function getSuitName():string;
    public function setSuitName(string $name);
    public function getSuitColor():string;
    public function setSuitColor(string $color);
    public function getSuitCards():array;
    public function getSuitCardCount():int;
}
?>
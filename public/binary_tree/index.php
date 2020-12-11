<?php 
require "binary_tree.php";

//$array = [0,1,2,3,4,5,6,7,8,9,10];
$array = [6,3,2,9,4,10,5,7,8,1];
$tree = new BinaryTree($array);
$tree->printTreeHtml();


?>
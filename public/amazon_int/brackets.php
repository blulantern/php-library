<?php
/* For a given string consisting of the sequence of characters, write an algorithm to check whether the brackets in the string are balanced or not. it the brackets in the string are balanced then the output is 1 otherwise 0.
Test '(h[e{l<l>o}!]~)()()()('
open[]= ['(','[','{','<','(','(','(',]

*/

/*
steps:
create hash map of corresponding brackets {open:closed}
{
    '(':')',
    '{':'}',
    '[':']',
    '<':'>'
}
run through string
open.push()
closed.shift() 
create array for open and closed

when is a string unbalanced
level 1:
open.length != closed.length
level 2:
check hashmap:
hash[open[n]] != closed[closed[n]]; 
*/

function isBalanced($str)
{
    $bracketMap = [
        '('=>')',
        '{'=>'}',
        '['=>']',
        '<'=>'>',
    ];
    $chars = str_split($str);
    $openStack = [];
    foreach ($chars as $char) {
        if ( $char == '(' || $char == '{' || $char == '[' || $char == '<') {
            $openStack[] = $char;
        }
        if ( $char == ')' || $char == '}' || $char == ']' || $char == '>') {
            if (isEmpty($openStack)){
                return false;
            }
            $popChar = array_pop($openStack);
            if ( $bracketMap[$popChar] != $char ) {
                return false;
            }
        }
    }

    return isEmpty($openStack);

}


?>
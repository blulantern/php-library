<?php

class BinaryTree {
    private $data;
    private $root;
    private $treeDepth;
    private $nodeCount;
    
    public function __construct(
        array $data
    ){
        $this->root = null;
        $this->depth = 0;
        $this->nodeCount = 0;
        $this->data = $data;
        $this->createTree();
    }

    public function isEmpty()
    {
        return $this->root === null;
    }

    private function createTree()
    {
        foreach($this->data as $data){
            $this->insertData($data);
        }
    }

    public function insertData(int $data)
    {
        $node = new Node($data);
        //if node is empty set as tree root
        if ($this->isEmpty() ) {
            $this->root = $node;
            $this->root->setLevel(1);
            $this->depth++;
            $this->nodeCount++;
        //else insertnode
        } else {
            return $this->insertNode($node, $this->root);
        }
    }
    private function insertNode(Node $node, Node $current = null)
    {
        $inserted = false;
        while($inserted === false) {
            //if node is less than current node being traversed check if node has a left child
            if ($node->getData() < $current->getData()) {
                //if node doesn't have a left child set as left child
                if($current->getLeft() === null) {
                    $currentLevel = $current->getLevel();
                    $node->setLevel(++$currentLevel);
                    $current->setLeft($node);
                    $inserted = $node;
                    ++$this->nodeCount;
                    break;
                //otherwise walk to next level 
                } else {
                    $current = $current->getLeft();
                    return $this->insertNode($node, $current);
                }
            }
            //if node is greater than current node being traversed check if node has a right child
            elseif ($node->getData() > $current->getData()) {
                //if node doesn't have right child set as right child
                if($current->getRight() === null) {
                    $currentLevel = $current->getLevel();
                    $node->setLevel(++$currentLevel);
                    $current->setRight($node);
                    $inserted = $node;
                    ++$this->nodeCount;
                    break;
                //otherwise walk to next level
                } else {
                    $current = $current->getRight();
                    return $this->insertNode($node, $current);
                }
            } else {
                break;
            }
        }
        return $inserted;
    }
    public function printTree()
    {
        $current = $this->root;
        $this->printBranches($current, $current->getLeft(), $current->getRight());
    }
    public function printTreeHtml()
    {
        echo "<pre>";
        print_r($this->root);
        echo "</pre>";
    }

    private function printBranches(Node $node, Node $left = null, Node $right = null)
    {
        $nodeLevel = $node->getLevel();
        echo str_repeat("-", $node->getLevel());
        echo $node->getData();
        if (!is_null($left)) {
            $this->printBranches($left, $left->getLeft(), $left->getRight());
        }
        if (!is_null($right)) {
            $this->printBranches($right, $right->getLeft(), $right->getRight());
        }
    }
}

class Node {
    private $data;
    private $left;
    private $right;
    private $parentNode;
    private $level;

    public function __construct(int $data)
    {
        $this->data = $data;
    }

    public function getParentNode(): ?Node
    {
        return $this->parentNode;
    }
    private function setParentNode(Node $node)
    {
        $this->parentNode = $node;
    } 

    public function getLeft(): ?Node
    {
        return $this->left;
    }
    public function setLeft(Node $node)
    {
        $node->setParentNode($this);
        $this->left = $node;
    }
    public function getRight(): ?Node
    {
        return $this->right;
    }
    public function setRight(Node $node)
    {
        $node->setParentNode($this);
        $this->right = $node;
    }

    public function getData(): int
    {
        return $this->data; 
    }

    public function setdata(int $data)
    {
        $this->data = $data;
    }

    public function setLevel(int $level)
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }
    public function hasChildren()
    {
        return !is_null($this->getLeft()) || !is_null($this->getRight()); 
    }
}

interface InterfaceNode {

}

class NodeDataEqualException extends Exception {

}
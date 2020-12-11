<?php

class Node {
    private $data;
    private $children;
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

    public function getChildren(): ?array
    {
        return $this->children;
    }
    public function setChild(Node $node)
    {
        $node->setParentNode($this);
        $this->children[] = $node;
    }
    public function getData(): int
    {
        return $this->data; 
    }

    public function setdata(int $data)
    {
        $this->data = $data;
    }
    public function hasChildren()
    {
        return !is_null($this->children()); 
    }
}
?>
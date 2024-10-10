<?php

require_once __DIR__ . '/products.php';

class Category {
    private $name;

    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }

    /*
        Getters & Setters
    */

    public function getName() : string {
        return $this->name;
    }
    
}
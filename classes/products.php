<?php

class Product {
    private $title;
    private $image;
    private $price;
    private $description;
    
    public function __construct(
        string $title,
        string $image,
        int $price,
        string $description
    ) {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->description = $description;
    }

    public function getTitle() : string {
        return $this->title;
    }

    public function getImage() : string {
        return $this->image;
    }

    public function getPrice() : int {
        return $this->price;
    }

    public function getDescription() : string {
        return $this->description;
    }
}
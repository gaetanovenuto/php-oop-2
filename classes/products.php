<?php

class Product {
    
    use HasTitle;

    private $image;
    private $price;
    private $description;
    
    public function __construct(
        string $title,
        string $image,
        int $price,
        string $description
    ) {
        $this->setTitle($title);
        $this->image = $image;
        $this->price = $price;
        $this->description = $description;
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

class TitleTooShortError extends Exception {

}

trait HasTitle {
    protected $title;

    public function getTitle() {
        return $this->title;
    }

    public function setTitle(string $title) {
        if (strlen($title) >= 3) {
            $this->title = $title;
        } else {
            throw new TitleTooShortError('titolo troppo corto. Deve essere almeno 3 caratteri');
        }
    }
}

try {
    $cibo = new Product('', 'Immagine', 20, 'Descrizione');

    var_dump($cibo);
}
catch(TitleTooShortError $e) {
    var_dump($e);
    echo '<h4 style="color: red;">ERRORE TITOLO: '.$e->getMessage().'</h4>';
}
catch(Exception $e) {
    echo '<h4 style="color: red;">ERRORE: '.$e->getMessage().'</h4>';
}

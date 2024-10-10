<?php

require_once __DIR__.'/classes/categories.php';
require_once __DIR__.'/classes/products.php';

// Creazione categoria cani

$dogCategory = new Category('Dogs');

// Creazione categoria gatti

$catCategory = new Category('Cats');

// Prodotti per cane

$dogProducts = [
    new Product('Edgar & Cooper Crocchette Cani', './img/dog_food.jpg', 28, 'Cibo naturale per cuccioli con un mix di carne fresca riempita con gustose proteine di qualità.'),
    new Product('Chuckit Cane Ultra Ball', './img/dog_toy.jpg', 4, 'Chuckit Ultra Ball gomma resistente e durevole'),
    new Product('Lionto Letto per Cani', './img/dog_bed.jpg', 25, 'Questo letto per cani particolarmente morbido e comodo non può mancare in nessuna casa.')
];

// Prodotti per gatto

$catProducts = [
    new Product('Edgard & Cooper Cibo umido per gatti', './img/cat_food.jpg', 27, 'I nostri deliziosi bocconcini in salsa faranno fremere le papille gustative del vostro gatto.'),
    new Product('Trixie 41345 - Torre giocattolo Catch the Balls', './img/cat_toy.jpg', 8, 'Con palline in plastica rimovibili.'),
    new Product('XIAPIA Cuccia per Gatti Coperta Autoriscaldante', './img/cat_bed.jpg', 15, 'Cuccia autoriscaldata per gatti composta da 4 strati.')
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- CSS -->
     <link rel="stylesheet" href="style.css">

    <title>E-Commerce Animal Shop</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">
            Animal Shop
        </h1>
        <div class="row dog-products justify-content-between">
                <h3 class="text-center">
                    Cani
                </h3>
            <?php foreach ($dogProducts as $dogProduct) : ?>
                <div class="product-card col-3">
                    <img src="<?php  echo $dogProduct->getImage() ?>" alt="<?php $dogProduct->getTitle() ?>">
                    <h3 class="title">
                        <?php
                            echo $dogProduct->getTitle()
                        ?>
                    </h3>
                    <div class="price"> €
                        <?php 
                            echo $dogProduct->getPrice()
                        ?>
                    </div>
                    <div class="description">
                        <?php 
                            echo $dogProduct->getDescription()
                        ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="row cat-products justify-content-between">
                <h3 class="text-center py-2">
                    Gatti
                </h3>
            <?php foreach ($catProducts as $catProduct) : ?>
                <div class="product-card col-3">
                    <img src="<?php echo $catProduct->getImage() ?>" alt="<?php $catProduct->getTitle() ?>">
                    <h3 class="title">
                        <?php
                            echo $catProduct->getTitle()
                        ?>
                    </h3>
                    <div class="price"> €
                        <?php 
                            echo $catProduct->getPrice()
                        ?>
                    </div>
                    <div class="description">
                        <?php 
                            echo $catProduct->getDescription()
                        ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
</body>
</html>
<?php require 'views/partials/header.view.php' ?>


    <div class="container">
        <h1>Products</h1>
        <ul>
    <?php foreach ($products as $product) : ?>
        <li>Name:<?= $product->name ?></li>
        <li>ID<?= $product->id ?></li>

    <?php endforeach ?>
    
    </ul>

    </div>

<?php require 'views/partials/footer.view.php' ?>
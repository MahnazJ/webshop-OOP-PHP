<?php require 'views/partials/header.view.php' ?>


    <div class="container">
        <h1 class="text-center mt-3 mb-2 buttonstyle">Current Products to edit or delete</h1>
        <ul>
    <?php foreach ($products as $product) : ?>
        <li class="text-center mt-3 mb-2 buttonstyle">Name:<?= $product->name ?>
        <li class="text-center mt-3 mb-2 buttonstyle">ID<?= $product->id ?> 
        <button><a href="/products/edit">Edit</a></button></li></li>



    <?php endforeach ?>
    
    </ul>

    </div>

<?php require 'views/partials/footer.view.php' ?>
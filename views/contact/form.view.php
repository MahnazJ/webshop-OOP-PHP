<?php require 'views/partials/header.view.php' ?>
<div class="container">
<h1 class="text-center mt-3 mb-2 buttonstyle">Contact Us</h1>

<form method="POST" name="frmContact" class="register-form" onsubmit="return false;">
            <?= generateFormTokenHTML() ?>

            <div class="form-group mb-2">
                <label for="email" class="form-label register-form text-style">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="" required />
            </div>

            <div class="form-group mb-2">
                <label for="password" class="form-label register-form text-style">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" required />
            </div>


</div>
<?php require 'views/partials/footer.view.php' ?>



<?php require 'views/partials/header.view.php'?>

<div class="login-overlay">
    
   
    <div class="container mb-6 register-container">
        <h1 class="text-center mt-3 mb-2 buttonstyle">Login</h1>
          

        <form method="POST" name="frmLogin" class="register-form" onsubmit="return false;">
            <?= generateFormTokenHTML() ?>

            <div class="form-group mb-2">
                <label for="email" class="form-label register-form text-style">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email" required />
            </div>

            <div class="form-group mb-2">
                <label for="password" class="form-label register-form text-style">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password" required />
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn text-style" value="Login" />
                    </div>
                    <div class="col-md-6">
                        <div id="login-message"></div>
                    </div>
                </div>
            </div>

            <div>         
                <p class="register-form text-style"> Don't have an account yet?
                    <a href="/register">Register instead </a>
                </p>       
            </div> 
        </form>
    </div>
</div>


<script src="public/js/partials/login.js"></script>

<?php require 'views/partials/footer.view.php' ?>







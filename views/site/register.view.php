<?php require 'views/partials/header.view.php'?>
<div class="login-overlay">
    
        
            <div class="container mb-6 register-container">
            <h1 class="text-center mt-3 mb-2 buttonstyle">Register</h1>

            <form class="register-form" method="<?= $method ?>" onsubmit="return false;" name="frmRegister">
            
            <div class="form-group">
                <label for="first_name" class="form-label register-form text-style">First Name </label>
                <input type="text" name="first_name" class="form-control" id="first_name" maxlength="80" placeholder="First name" required> 
            </div>

            <div class="form-group">
                <label for="last_name" class="form-label register-form text-style"> Last Name </label>
                <input type="text" name="last_name" class="form-control" id="last_name" maxlength="80" placeholder="Last name" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label register-form text-style">Email </label>
                <input type="email" name="email" class="form-control" id="email" maxlength="255" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="password" class="register-form text-style">Password </label>
                <input type="password" name="password" class="form-control" id="password" maxlength="50" placeholder="Password" required>
            </div>

            <div>       
            <label for="password_2" class="register-form text-style">Repeat Password </label>
                <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50" placeholder="Repeat password"required>
            </div>

                <input type="hidden" name="f_token" value="<?= createToken() ?>">

                <input type="submit" class="btn text-style submit-button" value="Submit">
                <input type="button" class="btn text-style submit-button" id="register-cancel" value="Cancel">

            
            <div>         
                <p class="register-form text-style"> Already have an account?
                    <a href="/login"> Login instead </a>
                </p>       
            </div>


            </form>
        </div>

</div>
<script src="public/js/partials/register.js"></script>

<?php require 'views/partials/footer.view.php' ?>


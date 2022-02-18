<?php require 'views/partials/header.view.php' ?>


<div class="login-overlay">
    
<div class="container mb-6 register-container">
    <h1 class="text-center mt-3 mb-2 buttonstyle">Contact Us</h1>

    <form method="POST" name="frmContact" class="register-form" onsubmit="return false;">
            <?= generateFormTokenHTML() ?>

            <div class="form-group mb-2">
                <label for="first_name" class="form-label register-form text-style">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required />
            </div>

            <div class="form-group mt-1">
                <label for="last_name" class="form-label register-form text-style">Last Name</label>
                <input type="test" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required />
            </div>

            <div class="form-group mb-1">
                <label for="email" class="form-label register-form text-style">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
            </div>

            <div class="form-group mb-1">
                <label for="subject" class="form-label register-form text-style">Subject</label>
                <input type="subject" class="form-control" name="subject" id="subject" placeholder="Subject" required />
            </div>
             
            <div class="form-group mb-1">
                  <label for="content" class="form-label register-form text-style">Message</label> 
                     <span id="userMessage-info" class="info"></span><br/>
                   <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea>
            </div>

            <input class="btn text-style" type="Submit" name="submit" value="Submit">

    </form>


</div>


<script src="public/js/partials/contact.js"></script>
<?php require 'views/partials/footer.view.php' ?>



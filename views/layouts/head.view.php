<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $_ENV['APP_NAME'] ?></title>
  
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/croppedlogo.png">
    <link rel="manifest" href="/public/images/site.webmanifest">

    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/cart.css">

    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/vue/dist/vue.min.js"></script>
    <script src="/node_modules/axios/dist/axios.min.js"></script>
    
    <script src="/public/js/components/cart.js"></script>
    <script src="/public/js/components/products.js"></script>

    <link rel="stylesheet" href="/public/css/main.css"/>
    <link rel="stylesheet" href="/public/css/cart.css"/>
    <link rel="stylesheet" href="/public/css/newstyle.css"/>
    <link rel="stylesheet" href="/public/css/images.css"/>
    <link rel="stylesheet" href="/public/css/headerfooter.css"/>
    <link rel="stylesheet" href="/public/css/buttons.css"/>
    <link rel="stylesheet" href="/public/css/navbar.css"/>
    <link rel="stylesheet" href="/public/css/registerlogin.css"/>


</head>
<body>    
    <main id="app" class="content">
        <div class="layer" @click="closeShoppingCart"></div>
        <div class="container-fluid p-0">
            
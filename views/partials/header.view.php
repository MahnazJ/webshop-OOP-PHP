<div class="container-fluid">
            <div class="row">
                    <div class="col header p-3">
                        <header class="text-center">
            
                            <h1>
                                <p class="header-text">ToyShop</p>
                            </h1>
            
                         </header>
                    </div>
            
            
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                                    <a class="navbar-brand" href="?page=home">
                                    <img src="/public/images/webshop/logo_small_icon_only.png" alt="" width="100" height="100">
                                    </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon">

                                    </span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                                            <li class=" nav-item">
                                                <a class="nav-link active nav-button" aria-current="page" href="?page=home">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-button" href="?page=shop">Shop</a>
                                            </li>
            
                                            <li class="nav-item">
                                                <a class="nav-link nav-button" href="?page=contact">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link nav-button" href="?page=aboutus">About Us</a>
                                            </li>
            
            
                                            <li class="nav-item dropdown">
                                                <a class="nav-link nav-button dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Account
                                                </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a class="dropdown-item button-style text-style" href="?page=register">Register</a></li>
                                                <li>
                                                    <a class="dropdown-item button-style text-style" href="?page=login">Login</a></li>
                                                <li>
                                   
                                                </li>
                                      
                                            </ul>
                                        </li>

                                            
                                        <li class="nav-item">                                  
                                             <?= fullNameFromSession() ?>
                                             <shopping-cart ref="shoppingCart"></shopping-cart>
                                       
                                        </li>
                                        </ul>
                             
    
                                    <form class="d-flex">
                                        <input class="form-control me-1 text-style" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn searchbutton text-style" type="submit">Search</button>
                                    </form>
                                </div>
            
                            </nav>
                        </div>
            
                    </div>
            </div>

       

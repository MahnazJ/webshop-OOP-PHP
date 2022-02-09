<?php


namespace App\Controllers;

use App\Libraries\MySql;
use App\Libraries\Request;
use App\Libraries\View;
use Exception;
use PDO;



class ProductsaleController{


 public function index()
    {
        return View::render('site/productsale.view');
}};
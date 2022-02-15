<?php



namespace App\Controllers;

use App\Libraries\MySql;
use App\Libraries\Request;
use App\Libraries\View;
use Exception;
use PDO;
use App\Models\ProductModel;
use App\Models\ProductSaleModel;

class ProductSaleController extends Controller
{

    public function index()
    {
        return View::render('site/productsale.view');
    }

    public function products()
    {
        if (!Request::ajax()) {
            return;
        }

        try {
            $productsale = new ProductSaleModel;
            $productsale = $productsale->all();

            $success = true;
            $message = "Success";
        } catch (Exception $e) {
            $productsale = null;
            $success = false;
            $message = $e->getMessage();
        }

        echo json_encode([
            'success'   => $success,
            'message'   => $message,
            'products'  => $products,
        ]);
    }
}

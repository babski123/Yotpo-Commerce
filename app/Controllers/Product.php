<?php
/**
 * Yotpo Commerce
 * Path: app/Controllers/Product.php
 * Author: eleazer.ababa181@gmail.com
 * Description: The controller that handles the product details page
 */

namespace App\Controllers;
use App\Models\StoreSettings;

class Product extends BaseController
{
    public function view($productSlug) {
        $data = $this->storeSettings;
        $data["pageTitle"] = $this->storeSettings["storeName"] . " - All Products" ;
        $data["currentController"] = $this->router->controllerName();
        
        return view("storefront/product", $data);
    }
}


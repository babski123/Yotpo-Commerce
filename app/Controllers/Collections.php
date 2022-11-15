<?php
/**
 * Yotpo Commerce
 * Path: app/Controllers/Collections.php
 * Author: eleazer.ababa181@gmail.com
 * Description: The controller that handles the collection page
 */

namespace App\Controllers;
use App\Models\StoreSettings;

class Collections extends BaseController
{
    public function index()
    {
        $data = $this->storeSettings;
        $data["pageTitle"] = $this->storeSettings["storeName"] . " - All Products" ;
        $data["currentController"] = $this->router->controllerName();
        return view('storefront/collections', $data);
    }
}


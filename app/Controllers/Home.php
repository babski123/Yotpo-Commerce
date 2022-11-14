<?php
/**
 * Yotpo Commerce
 * Path: app/Controllers/Home.php
 * Author: eleazer.ababa181@gmail.com
 * Description: The controller that handles the home page
 */

namespace App\Controllers;
use App\Models\StoreSettings;

class Home extends BaseController
{

    public $storeSettingsModel;
    public $storeSettings;

    public function __construct() {
        $this->storeSettingsModel = model(StoreSettings::class);
        $this->storeSettings = $this->storeSettingsModel->getSettings();
    }

    public function index()
    {
        $data = $this->storeSettings;
        $data["pageTitle"] = $this->storeSettings["storeName"];
        $data["currentController"] = $this->router->controllerName();
        return view('storefront/home', $data);
    }
}

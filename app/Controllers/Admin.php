<?php
/**
 * Yotpo Commerce
 * Path: app/Controllers/Admin.php
 * Author: eleazer.ababa181@gmail.com
 * Description: The controller that handles the admin page
 */

namespace App\Controllers;
use App\Models\StoreSettings;

class Admin extends BaseController
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
        return view('admin/login', $data);
    }
}

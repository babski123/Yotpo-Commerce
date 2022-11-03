<?php
/**
 * Yotpo Commerce
 * Path: app/Controllers/Collections.php
 * Author: eleazer.ababa181@gmail.com
 * Description: The controller that handles the collection page
 */

namespace App\Controllers;
use App\Models\StoreSettings;

class Product extends BaseController
{

    public $storeSettingsModel;
    public $storeSettings;

    public function __construct() {
        $this->storeSettingsModel = model(StoreSettings::class);
        $this->storeSettings = $this->storeSettingsModel->getSettings();
    }

    public function index()
    {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("This page does not exist");
    }

    public function view($productSlug) {
        echo "Test" . $productSlug;
    }
}


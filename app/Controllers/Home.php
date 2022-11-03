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
        helper("date");
        $this->storeSettingsModel = model(StoreSettings::class);
        $this->storeSettings = $this->storeSettingsModel->getSettings();
    }

    public function index()
    {
        $data = [
            "pageTitle" => $this->storeSettings[0]->value
        ];
        return view('pages/home', $data);
    }

    public function test()
    {
        echo $this->storeSettings[0]->value;
    }
}

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
    public function index()
    {
        $data = $this->storeSettings;
        $data["pageTitle"] = $this->storeSettings["storeName"];
        $data["currentController"] = $this->router->controllerName();

        if(is_staff_logged_in($this->session)) {
            return view('admin/dashboard', $data);
        }else{
            return view('admin/login', $data);
        }
    }
}

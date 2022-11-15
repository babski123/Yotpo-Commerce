<?php
/**
 * Yotpo Commerce
 * Path: app/Controllers/Test.php
 * Author: eleazer.ababa181@gmail.com
 * Description: A controller for testing purposes
 */

namespace App\Controllers;
use App\Models\StoreSettings;

class Test extends BaseController
{
    public function index()
    {
        $password = "password";
        echo "Password is: " . $password . "<br>";
        echo "Hash: " . encrypt_pass($password);
        echo "<br>";
        if(password_verify('password', '$2y$10$qhuLPf/BXyAJ9Kf3DgujAOXNhhRoROsTXhU00PCb6v6fhAKsCPZnq')) {
            echo "Password matched!";
        }
    }
}

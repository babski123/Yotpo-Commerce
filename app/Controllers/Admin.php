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
    //home dashboard section
    public function index()
    {
        $data = $this->storeSettings;
        $data["pageTitle"] = $this->storeSettings["storeName"] . " - Dashboard";
        $data["currentController"] = $this->router->controllerName();
        $data["currentMethod"] = $this->router->methodName();

        if(is_staff_logged_in($this->session)) {

            return view('admin/dashboard', $data);

        }else{

            //check the request method
            $data["requestMethod"] = $this->request->getMethod();

            if($data["requestMethod"] == "post") {

                //if form is submitted, try to login
                $data["email"] = $this->request->getPost("email");
                $data["password"] = $this->request->getPost("password");
                $login_status = $this->adminsModel->login($data["email"], $data["password"]); //login function

                if($login_status) {

                    //if logged in successfully, create session and redirect to current url which will be routed to the dashboard
                    $this->session->set([
                        "logged_in_id" => $login_status->id,
                        "logged_in_email" => $login_status->email,
                        "logged_in_name" => $login_status->name
                    ]);

                    return redirect()->to(base_url() . "/admin");

                }else{

                    //if login fail, pass the login status to the view for rendering login failure message
                    $data["login_status"] = $login_status;

                }
            }

            return view('admin/login', $data);

        }
    }

    //products section
    public function products() {
        $data = $this->storeSettings;
        $data["pageTitle"] = $this->storeSettings["storeName"] . " - Products";
        $data["currentController"] = $this->router->controllerName();
        $data["currentMethod"] = $this->router->methodName();

        if(is_staff_logged_in($this->session)) {

            //list all products
            return view('admin/products', $data);

        }else{

            //redirect to admin login page if not logged in
            return redirect()->to(base_url() . "/admin");

        }
    }

    public function addProduct() {
        $data = $this->storeSettings;
        $data["pageTitle"] = $this->storeSettings["storeName"] . " - Add product";
        $data["currentController"] = $this->router->controllerName();
        $data["currentMethod"] = $this->router->methodName();

        return view('admin/add_product', $data);
    }

    public function viewProduct() {
        echo "view product";
    }

    //logout function
    public function logout() {

        //drestory session
        $this->session->destroy();

        //redirect to admin login page
        return redirect()->to(base_url() . "/admin");

    }
}

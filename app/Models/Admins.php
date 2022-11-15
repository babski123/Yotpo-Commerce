<?php
/**
 * Yotpo Commerce
 * Path: app/Models/Admins.php
 * Author: eleazer.ababa181@gmail.com
 * Description: Model for accessing `admins` table
 */

namespace App\Models;

use CodeIgniter\Model;

class Admins extends Model
{
    /*
     * The login function
     * Returns true on successful login
     * Returns false otherwise
     */
    public function login($email, $password) {
        $builder = $this->db->table("admins");
        $builder->select("*");
        $builder->where("email", $email);
        $query = $builder->get();
        $result = $query->getResult();
        if(count($result) == 1) {
            //if email exists, verify the password
            if(password_verify($password, $result[0]->password)) return true;
            else return false;
        }else{
            //if email exists, login fail
            return false;
        }
    }
}
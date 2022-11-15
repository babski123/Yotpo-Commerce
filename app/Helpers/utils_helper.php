<?php
/**
 * Yotpo Commerce
 * Path: app/Helpers/utils_helper.php
 * Author: eleazer.ababa181@gmail.com
 * Description: Utility functions for the admin panel
 */

   //encrypt a password using PASSWORD_BCRYPT
   function encrypt_pass($pass) {
      return password_hash($pass, PASSWORD_BCRYPT);
   }

   //check if staff is currently logged in
   function is_staff_logged_in($session) {
      if($session->get("logged_in_id") != null) {
         return true;
      }else{
         return false;
      }
   }
?>
<?php
/**
 * Yotpo Commerce
 * Path: app/Helpers/utils_helper.php
 * Author: eleazer.ababa181@gmail.com
 * Description: Utility helper functions
 */

 //encrypt a password using PASSWORD_BCRYPT
 function encrypt_pass($pass) {
    return password_hash($pass, PASSWORD_BCRYPT);
 }
?>
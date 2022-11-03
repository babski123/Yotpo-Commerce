<?php
/**
 * Yotpo Commerce
 * Path: app/Helpers/date_helper.php
 * Author: eleazer.ababa181@gmail.com
 * Description: Extends the Date helper functions
 */

//get the current date and time that is acceptable in 'datetime' field type in mysql db
function get_mysql_datetime($time = null) {
    if($time == null) {
        return date ('Y-m-d H:i:s');
    }else{
        return date ('Y-m-d H:i:s', $time);
    }
}

?>
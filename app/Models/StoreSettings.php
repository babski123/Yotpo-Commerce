<?php
/**
 * Yotpo Commerce
 * Path: app/Models/StoreSettings.php
 * Author: eleazer.ababa181@gmail.com
 * Description: Model for accessing store_settings table in DB
 */

namespace App\Models;

use CodeIgniter\Model;

class StoreSettings extends Model
{
    protected $table = "store_settings";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = "object";
    protected $allowedFields = ["value", "updated_at"];
    protected $useTimestamps = false;

    public function getSettings($settingsID = null) {
        if($settingsID == null) {
            return $this->findAll();
        }else{
            return $this->find($settingsID);
        }
    }

}

?>
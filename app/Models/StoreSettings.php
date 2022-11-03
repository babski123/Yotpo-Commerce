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
            $settings = $this->findAll();
            $data = [
                "storeName" => $settings[0]->value,
                "storeEmail" => $settings[1]->value,
                "storeContactNum" => $settings[2]->value,
                "storeAddress" => $settings[3]->value,
                "fbPageUrl" => $settings[4]->value,
                "igPageUrl" => $settings[5]->value,
                "twitterPageUrl" => $settings[6]->value
            ];
            return $data;
        }else{
            return $this->find($settingsID);
        }
    }

}

?>
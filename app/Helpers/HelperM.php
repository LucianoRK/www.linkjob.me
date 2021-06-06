<?php

namespace App\Helpers;

class HelperM {

    public static function dataMysqlParaBr($date = false)
    {
        if ($date) {
            return date("d/m/Y", strtotime($date));
        } else {
            return false;
        }
    }
}
?>
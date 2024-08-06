<?php

namespace Admin\OopPhp\Commons;


class Helper
{
    public static function debugInfo($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die;
    }
}

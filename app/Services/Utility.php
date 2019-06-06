<?php

namespace App\Services;

class Utility
{
    public static function stripXSS($items)
    {
        $result = array_map(function ($item) {
            return strip_tags($item, '<a><code><i><strong>');
        }, $items);

        return $result;
    }
}

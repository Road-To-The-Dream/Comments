<?php

namespace App\Services;

class FileManager
{
    private const USER_PATH = '/../resources/user_files/';
    private const DATETIME_FORMAT = 'H:i:s';

    public static function getPath()
    {
        return date(self::DATETIME_FORMAT) . '-' . $_FILES['myFile']['name'];
    }

    public static function moveFile()
    {
        $targetPath = getcwd() . self::USER_PATH . date(self::DATETIME_FORMAT) . '-' . $_FILES['myFile']['name'];
        move_uploaded_file($_FILES['myFile']['tmp_name'], $targetPath);
    }
}

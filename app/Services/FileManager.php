<?php

namespace App\Services;

use Intervention\Image\Facades\Image as ImageInt;

class FileManager
{
    private const USER_PATH = '/../resources/user_files/';
    private const DATETIME_FORMAT = 'H:i:s';

    public function getPath()
    {
        return date(self::DATETIME_FORMAT) . '-' . $_FILES['myFile']['name'];
    }

    public function resizeImage(string $tmpName)
    {
        $img = ImageInt::make($tmpName);
        $img->resize(320, 240)->save(getcwd() . self::USER_PATH . $this->getPath());
    }

    public function moveFile(string $tmpName)
    {
        $targetPath = getcwd() . self::USER_PATH . $this->getPath();
        move_uploaded_file($tmpName, $targetPath);
    }
}

<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

/**
 * Class FileManager
 * @package App\Services
 */
class FileManager
{
    private const USER_PATH = 'user_files/';
    private const DATETIME_FORMAT = 'H:i:s';

    /**
     * @return string
     */
    public function getPath(): string
    {
        return self::USER_PATH . date(self::DATETIME_FORMAT) . '-' . $_FILES['myFile']['name'];
    }

    /**
     * @param string $tmpName
     */
    public function resizeImage(string $tmpName): void
    {
        $img = Image::make($tmpName);
        $img->resize(320, 240)->save(getcwd() . self::USER_PATH . $this->getPath());
    }

    /**
     * @param string $tmpName
     */
    public function moveFile(string $tmpName): void
    {
        move_uploaded_file($tmpName, $this->getPath());
    }
}

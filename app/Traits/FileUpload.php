<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileUpload
{
    public static function upload($fileOriginal, $path)
    {
        $file = $fileOriginal;
        $fileName = $file->getClientOriginalName();
        $fileLocation = $path;
        Storage::putFileAs($fileLocation, $file, $fileName);

        return $fileLocation . $fileName;
    }
}

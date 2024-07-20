<?php

namespace App\Lib;
class CropImageToSquare
{
    public function crop(string $image)
    {
        // File and new size
        $filename = $image;
        $percent = 0.5;

// Get new sizes
        list($width, $height) = getimagesize($filename);
        $newwidth = $width * $percent;
        $newheight = $height * $percent;

// Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($filename);

// Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        return $thumb;
    }
}

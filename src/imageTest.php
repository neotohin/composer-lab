<?php

/**
 * Documentation: http://image.intervention.io/
 */

require_once '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('public/foo.jpg')->resize(320, 240)->insert('public/watermark.png');

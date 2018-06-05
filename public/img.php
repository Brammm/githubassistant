<?php

header('Content-Type: image/png');
$image = imagecreatefromjpeg(__DIR__ . '/../resources/background.jpg');

$text = $_GET['s'] ?? '';
$black = imagecolorallocate($image, 0, 0, 0);

$strings = explode("\n", wordwrap($text, 40));

foreach ($strings as $index => $string) {
    imagettftext($image, 25, 0, 40, (60 + (40 * $index)), $black, __DIR__ . '/../resources/arial.ttf', $string);
}

imagepng($image);
imagedestroy($image);

<?php
session_start();

// Generate a random string
$captcha_code = '';
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$characters_length = strlen($characters);
for ($i = 0; $i < 6; $i++) {
    $captcha_code .= $characters[rand(0, $characters_length - 1)];
}

// Store the captcha code in a session variable
$_SESSION['captcha_code'] = $captcha_code;

// Create the captcha image
$width = 150;
$height = 50;
$image = imagecreate($width, $height);

// Set colors
$background_color = imagecolorallocate($image, 255, 255, 255); // white
$text_color = imagecolorallocate($image, 0, 0, 0); // black
$line_color = imagecolorallocate($image, 64, 64, 64); // gray
$pixel_color = imagecolorallocate($image, 0, 0, 255); // blue

// Fill the background with the background color
imagefilledrectangle($image, 0, 0, $width, $height, $background_color);

// Add random lines to the image
for ($i = 0; $i < 10; $i++) {
    imageline($image, 0, rand() % $height, $width, rand() % $height, $line_color);
}

// Add random pixels to the image
for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($image, rand() % $width, rand() % $height, $pixel_color);
}

// Add the captcha text to the image
$font_size = 20;
$font_path = __DIR__ . '/fonts/arial.ttf'; // Ensure you have this font file or change the path to an existing one
imagettftext($image, $font_size, 0, 10, 35, $text_color, $font_path, $captcha_code);

// Set the content type header - this is required to display the image
header('Content-Type: image/png');

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>

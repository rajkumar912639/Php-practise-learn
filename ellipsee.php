<?php
// Create a blank image
$width = 400;
$height = 400;
$image = imagecreatetruecolor($width, $height);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255);
$blue = imagecolorallocate($image, 0, 0, 255);

// Fill the background with white
imagefill($image, 0, 0, $white);

// Define ellipse properties
$x = $width / 2; // X-coordinate of the ellipse's center
$y = $height / 2; // Y-coordinate of the ellipse's center
$widthEllipse = 200; // Width of the ellipse
$heightEllipse = 100; // Height of the ellipse

// Draw the ellipse
imageellipse($image, $x, $y, $widthEllipse, $heightEllipse, $blue);

// Output the image to the browser
header("Content-type: image/png");
imagepng($image);

// Clean up resources
imagedestroy($image);
?>

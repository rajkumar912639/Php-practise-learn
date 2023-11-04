<?php
// Create a blank image with a white background
$width = 400;
$height = 400;
$image = imagecreatetruecolor($width, $height);
$bgColor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bgColor);
// Define the arc color (e.g., red)
$arcColor = imagecolorallocate($image, 255, 0, 0);
// Draw an arc
$startAngle = 45; // Starting angle in degrees
$endAngle = 135; // Ending angle in degrees
$x = $width / 2; // X-coordinate of the arc's center
$y = $height / 2; // Y-coordinate of the arc's center
$radiusX = 150; // X-axis radius
$radiusY = 100; // Y-axis radius
imagearc($image, $x, $y, $radiusX, $radiusY, $startAngle, $endAngle, $arcColor);

// Output the image to the browser
header("Content-type: image/png");
imagepng($image);

// Clean up resources
imagedestroy($image);
?>

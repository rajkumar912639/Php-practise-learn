<?php
// File and rotation
$filename = 'test.jpg';
$degrees = 45;
// Content type
header('Content-type: image/jpeg');
// Load
$source = imagecreatefromjpeg($filename);
// Rotate
$rotate = imagerotate($source, $degrees, 0);
// Output
imagejpeg($rotate);
// Free the memory
imagedestroy($source);
imagedestroy($rotate);
?>
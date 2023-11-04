<?php
$image = imagecreatetruecolor(100, 100);
$gray= imagecolorallocate($image, 0xC0,0xC0, 0xC0);
$navy= imagecolorallocate($image, 0x00,0x00, 0x80);
$red= imagecolorallocate($image, 0xFF, 0x00,0x00);
imagefilledarc($image,50, 50, 100, 50, 0, 45,$navy,IMG_ARC_PIE);
imagefilledarc($image,50, 50, 100, 50, 45, 75,$gray, IMG_ARC_PIE);
imagefilledarc($image,50, 50, 100, 50, 75, 360 ,$red, IMG_ARC_PIE);
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
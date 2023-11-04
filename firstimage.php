<?php
 
//how to create our first image
 
$image = imagecreate(500,250);
 
//Allocate colors to the image
 
$red = imagecolorallocate($image,255,0,0);
 
$green = imagecolorallocate($image,0,255,0);
 
$blue = imagecolorallocate($image,0,0,255);
 
Imagefill($image,0,0,$blue);
 
//display the image
 
header('content-type: image/jpeg');
 
imagejpeg($image);
 

?>

<?php
$im = imagecreate(200,200);
$white = imagecolorallocate($im,55,65,75);
imagedashedline($im, 50, 25, 50, 75, $white);
Header('Content-type:image/png');
ImagePNG($im);
?>

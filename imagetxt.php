<?php
	$im = ImageCreate(300,300);
	$black= ImageColorallocate($im,255,255,120);
	$red = ImageColorAllocate($im,255,0,0);
	

	ImageString($im,5,50,160,"hello how are you",$red);
	Header('Content-Type: image/png');
	ImagePNG($im);
	?>

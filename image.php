<?php

echo "aa";
echo phpinfo();

/*if(isset($_GET['h']))
	$height = $_GET['h'];
if(isset($_GET['w']))
	$width = $_GET['w'];
if(isset($_GET['back'])){
	$background = $_GET['back'];
}
else $background = "FFFFFF";

	$backr= "0x".substr($background, 0,2);
	$backg="0x".substr($background, 2, 2);
	$backb="0x".substr($background, 4,2);


if(isset($_GET['fore']))
	$foreground = $_GET['fore'];
else $foreground = "#FFFFFF";
    $forer= "0x".substr($foreground, 0,2);
	$foreg="0x".substr($foreground, 2, 2);
	$foreb="0x".substr($foreground, 4,2);


if(isset($_GET['text']))
$string = $_GET['text'];
else $string = "hi";

$x = intval($width/2);
$y = intval($height/2);
$my_img = imagecreate($width,$height);
$background = imagecolorallocate( $my_img, $backr, $backg, $backb );
$text_colour = imagecolorallocate( $my_img, $forer, $foreg, $foreb);
$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
imagestring( $my_img, 4, $x, $y, $string, $text_colour );

header( "Content-type: image/png" );
imagepng($my_img);
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
*/
?>
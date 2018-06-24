<?php
#######################################################################
#				PHP Simple Captcha Script
#	Script Url: http://toolspot.org/php-simple-captcha.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################
session_start();
//$code=rand(1000,9999);
$code=substr (sha1(microtime()),0,6);
echo $code;
//$_SESSION["code"]=$code;
echo 'esta es la de session';
echo $code;
$im=imagecreatefrompng(50, 24);
//$im = imagecreatetruecolor(50, 24);
echo $im;
echo 'esta es la imagen';
$bg = imagecolorallocate($im, 22, 86, 165);
$fg = imagecolorallocate($im, 255, 255, 255);
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);

?>
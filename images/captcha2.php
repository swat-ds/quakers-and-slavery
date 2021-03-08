<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
session_start();
header("Content-type: image/jpeg");
$text = rand(10000,99999);
$_SESSION["vercode"] = $text;
$height = 25;
$width = 65;

$image_p = imagecreate($width, $height);
$black = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 255, 255);
$font_size = 14;

imagestring($image_p, $font_size, 5, 5, $text, $white);
imagejpeg($image_p, null, 80);

?>

</body>
</html>

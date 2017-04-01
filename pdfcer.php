<?php
error_page uri = $ 405;
$x=0;
$x1=0;
$name=$_POST['name'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];
$dept=$_POST['dept'];
$year=$_POST['year'];
$deg=$_POST['deg'];
$dgpa=$_POST['dgpa'];
//Carregar imagem
$rImg = ImageCreateFromJPEG("Auton_Cert_format.jpeg");

$registration="bearing Registration No.:".$reg." of ".($year-1)."-".$year;
$in="in";

//deg allignment
if($deg=="Bachelor of Technology"){
	$x1=900;
}
if($deg=="Master of Technology"){
	$x1=930;
}

//dept allignment
if($dept=="Computer Science and Engineering"){
	$x=700;
}
if($dept=="Electronics and Communication Engineering"){
	$x=575;
}
if($dept=="Information Technology"){
	$x=880;
}
if($dept=="Electrical Engineering"){
	$x=900;
}
if($dept=="Civil Engineering"){
	$x=980;
}
if($dept=="Mechanical Engineering"){
	$x=880;
}
//Defining color
$cor = imagecolorallocate($rImg, 0, 0, 0);
$font1 = 'arial.ttf';
imagettftext($rImg, 40, 0, 300, 250, $cor, $font1, $roll);

$font2= 'lhandw.ttf';
imagettftext($rImg, 40, 0, 975, 1375, $cor, $font2, $name);
imagettftext($rImg, 40, 0, 400, 1475, $cor, $font2, $registration);
imagettftext($rImg, 40, 0, $x1, 1875, $cor, $font2, $deg);
imagettftext($rImg, 40, 0, 1200, 1950, $cor, $font2, $in);
imagettftext($rImg, 40, 0, $x, 2020, $cor, $font2, $dept);
imagettftext($rImg, 40, 0, 400, 2700, $cor, $font1, $dgpa);
imagettftext($rImg, 40, 0, 600, 2835, $cor, $font1, $year);
//Header e output
header('Content-type: image/jpeg');
imagejpeg($rImg,NULL,100);
 
?>

<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$input = ["⏰Hozir soat: $time"];
  $rand=array_rand($input);
  $text="$input[$rand]";
$nik = ["✵♡࿆🄸🅂🄻🄾🄼🄱🄴🄺♡࿆✵","☕︎🄸🅂🄻🄾🄼🄱🄴🄺★𝑯𝒐𝒛𝒊𝒓𝒈𝒊 𝒂𝒏𝒊𝒒 𝒗𝒂𝒒𝒕➪","••✸🅘🅢🅛🅞🅜🅑🅔🅚✸••","✸ ⓘⓢⓛⓞⓜⓑⓔⓚ✸","꯭✵ ꯭🇮 🇸 🇱 🇴 🇲 🇧 🇪 🇰✵꯭","ＩＳＬＯＭＢＥＫ​","꯭😎🅓🅐🅛🅔🅡🅑🅔🅚😎","✹ＩＳＬＯＭＢＥＫ🌑🌊","┄┅অঠই𝓲𝓼𝓵𝓸𝓶𝓫𝓮𝓴ইঠঅ┅┄","꧁☆κɪɴɢ☆꧂","┄┅অঠইℂ𝕝𝕖𝕧𝕖𝕣 𝔹𝕠𝕪ইঠঅ┅┄","﷽ 𝒜𝓁𝒽𝒶𝓂𝒹𝓊𝓁𝒾𝓁𝓁𝒶𝒽 ﷽"];
$nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt|$time",'about'=>" $text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
$yil = date("Y", strtotime("2 hour"));
$sana = date("d/m/Y", strtotime("2 hour"));

if($yil == "2021"){
header('Content-type: image/jpeg');
$jpg_image = imagecreatefromjpeg('r1.jpg');
$white = imagecolorallocate($jpg_image, 0,0,0);
$font_path = '1.ttf';
$text = $time;
imagettftext($jpg_image, 85, 0, 215, 80, $white, $font_path, $text);
imagejpeg($jpg_image,"1.jpg");
imagedestroy($jpg_image);
}

if($yil == "2021"){
$anb8 = file_get_contents('http://obhavo.uz/tashkent'); $ex1=explode("\n",$anb8);
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/toshkent-viloyati/sergali/');
$ex = explode('title="Havo harorati"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[78]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr);
 $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr);
 $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr);
header('Content-type: image/jpeg');
$jpg_image = imagecreatefromjpeg('r2.jpg');
$white = imagecolorallocate($jpg_image, 0,0,0);
$white= imagecolorallocate($jpg_image, 0,0,0);
$white= imagecolorallocate($jpg_image,0,0,0);
$font_path = '2.ttf';
$fon = '3.ttf';
$font = '4.ttf';
$text = $time;
$text2 = $sana;
$text3 = "$gr1 ... $gr2 ,$havo1";
$text4 = "Hozir havo harorati $obhavo °C";
$text5 = "Tong : $tongr
Kun : $kungr
Oqshom : $oqgr";

imagettftext($jpg_image, 50, 0, 205, 120, $white, $font_path, $text);
imagettftext($jpg_image, 20, 0, 190, 170, $white, $font_path, $text2);
imagettftext($jpg_image, 23, 0, 140, 250, $white, $font, $text3);
imagettftext($jpg_image, 23, 0, 140, 315, $white, $font, $text4);
imagettftext($jpg_image, 18, 0, 150, 370, $white, $fon, $text5);
imagejpeg($jpg_image,"2.jpg");
imagedestroy($jpg_image);
}

if($yil == "2021"){
$anb8 = file_get_contents('http://obhavo.uz/tashkent'); $ex1=explode("\n",$anb8);
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/toshkent-viloyati/sergali/');
$ex = explode('title="Havo harorati"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
header('Content-type: image/jpeg');
$jpg_image = imagecreatefromjpeg('r3.jpg');
$white = imagecolorallocate($jpg_image, 0,0,0);
$white= imagecolorallocate($jpg_image, 0, 0, 0);
$white = imagecolorallocate($jpg_image, 0, 0,0);
$font_path = '2.ttf';
$text = $time;
$text2 = $sana;
$text3 = "$obhavo C";
imagettftext($jpg_image, 50, 0, 170, 230, $white, $font_path, $text);
imagettftext($jpg_image, 15, 0, 200, 280, $white, $font_path, $text2);
imagettftext($jpg_image, 15, 0, 200, 305, $white, $font_path, $text3);
imagejpeg($jpg_image,"3.jpg");
imagedestroy($jpg_image);
}

if($yil == "2021"){
header('Content-type: image/jpeg');
$jpg_image = imagecreatefromjpeg('r4.jpg');
$white = imagecolorallocate($jpg_image, 75,75,255);
$white= imagecolorallocate($jpg_image, 75,75,255);
$white = imagecolorallocate($jpg_image, 255,75,75);
$font_path = '2.ttf';
$text = $time;
$text2 = $sana;
imagettftext($jpg_image, 85, 0, 215, 80, $white, $font_path, $text);
imagettftext($jpg_image, 50, 0, 190, 170, $white, $font_path, $text2);
imagejpeg($jpg_image,"4.jpg");
imagedestroy($jpg_image);
}
if($yil == "2021"){
header('Content-type: image/jpeg');
$jpg_image = imagecreatefromjpeg('r5.jpg');
$white = imagecolorallocate($jpg_image, 0,0,0);
$white= imagecolorallocate($jpg_image, 0,0,0);
$white = imagecolorallocate($jpg_image, 0,0,0);
$font_path = '5.ttf';
$text = $time;
$text2 = $sana;
imagettftext($jpg_image, 85, 0, 215, 80, $white, $font_path, $text);
imagettftext($jpg_image, 50, 0, 190, 170, $white, $font_path, $text2);
imagejpeg($jpg_image,"5.jpg");
imagedestroy($jpg_image);
}
$rm = ["1.jpg","2.jpg","3.jpg","4.jpg"];
  $ras=array_rand($rm);
  $rasm="$rm[$ras]";

$MadelineProto->photos->updateProfilePhoto(['file' => "avatar.jpg" ]);
$MadelineProto->photos->uploadProfilePhoto(['file' => $rasm ]);

?>
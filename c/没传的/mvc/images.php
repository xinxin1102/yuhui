<?php
header("Content-type:image/png","charset=utf-8");
$img = imagecreatetruecolor(120, 80);//创建一个真彩图像，参数，宽度和高度
//echo $img;//成功后返回图象资源,失败后返回 FALSE 。
$bgcolor = imagecolorallocate($img, 255, 0, 0);//为一幅图像分配颜色
//int imagecolorallocate ( resource $image , int $red , int $green , int $blue )
imagefill($img, 0, 0, $bgcolor);//区域填充
//bool imagefill ( resource $image , int $x , int $y , int $color ),imagefill() 在 image 图像的坐标 x，y（图像左上角为 0, 0）处用 color 颜色执行区域填充（即与 x, y 点颜色相同且相邻的点都会被填充）。
$fontcolor = imagecolorallocate($img, 255, 255, 0);//文字的颜色
$font_file = 'Helvetica.ttf';
$rect = imagettfbbox(30, 0, $font_file, '我是xfgfds');//给出一个使用 Helvetica 字体的文本框,逆时针
$w=$rect[2]-$rect[0];
$h=$rect[1]-$rect[5];
imagefttext($img,30,0,(120-$w)/2,(80-$h)/2+$h,$fontcolor,$font_file,"我是xfgfds");//使用 Helvetica 字体将文本写入图像,图片，大小，角度，位置，颜色，字体，内容
$linecolor = imagecolorallocate($img, 0, 0, 0);//线的颜色
imageline($img,0,0,120,80,$linecolor);//imageline() 用 color 颜色在图像 image 中从坐标 x1，y1 到 x2，y2（图像左上角为 0, 0）画一条线段。
imagepng($img);

?>
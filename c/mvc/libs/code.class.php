<?php
class code
{
    private $letter = "abcdefg345678ABCDEFGhijklmnopq";//验证的因子，随机出现的字母或者数字
    private $currentLetter;
    private $letterNum = 4;//数量
    public $width = 200;
    public $height = 80;
    public $imgType = "png";//图片的类型
    public $lineNum = 15;//线条的数量
    public $img;
    public $font_file;
    public $size=array("min"=>25,"max"=>30);
    public $pixnum=100;
    public $resultLetter;
    private function getBgColor()
    {//背景色 有三个颜色，都取随机数，放到数组中
        $arr[0] = mt_rand(0, 128);//取随机数
        $arr[1] = mt_rand(0, 128);//取随机数
        $arr[2] = mt_rand(0, 128);//取随机数
        return $arr;
    }
    private function  getFontColor(){
        $arr[0] = mt_rand(129, 255);//取随机数
        $arr[1] = mt_rand(129, 255);//取随机数
        $arr[2] = mt_rand(129, 255);//取随机数
        return $arr;
    }
    private function getFont(){
        for($i=0;$i<$this->letterNum;$i++){
            $length=strlen($this->letter)-1;//获取字符串长度；
            $start=mt_rand(0,$length);
            $this->currentLetter.=$this->letter[$start];
        }
        $this->resultLetter=strtolower($this->currentLetter);
        return $this->resultLetter;

    }

    public function output()
    {
        header("Content-type:image/" . $this->imgType, "charset=utf-8");
        $out = "image" . $this->imgType;//    输出图片的类型
//        1.创建画布->填充颜色
        $this->create();
//        2.创建随机数字
        $this->createText();
//        3.创建干扰线，随机
        $this->createLine();
        $out($this->img);
        echo $this->resultLetter;
        imagedestroy($this->img);
    }
    private function create()
    {
        $this->img = imagecreatetruecolor($this->width, $this->height);//创建画布
        $colorArr = $this->getBgColor();//画布的颜色
        $bgcolor = imagecolorallocate($this->img, $colorArr[0], $colorArr[1], $colorArr[2]);//为一幅图像分配颜色
        imagefill($this->img, 0, 0, $bgcolor);//区域填充
    }
    private function createText(){
        $this->getFont();
        for($i=0;$i<$this->letterNum;$i++){
            $scale=mt_rand(-15,15);
            $fontcolor1=$this->getFontColor();
            $size=mt_rand($this->size["min"],$this->size["max"]);
            $fontcolor = imagecolorallocate($this->img, $fontcolor1[0],$fontcolor1[1],$fontcolor1[2]);//文字的颜色
            $x=$this->width/$this->letterNum;
            $rect = imagettfbbox($size, $scale, $this->font_file, $this->currentLetter[$i]);//给出一个使用 Helvetica 字体的文本框,逆时针
            $h = $rect[1] - $rect[5];
            $y=mt_rand($h,$this->height);
            imagettftext($this->img, $size, $scale,(10+$x*$i)+mt_rand(-10,10), $y, $fontcolor, $this->font_file,$this->currentLetter[$i]);
        }
    }

    private function createLine(){
        for($i=0;$i<$this->lineNum;$i++){
            $fontcolor1=$this->getFontColor();
            $linecolor = imagecolorallocate($this->img,$fontcolor1[0],$fontcolor1[1],$fontcolor1[2]);//文字的颜色
            $x1=mt_rand(0,$this->width);
            $y1=mt_rand(0,$this->height);
            $x2=mt_rand(0,$this->width);
            $y2=mt_rand(0,$this->height);
            imageline($this->img,$x1,$y1,$x2,$y2,$linecolor);
        }
        for($i=0;$i<$this->pixnum;$i++){
            $fontcolor1=$this->getFontColor();
            $linecolor2 = imagecolorallocate($this->img,$fontcolor1[0],$fontcolor1[1],$fontcolor1[2]);
            $x1=mt_rand(0,$this->width);
            $y1=mt_rand(0,$this->height);
            imagesetpixel($this->img,$x1,$y1,$linecolor2);
        }
    }
}
//$code=new code();
//$code->output();
?>
<?php
//路由的方式
class route{
    private static $module;//模型
    private  static $file;//文件
    private  static $action;//方法
    function  init(){
        $this->getInfo();
    }
    function getInfo(){
        self::$module=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";//也就是同级下面的
        self::$file=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";//所要的文件
        self::$action=isset($_REQUEST["a"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";//方法
        $file="module/".self::$module."/".self::$file.".class.php";
        if(is_file($file)){//文件是否存在
            include $file;
            if(class_exists(self::$file)){//检测类是否存在
                $obj=new self::$file();
                if(method_exists($obj,self::$action)){//检查类的方法是否存在于指定的 obj中
                    $method=self::$action;
                    $obj->$method();
                }else{
                    echo self::$action."方法不存在";
                }
            }else{
                echo self::$file."类找不到";
            }
        }else{
            echo $file."文件找不到";
        }
    }
}
?>